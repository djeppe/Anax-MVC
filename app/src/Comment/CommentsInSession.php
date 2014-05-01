<?php

namespace Phpmvc\Comment;

/**
 * To attach comments-flow to a page or some content.
 *
 */
class CommentsInSession implements \Anax\DI\IInjectionAware
{
    use \Anax\DI\TInjectable;



    /**
     * Add a new comment.
     *
     * @param array $comment with all details.
     * 
     * @return void
     */
    public function add($comment, $pageId)
    {
        if($pageId == 1) {
            $comments = $this->session->get('comments', []);
            $comments[] = $comment;
            $this->session->set('comments', $comments);
        } else {
            $comments_temp = $this->session->get('comments_temp', []);
            $comments_temp[] = $comment;
            $this->session->set('comments_temp', $comments);
        }
    }
    
    /**
     * Save an edited post.
     * 
     * @param array $comment with all details
     * @param $id
     * 
     * @return void
     */
    public function save($id, $comment) {
        $comments = $this->session->get('comments', []);
        $comments[$id] = $comment;
        $this->session->set('comments', $comments);
    }
    

    /**
     * Find and return all comments.
     *
     * @return array with all comments.
     */
    public function findAll($id = null, $pageId = null)
    {
        $comments_ = 'comments';
        $comments = $this->session->get('comments', []);
        if($id == null) {
            /*return $this->session->get('comments', []);*/
            return $comments;
        } else {
            return $comments[$id];
        }
        
    }
    
    
    /**
     * Find Comment by id.
     * 
     * @param $id
     * 
     * @return comments with specific id.
     */
    public function findCommentById($id) {
        $comments = $this->session->get('comments', []);
        return $comments[$id];
    }

    /**
     * Delete all comments.
     *
     * @return void
     */
    public function deleteComment($id)
    {
        $comments = $this->session->get('comments', []);
        unset($comments[$id]);
        $this->session->set('comments', $comments);
    }


    /**
     * Delete all comments.
     *
     * @return void
     */
    public function deleteAll()
    {
        $this->session->set('comments', []);
    }
}
