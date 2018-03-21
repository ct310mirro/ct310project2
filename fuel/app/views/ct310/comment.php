
<h2>Comment Experience</h2>
<form action="#" method="post" onsubmit="func()">
  <p><input type"text" name="name" placeholder='Name'></p>
  <p><textarea name="comment" rows="10" cols="68" placeholder='Write your comment here.'></textarea></p>
  <p><input type='submit' name='submit' value='Post Comment' id='submit2'></p>
</form>
<p>Comments</p>
<hr align="left" width="95%">
<?php
/* removing white space before and after $comment and $name */
  $comment = trim(Input::post('comment'));
  $name = trim(strtoupper(Input::post('name')));
  $comment = filter_var($comment, FILTER_SANITIZE_STRING); /*removes any html tag or script */
  $name = filter_var($name, FILTER_SANITIZE_STRING); /*removes any html tag or script */
if (filter_has_var(INPUT_POST,'submit')){
  if (!empty($comment) && !empty($name)){ ?> <!-- if only there is comment and name-->
    <!-- Print Status -->
    <p><h3><?php echo $name ?></h3><b id ="date"> <?php echo date('j F Y');?></b></p>
    <p class="post-comments"><?php echo $comment; ?></p>
  
  <?php }}?>
