<?php
//script to stop session
session_start();
echo 'closed session '. session_id();
session_destroy();
?>
