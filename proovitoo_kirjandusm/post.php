<?php
session_start();
include("functions.php");
if(isset($_POST['submit'])){

    $eesnimi = $_POST['eesnimi'];
    $perenimi = $_POST['perenimi'];
    $sunniaasta = $_POST['sunniaasta'];
    $email = $_POST['email'];
    $sugu = $_POST['sugu'];
    $toovaldkond = $_POST['toovaldkond'];
    $taisnimi = $_POST['taisnimi'];

    saveForm($eesnimi,$perenimi,$sunniaasta,$email,$sugu,$toovaldkond, $taisnimi);

    header('location:http://localhost/proovitoo_kirjandusm/index.php');

}
