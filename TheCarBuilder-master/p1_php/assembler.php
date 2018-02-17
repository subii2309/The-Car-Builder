<?php
//if(session_id() == '') {
    session_start();

if(isset($_SESSION['visit_count']))
{
    //print_r('set<br>');
     if($_SESSION['visit_count'] < 4){
       $_SESSION['visit_count'] ++;
       array_push($_SESSION['queue'], array(
                              "car_array" => array(
                                             "Engine"=>$_GET['Engine'],
                                             "EngineColor"=>$_GET['EngineColor'],
                                             "Body"=>$_GET['Body'],
                                             "BodyColor"=>$_GET['BodyColor'],
                                             "Wheel"=>$_GET['Wheel'],
                                             "WheelColor"=>$_GET['WheelColor']
                                           ),
                              "v_count" => $_SESSION['visit_count'],
                              "stat" => "inQueue"
                            ));
      //echo 'You are visitor number ' . $_SESSION['visit_count'].'<br>';
    //  echo json_encode($_SESSION['queue']);
    echo json_encode(array(
                      "success"=>"true",
                      "uid"=>$_SESSION['visit_count']));
      //var_dump($_SESSION['queue']);
    }
    else{
      echo 'Assembly is Full, Please Wait';
    }
}
else
{
     $_SESSION['visit_count'] = 1;
     //echo 'not set'.session_id().'<br>';
    $_SESSION['queue'][] =   array(
                           "car_array" => array(
                                          "Engine"=>$_GET['Engine'],
                                          "EngineColor"=>$_GET['EngineColor'],
                                          "Body"=>$_GET['Body'],
                                          "BodyColor"=>$_GET['BodyColor'],
                                          "Wheel"=>$_GET['Wheel'],
                                          "WheelColor"=>$_GET['WheelColor']
                                        ),
                           "v_count" => $_SESSION['visit_count'],
                           "stat" => "inQueue"
                           );
   $_SESSION['Eman_count'] = 1;
   $_SESSION['Bman_count'] = 1;
   $_SESSION['Wman_count'] = 1;
   $_SESSION['Pman_busy'] = 1;
   //echo json_encode($_SESSION['queue']);
     //array_push($_SESSION['queue'], $_GET);
     //echo 'You are visitor number ' . $_SESSION['visit_count'].'<br>';
     //var_dump($_SESSION['queue']);
    echo json_encode(array(
                      "success"=>"true",
                      "uid"=>$_SESSION['visit_count']));
}

//exec('php -q http://localhost/p1_php/dispatcher.php',$out);

//var_dump($out);


?>
