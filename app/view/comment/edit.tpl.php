<?php
var_dump($_POST);
?>

<div class='comment-form'>
    <form method='post'>
    <input type="hidden" name="redirect" value="<?=$this->url->create('redovisning')?>">
    <input type="hidden" name="id" value="<?=$id?>">
    <fieldset>
        <legend>Edit post</legend>
        <p><label>Comment:<br/><textarea name='content'><?=$content?></textarea></label></p>
        <p><label>Name:<br/><input type="text" name='name' value='<?=$name?>'></label></p>
        <p><label>Website:<br/><input type="text" name='web' value='<?=$web?>'></label></p>
        <p><label>E-mail:<br/><input type="text" name='mail' value='<?=$mail?>'></label></p>
        <input type="submit" name="doSave" value="Save" onClick="this.form.action = '<?=$this->url->create('comment/save')?>'"/>
        <input type="submit" name="doDelete" value="Delete" onClick="this.form.action = '<?=$this->url->create('comment/delete')?>'"/> 
    </fieldset>
    
    </form>

</div>