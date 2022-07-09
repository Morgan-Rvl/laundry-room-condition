<?php
    session_start();

<<<<<<< HEAD
    $from_time1=date('Y-m-d H:i:s');
    $to_time1=$_SESSION["end_time"];

    $timefirst=strotime($from_time1);
    $timesecond=strotime($to_time1);

    $differenceinseconds=$timesecond-$timefirst;

    echo gmdate("H:i:s", $differenceinseconds);

?>
=======
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
>>>>>>> parent of 20165f8... Update timer
