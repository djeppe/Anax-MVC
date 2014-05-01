<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->request->getCurrentUrl()?>">
        <input type="hidden" name="pageId" value="1"?>
        <fieldset>
        <legend>Leave a comment</legend>
        <p><textarea class='comment_textarea' name='content' placeholder='Write a Comment here...'><?=$content?></textarea></p>
        <p><input class='comment' type='text' name='name' placeholder='Name' value='<?=$name?>'/></p>
        <p><input class='comment' type='text' name='web' placeholder='Website' value='<?=$web?>'/></p>
        <p><input class='comment' type='text' name='mail' placeholder='E-mail' value='<?=$mail?>'/></p>
        <p class=buttons>
            <input type='submit' name='doCreate' value='Comment' onClick="this.form.action = '<?=$this->url->create('comment/add')?>'"/>
            <input type='reset' value='Reset'/>
            <input type='submit' name='doRemoveAll' value='Remove all' onClick="this.form.action = '<?=$this->url->create('comment/remove-all')?>'"/>
        </p>
        <output><?=$output?></output>
        </fieldset>
    </form>
</div>
