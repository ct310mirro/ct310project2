<?php //
//echo Uri::main();
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$path = parse_url($actual_link, PHP_URL_PATH);
$pathFragments = explode('/', $path);
$end = end($pathFragments);


echo Asset::img($end, array('class' => 'centerPic'));
?>

