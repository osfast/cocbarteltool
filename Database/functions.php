<?php

function haalbeginIPop(){
    $sqloption = "SELECT `waarde` FROM `opties` WHERE `instelling` = 'ip_range_begin'";
    return fetcharray($sqloption);
}

function haaleindIPop(){
    $sqloption = "SELECT `waarde` FROM `opties` WHERE `instelling` = 'ip_range_einde'";
    return fetcharray($sqloption);
}

function fetcharray($sqlstmt){
    $handler = DBConnect(); // pdo functions that connects to the database
    $sttmt = $handler->query($sqlstmt);
    return ($sttmt->fetch());
    $handler = null; // closes database connection
}

function fetchranges($sql){

    $handler = DBConnect(); // pdo functions that connects to the database

    $stmt = $handler->query($sql);
    $stmt ->execute();
    $return = array();
    $a = array();
    foreach($stmt->fetchAll() as $result){
        //explode address 1
        $a[0] = explode ('.' , $result[1]);
        //explde addres 2
        $a[1] = explode ('.' , $result[2]);
        // stop addressen in een array

        array_push($return,$a);
        // stop array in return
        array_push($return,$result[3]);
    }
    return $return;

}
