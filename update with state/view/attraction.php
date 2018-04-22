<?php echo Asset::img($demos->image, array('class' => 'centerPic')); ?>
<p id='infot'>
State:<?php echo " ". $demos->state;?><br>
<?php echo $demos->body;?>

</p>
<?php
	
	$session = Session::instance(); 
	$username = $session->get('username');
    $usid = $session->get('userid');
    if (isset($username)) { ?>
    <div class="h2Content">
	
	<form method="post" action = <?php echo Uri::create('index.php/comment/addComment/')?>>
		<label for="id">Comment:</label>
		<input type="text" name="comment" required >
        <input type ="hidden" name="Pageid" value = <?php echo $demos->id?>> 
        <input type ="hidden" name="PageTitle" value = <?php echo $demos->title?>> 
		<br />
   <input type ="submit" value ="Comment" name ="send" >
       
	</form>
    </div>
   
   <?php }
    else{
        echo "<p><strong> Please login to post comments.</strong><p>";
    }
?>

<p id='infot'>
<?php foreach ($demos->comment as $c){ ?>
   <p>
    <?php echo $c->text; ?><br>
         <?php if (isset($username) && $usid == 12346): ?>
   <form method="post" action = <?php echo Uri::create('index.php/comment/editComment/'.$c->id)?>>
    <input type = "hidden"name="cID" value = <?php echo $c->id?>>
    <input type = "hidden"name="cText" value = <?php echo $c->text?>>	
   <input type ="submit" value ="Edit" name ="Edit" >
</form> 
<button> <a href= <?php echo Uri::create('index.php/comment/deleteComment/'.$c->id); ?>> <?php echo "Delete";?>    </a></button>
<?php endif; ?>
    <?php
}
    ?>
<p>
	<button> <a href= <?php echo Uri::create('index.php/shoppingcart/shoppingcart/'.$demos->id); ?>> <?php echo "Order Brochure";?>    </a></button>
	
</p>

