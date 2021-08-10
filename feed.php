<?php


//$requestMethod = 'GET';//
//$url= 'https://api.twitter.com/1.1/statuses/user_timeline.json';
//$url= 'https://api.twitter.com/2/tweets/search/recent';
//$getfield = '?screen_name=JeffBezos&count=20'; 
//$getfield = '?query=Covid%delhi';
//$getfield ='?query=' + $_POST['t1'];
//$getfield = $_GET["Tweet"];

//foreach ($tweets as $tweet) {
//	echo '<p>'.$tweet->text.'<br>Posted on: <a href="https://twitter.com/'.$tweet->user->screen_name.'/status/'.'</a></p>';
$city_variable = $_POST["Metro"];
$resource_variable = $_POST["Resource"];
$tweet_variable = $_POST["Tweet"];
$feed = urlencode("https://twitter.com/search?q=" . $tweet_variable . '+' . $city_variable . '+' . '%28' . $resource_variable . '%29' . '+-"' . 'needed' .  '"+-"' . 'need' .  '"+-"' . 'required' .  '"+-"' . 'requirement' . '"&' . 'f=live');
//$feed = "https://twitter.com/search?q=";
//echo '<script>window.location.href="'. $feed .'";</script>';
header('Location:'. urldecode($feed));
exit();

?>

