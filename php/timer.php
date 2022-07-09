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
    
    $start_Machine1=mysqli_query($link,"select time_set from timer where id='Machine1'");
    $start_Machine2=mysqli_query($link,"select time_set from timer where id='Machine2'");
    $start_Seche_linge1=mysqli_query($link,"select time_set from timer where id='Seche-linge1'");
    $start_Seche_linge2=mysqli_query($link,"select time_set from timer where id='Seche-linge2'");

    $start_value_Machine1="";
    $start_value_Machine2="";
    $start_value_Seche_linge1="";
    $start_value_Seche_linge2="";

    while($row=mysqli_fetch_array($start_Machine1))
    {
        $start_value_Machine1=$row["time_set"];
    }
    while($row=mysqli_fetch_array($res_Machine2))
    {
        $start_value_Machine2=$row["time_set"];
    }
    while($row=mysqli_fetch_array($res_Seche_linge1))
    {
        $start_value_Seche_linge1=$row["time_set"];
    }
    while($row=mysqli_fetch_array($res_Seche_linge2))
    {
        $start_value_Seche_linge2=$row["time_set"];
    }
    
    $end_time_Machine1=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration_Machine1"].'minutes', strtotime($start_value_Machine1)));
    $end_time_Machine2=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration_Machine2"].'minutes', strtotime($start_value_Machine2)));
    $end_time_Seche_linge1=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration_Seche_linge1"].'minutes', strtotime($start_value_Seche_linge1)));
    $end_time_Seche_linge2=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration_Seche_linge2"].'minutes', strtotime($start_value_Seche_linge2)));

    $_SESSION["end_time_Machine1"]=$end_time_Machine1;
    $_SESSION["end_time_Machine2"]=$end_time_Machine2;
    $_SESSION["end_time_Seche_linge1"]=$end_time_Seche_linge1;
    $_SESSION["end_time_Seche_linge2"]=$end_time_Seche_linge2;

    
?>

<script type="text/javascript">
    window.location="./../index.php";
</script>

