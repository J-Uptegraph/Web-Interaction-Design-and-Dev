<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="initial-scale = 1,width=device-width"/>
<meta name="description" content="Johnathan's Web Page 11">
<meta name="author" content="Johnathan Uptegraph">
<meta charset="utf-8">
<title>Johnathan's WebPage 11</title>
</head>
<body>
<?php
date_default_timezone_set('US/Eastern');
$todayMDY=date('m-d-Y');
echo "\n".'<p>Today is '.$todayMDY.'</p>';
$hours_and_minutes_am_or_pm=date('h:ia');
echo "\n".'<p>The time is now '.hours_and_minutes_am_or_pm.'</p>';
$Seconds=date('s');
echo '<br>The second hand ('.$Seconds.') is ';
if($Seconds%2==0){
      echo 'even';
} 
else {
      echo "odd";
}
?>

<!-- // when using php / before single quotes "'" like this /'-->
<!-- // when using php / before single quotes "'" like this /'-->
<!-- // u -->