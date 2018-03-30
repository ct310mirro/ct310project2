<?php if($status === 'error') {?>
		<p>Incorrect details entered. Please try again.</p>
	<?php } ?>
	
<div class="col-md-4">
   	<div class="panel panel-default">
	  	<div class="panel-heading">
	    	<h3 class="panel-title">Please sign in</h3>
	 	</div>
	  	<div class="panel-body">
	    	<form action="checkLogin" method="POST" accept-charset="UTF-8" role="form">
                  <fieldset>
	    	  	<div class="form-group">
	    		    <input class="form-control" placeholder="Username" name="username" type="text" required>
	    		</div>
	    		<div class="form-group">
	    			<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
	    		</div>
	    		
	    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
	    	</fieldset>
	      	</form>
	    </div>
	</div>
</div>
