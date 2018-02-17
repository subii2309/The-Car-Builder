<?php
//Body manufacturer PHP Script
  session_start();
  $mydata = $_GET;
  $busy = true;


while($busy == true){
  if($mydata['uid']==$_SESSION['Bman_count']){
    $busy = false;
  }
  sleep(1);
}

$_SESSION['queue'][$mydata['uid']-1]['stat'] = 'Body Production Started';

  if($mydata['Body'] === "Similar to Ford Fiesta")
  {
    sleep(2);
  }

  else if($mydata['Body'] === "Similar to Ford Fusion")
  {
    sleep(3);
  }

  else if($mydata['Body'] === "Similar to Ford Mustang")
  {
    sleep(4);
  }

  if($mydata['BodyColor'] !== "Blue"){
    include('man_paint.php');
  }

  $_SESSION['Bman_count'] = $mydata['uid']+1;
  echo "Bdone";
?>
