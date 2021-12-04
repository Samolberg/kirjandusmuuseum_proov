<?php
include('config.php');


function saveForm($eesnimi, $perenimi, $sunniaasta, $email, $sugu, $toovaldkond, $taisnimi){
    global $conn;

    if($taisnimi == null || $taisnimi == '') {
        $sql = "INSERT INTO vorm_info(Eesnimi, Perenimi, Sunniaasta, Email, Sugu, Toovaldkond) 
            VALUES ('$eesnimi', '$perenimi', '$sunniaasta', '$email', '$sugu', '$toovaldkond')";

        $conn->query($sql);
    } else {
        $sql = "INSERT INTO vorm_info(Eesnimi, Perenimi, Sunniaasta, Email, Sugu, Toovaldkond) 
            VALUES ('$eesnimi', '$perenimi', '$sunniaasta', '$email', '$sugu', '$toovaldkond')";

        $conn->query($sql);

        $sql2 = "INSERT INTO vorm_shared(Täisnimi, Shared_ID) VALUES ('$taisnimi',LAST_INSERT_ID())";

        $conn->query($sql2);
    }




}
