<?php

namespace Phpmvc\Comment;

/**
 * To attach comments-flow to a page or some content.
 *
 */
class CommentController implements \Anax\DI\IInjectionAware
{
    use \Anax\DI\TInjectable;



    /**
     * View all comments.
     *
     * @return void
     */
    public function viewAction()
    {
        $comments = new CommentsInSession();
        $comments->setDI($this->di);

        $all = $comments->findAll();

        $this->views->add('comment/comments', [
            'comments' => $all,
        ]);
    }



    /**
     * Add a comment.
     *
     * @return void
     */
    public function addAction()
    {
        $isPosted = $this->request->getPost('doCreate');
        
        if (!$isPosted) {
            $this->response->redirect($this->request->getPost('redirect'));
        }

        $comment = [
            'content'   => $this->request->getPost('content'),
            'name'      => $this->request->getPost('name'),
            'web'       => $this->request->getPost('web'),
            'mail'      => $this->request->getPost('mail'),
            'timestamp' => time(),
            'ip'        => $this->request->getServer('REMOTE_ADDR'),
        ];

        $comments = new CommentsInSession();
        $comments->setDI($this->di);
        
        $pageId = $this->request->getPost('pageId');

        $comments->add($comment, $pageId);

        $this->response->redirect($this->request->getPost('redirect'));
    }
    
    
    /**
     * Save edited post
     * 
     * @return void
     */
    public function saveAction() {
        $isPosted = $this->request->getPost('doSave');
        
        if(!$isPosted) {
            $this->response->redirect($this->request->getPost('redirect'));
        }
        
        $comment = [
            'content'   => $this->request->getPost('content'),
            'name'      => $this->request->getPost('name'),
            'web'       => $this->request->getPost('web'),
            'mail'      => $this->request->getPost('mail'),
            'timestamp' => time(),
            'ip'        => $this->request->getServer('REMOTE_ADDR'),
        ];
        
        $comments = new CommentsInSession();
        $comments->setDI($this->di);
        
        $id = $this->request->getPost('id');
        
        $comments->save($id, $comment);
        
        $this->response->redirect($this->request->getPost('redirect'));
    }
    
    /**
     * Edit post
     * 
     * @return void
     */
    public function editAction() {
        $isPosted = $this->request->getPost('doEdit');
        
        if(!$isPosted) {
            $this->response->redirect($this->request->getPost('redirect'));
        }
        
        $comments = new CommentsInSession();
        $comments->setDI($this->di);
        
        $id = $this->request->getPost('id');
        
        $comment = $comments->findCommentById($id);
        $comment['id'] = $id;
        
        $this->views->add('comment/edit', $comment);
    }

    /**
     * Remove a comment.
     *
     * @return void
     */
    public function removeAction()
    {
        $isPosted = $this->request->getPost('doRemove');
        
        if (!$isPosted) {
            $this->response->redirect($this->request->getPost('redirect'));
        }

        $comments = new CommentsInSession();
        $comments->setDI($this->di);
        
        $id = $this->request->getPost('id');

        $comments->deleteComment($id);

        $this->response->redirect($this->request->getPost('redirect'));
    }


    /**
     * Remove all comments.
     *
     * @return void
     */
    public function removeAllAction()
    {
        $isPosted = $this->request->getPost('doRemoveAll');
        
        if (!$isPosted) {
            $this->response->redirect($this->request->getPost('redirect'));
        }

        $comments = new CommentsInSession();
        $comments->setDI($this->di);

        $comments->deleteAll();

        $this->response->redirect($this->request->getPost('redirect'));
    }
}
