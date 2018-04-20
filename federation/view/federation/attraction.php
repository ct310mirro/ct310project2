<?php 
$arr = array(array('id' => "10",'name' => "Eiteljorg Museum of American Indians and Western Art", 'state' => "IN"));
$run = Format::forge($arr)->to_json();

return $run;
?>