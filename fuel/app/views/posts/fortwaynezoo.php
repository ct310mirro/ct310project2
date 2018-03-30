<!--To-Do: figure out global variables, header, footer-->
<!--img source: http://www.kansastravel.org/gardenofeden.htm-->
<!DOCTYPE html>
<?php echo Asset::img('childrenzoo.jpg', array('class' => 'centerPic')); ?>
<p id=infot>Fort Wayne Zoo - Image from <a href="https://www.eiteljorg.org">www.eiteljorg.org</a>

<p id='infot'>
Be ready to be involved with the experience of a lifetime with
            African continent's animal.If your kids love Disney Movie "The
            Lion King", they will love this exibit. Some of the Animals include
            lions, hyenas and honey badger etc. We also have fun Safari ride
            that gives your aerial view of the beautiful African Animals.</p>
        <h3>Australian Adventure</h3>
</p>

   <form name="commentbox" method="post" id = 'tinput' action="fortwaynezoo.php">
        <textarea name="field" rows="5"></textarea>
        <input type="hidden" value="done" name="comment_in">
        <input type="submit" id = "but" value="Comment">
    </form>
    
	
	
    <?php
	
	$session = Session::instance(); 
	$username = $session->get('username');
	
    if (isset($username)) {
        if(isset($_POST['comment_in'])) {
            $commentstr = filter_var($_POST['field'], FILTER_SANITIZE_STRING);
            
            if(empty($_POST['field'])) {
                //add div for formatting here
                echo '<p>Empty comment. Please try again.</p>';
                
            }
            
            else {
                //div for formatting
                echo "<p>" . $commentstr . "<p>";
                //maybe div for date
                echo "<p>" . date("Y-m-d h:i:sa") . "</p>";
            }
        }
	}
	else {
        echo "<p> Please login to post comments.<p>";
    }    
	
?>



