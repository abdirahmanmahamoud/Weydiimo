<?php
header('content-type: application/json');
include 'conn.php';

function suaal($db){
    $date = array();
    $mess = array();
    $s = "SELECT * FROM `suaal` ORDER BY RAND() LIMIT 1";
    $r = $db->query($s);
    if($r){
        while($row = $r->fetch_assoc()){
            $date [] = $row;
        }
        $mess = array('status' => true,'data' => $date);
    }else{
        $mess = array('status' => false, 'data' => $db->error);
    }
    echo json_encode($mess);
}
Suaal($db);

?>