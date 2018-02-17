<?php
//if(session_id() == '') {
    session_start();



   $_SESSION['stat'] = array_merge ($_SESSION['Eman_busy'],$_SESSION['Bman_busy'],$_SESSION['Wman_busy']]);
    echo json_encode($_SESSION['stat']);
}

//exec('php -q http://localhost/p1_php/dispatcher.php',$out);

//var_dump($out);


?>
