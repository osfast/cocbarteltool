<?php


// -----open database connection--------
function DBConnect(){
    $text = '<br><br><br><br><br><br><br><br><br><br><br><br><br><br>HALLO IK WERK NIET GOED';
    $host='127.0.0.1';
    $dbname='Barstanden';
    $user='iemand';
    $pass='slimwachtwoord';

    try {
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $DBH;
    }
    catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}
?>
