<?php
    session_start();

    $from_time1=date('Y-m-d H:i:s');
    $to_time1=$_SESSION["end_time"];

    $timefirst=strotime($from_time1);
    $timesecond=strotime($to_time1);

    $differenceinseconds=$timesecond-$timefirst;

    echo gmdate("H:i:s", $differenceinseconds);

?>