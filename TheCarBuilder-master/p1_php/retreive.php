<?php
//script to retreive session values
session_start();
if(isset($_SESSION['queue']))
{
  echo json_encode($_SESSION['queue']);
}
else{
  echo "No live sessions";
}
?>
