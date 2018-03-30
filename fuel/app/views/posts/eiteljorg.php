<!--To-Do: figure out global variables, header, footer-->
<!--img source: http://www.kansastravel.org/gardenofeden.htm-->
<!DOCTYPE html>
<?php echo Asset::img('bambole.jpg', array('class' => 'centerPic')); ?>
<p id=infot>Eiteljorg Museum of American Indians and Western Art - Image from <a href="https://www.eiteljorg.org">www.eiteljorg.org</a>

<p id='infot'>
The Eiteljorg Museum of American Indians and Western Art is located
            in  heart of Indianapolis'downtown. The museum has the finest
            collection of Native contemporary art in the world. We are proud to
            offer engaging exibitions to promote our founder, Harrison Eiteljorg's
            vision to acknowledge art and culture of Native American and American
            west.
</p>

   <form name="commentbox" method="post" id = 'tinput' action="eiteljorg.php">
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



