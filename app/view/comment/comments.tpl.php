<hr>

<h2>Comments</h2>

<?php if (is_array($comments)) : ?>
<div class='comments'>
<?php foreach ($comments as $id => $comment) : ?>
<?php
    $name       = $comment['name'];
    $time       = $comment['timestamp'];
    $content    = $comment['content'];
    $web        = $comment['web'];
    $mail       = $comment['mail'];
    date_default_timezone_set('GMT');
?>

<p><span style="color: blue";><?=$name?></span> @ <?=date("Y/m/d G.i:s<br>", $time);?> Hours</p>
<p><?=$content?></p>
<p><span style="color: red";>web::</span> <?=$web?> || <span style="color: red";>contact::</span> <?=$mail?></p>
<form method=post>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="redirect" value="<?=$_SERVER['HTTP_REFERER']?>"> 
<p class=buttons>
    <input type='submit' name='doEdit' value='Edit' onClick="this.form.action = '<?=$this->url->create('comment/edit')?>'"/>
    <input type='submit' name='doRemoveAll' value='Delete' onClick="this.form.action = '<?=$this->url->create('comment/remove')?>'"/>
</p>
    </form>
<hr>

<?php endforeach; ?>
</div>
<?php endif; ?>