<?php
//Rayan Kreike 2/5/2023


$server = "localhost";
$gebruiker = "root";
$wachtwoord = "rayan";
$databasenaam = "keukenprins";

$dbVerbinding = new mysqli ($server, $gebruiker, $wachtwoord, $databasenaam);

if ($dbVerbinding -> connect_errno) 
{
    echo "Failed to connect to MySQL: " . $dbVerbinding -> connect_error;
    exit();
}

else 
{    
    echo "De verbinding is succesvol";
}
?>