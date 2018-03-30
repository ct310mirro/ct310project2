<!--To-Do: figure out global variables, header, footer-->
<!--img source: http://www.kansastravel.org/gardenofeden.htm-->
<!DOCTYPE html>
<?php echo Asset::img('gardenofeden.jpg', array('id' => 'eden')); ?>
<p id=infot>Garden of Eden - Image from <a href="https://www.kansastravel.org/gardenofeden.htm">www.kansastravel.org</a>

<p id='infot'>
S.P. Dinsmoor, a retired schoolteacher and Civil War veteran, began building a unique 11-room log cabin, with logs up to 27 feet long in 1891. In 1907, he finished and then began building the garden that would surround his him for the next 22 years. This garden was built from 113 tons of concrete and limestone, telling the story of the world's creation. There is plenty of variety to see and experience, from the 150 and more figures, various insects, and 40 foot-tall trees. Although the open hours at the Garden of Eden are limited, many of the attractions this has to offer can be seen from the outside as well. It is certainly a worthwhile visit!
</p>

   <form name="commentbox" method="post" id = 'tinput' action="gardenofeden.php">
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



