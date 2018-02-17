<?php
//Wheel manufacturer PHP Script
  session_start();
  $mydata = $_GET;
  $busy = true;


while($busy == true){
if($mydata['uid']==$_SESSION['Wman_count']){
    $busy = false;
    break;
  }
  sleep(1);
}
$_SESSION['queue'][$mydata['uid']-1]['stat'] = 'Wheel Production Started';

  if($mydata['Wheel'] === "WheelType#1")
  {
    sleep(2);
  }

  else if($mydata['Wheel'] === "WheelType#2")
  {
    sleep(3);
  }

  else if($mydata['Wheel'] === "WheelType#3")
  {
    sleep(4);
  }

  if($mydata['WheelColor'] !== "Blue"){
    include('man_paint.php');
  }

  $_SESSION['Wman_count'] = $mydata['uid']+1;
  echo "Wdone";
?>
