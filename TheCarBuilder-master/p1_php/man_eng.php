<?php
//Engine manufacturer PHP Script
  session_start();
  $mydata = $_GET;
  $busy = true;

// /echo $mydata['uid']." and ".$_SESSION['Eman_count'];
while($busy == true){
  if($mydata['uid']==$_SESSION['Eman_count']){

    $busy = false;
  }
  sleep(1);
}
  $_SESSION['queue'][$mydata['uid']-1]['stat'] = 'Engine Production started';

  if($mydata['Engine'] === "150 Horsepower")
  {
    sleep(5);
  }

  else if($mydata['Engine'] === "250 Horsepower")
  {
    sleep(3);
  }

  else if($mydata['Engine'] === "400 Horsepower")
  {
    sleep(4);
  }

  if($mydata['EngineColor'] !== "Blue"){
    include('man_paint.php' );
  }

  $_SESSION['Eman_count'] = $mydata['uid']+1;
  echo "Edone";
?>
