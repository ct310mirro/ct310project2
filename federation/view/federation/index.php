<?php  
    
    foreach($demos as $attid): ?>
		<a href="<?=Uri::create('index.php/federation/attraction/'.$attid->id); ?>">
			<?php echo $attid->title; ?>
		</a><br />
	<?php endforeach; ?>

<p></p>
	<?php  
    
    foreach($demos as $attid): ?>
		<a href="<?=Uri::create('index.php/federation/attrimage/'.$attid->image); ?>">
			<?php echo $attid->image; ?>
		</a><br />
	<?php endforeach; ?>