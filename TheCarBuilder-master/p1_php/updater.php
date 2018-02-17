<?php
  session_start();
  $mydata = $_GET;
  $_SESSION['queue'][$mydata['uid']-1]['stat'] = 'Done';

?>
