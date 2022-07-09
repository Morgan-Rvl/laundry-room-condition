<?php
    session_start();

    // Informations d'identification
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_NAME', 'laundry_room_condition');
	 
	// Connexion à la base de données MariaDB
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	mysqli_set_charset($link, "utf8");
	 
	// Vérifier la connexion
	if($link === false){
	    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
    }
    
    $duration_Machine1="";
    $duration_Machine2="";
    $duration_Seche_linge1="";
    $duration_Seche_linge2="";

    $res_Machine1=mysqli_query($link,"select duration from timer where id='Machine1'");
    $res_Machine2=mysqli_query($link,"select duration from timer where id='Machine2'");
    $res_Seche_linge1=mysqli_query($link,"select duration from timer where id='Seche-linge1'");
    $res_Seche_linge2=mysqli_query($link,"select duration from timer where id='Seche-linge2'");

    while($row=mysqli_fetch_array($res_Machine1))
    {
        $duration_Machine1=$row["duration"];
    }
    while($row=mysqli_fetch_array($res_Machine2))
    {
        $duration_Machine2=$row["duration"];
    }
    while($row=mysqli_fetch_array($res_Seche_linge1))
    {
        $duration_Seche_linge1=$row["duration"];
    }
    while($row=mysqli_fetch_array($res_Seche_linge2))
    {
        $duration_Seche_linge2=$row["duration"];
    }

    $_SESSION["duration_Machine1"]=$duration_Machine1;
    $_SESSION["duration_Machine2"]=$duration_Machine2;
    $_SESSION["duration_Seche_linge1"]=$duration_Seche_linge1;
    $_SESSION["duration_Seche_linge2"]=$duration_Seche_linge2;

    $end_time_Machine1=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration_Machine1"].'minutes', strtotime($_SESSION["start_time"])));
    $end_time_Machine2=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration_Machine2"].'minutes', strtotime($_SESSION["start_time"])));
    $end_time_Seche_linge1=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration_Seche_linge1"].'minutes', strtotime($_SESSION["start_time"])));
    $end_time_Seche_linge2=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration_Seche_linge2"].'minutes', strtotime($_SESSION["start_time"])));

    $_SESSION["end_time_Machine1"]=$end_time_Machine1;
    $_SESSION["end_time_Machine2"]=$end_time_Machine2;
    $_SESSION["end_time_Seche_linge1"]=$end_time_Seche_linge1;
    $_SESSION["end_time_Seche_linge2"]=$end_time_Seche_linge2;


    $from_time=date('Y-m-d H:i:s');

    $to_time_Machine1=$_SESSION["end_time_Machine1"];
    $to_time_Machine2=$_SESSION["end_time_Machine2"];
    $to_time_Seche_linge1=$_SESSION["end_time_Seche_linge1"];
    $to_time_Seche_linge2=$_SESSION["end_time_Seche_linge2"];

    $timefirst=strtotime($from_time);

    $timesecond_Machine1=strtotime($to_time_Machine1);
    $timesecond_Machine2=strtotime($to_time_Machine2);
    $timesecond_Seche_linge1=strtotime($to_time_Seche_linge1);
    $timesecond_Seche_linge2=strtotime($to_time_Seche_linge2);

    $differenceinseconds_Machine1=$timesecond_Machine1-$timefirst;
    $differenceinseconds_Machine2=$timesecond_Machine2-$timefirst;
    $differenceinseconds_Seche_linge1=$timesecond_Seche_linge1-$timefirst;
    $differenceinseconds_Seche_linge2=$timesecond_Seche_linge2-$timefirst;


    echo gmdate("H:i:s",$differenceinseconds_Machine1),",", gmdate("H:i:s",$differenceinseconds_Machine2),",", gmdate("H:i:s",$differenceinseconds_Seche_linge1),",", gmdate("H:i:s",$differenceinseconds_Seche_linge2);
?>
