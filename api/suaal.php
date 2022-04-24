<?php
header('content-type: application/json');
include 'conn.php';

function suaal($db){
    $data =array();
    extract($_POST);
    $s = "INSERT INTO `suaal`( `suaal`, `a`, `b`, `c`, `d`, `jawaab`) VALUES ('$suaal','$a','$b','$c','$d','$jawaab')";
    $r = $db->query($s);
    if($r){
        $data = array('status' => true,'data' => 'register successfully.');
    }else{
        $data = array('status' => false, 'data' => $db->error);
    }
    echo json_encode($data);
}

if(isset($_POST['action'])){
    $action = $_POST['action'];
    $action($db);
}
else{
    echo json_encode(array('status' => false, 'data' => 'action ma jiro'));
}
?>