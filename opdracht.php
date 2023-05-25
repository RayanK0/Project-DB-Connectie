//Rayan Kreike 2/5/2023
<HTML>
<HEAD>
<TITLE>De Keukenprins</TITLE>
</HEAD>

<BODY>

<?php
    //in database.php wordt de verbinding naar de database gemaakt
    include("database.php");
?>

<H1> Overzicht klanten</H1>
<table border ="1">
    <TR>
        <TD>Klantnr</TD>
        <TD>Naam</TD>
        <TD>Adres</TD>
        <TD>Postcode</TD>
        <TD>Woonplaats</TD>
        <TD>Email</TD>
    </TR>

<?php

// Bepaal query
$query="SELECT * FROM klant";

// Voer query uit in de database. Gebruik de verbinding zoals die in database.php staat
$resultaat = $dbVerbinding->query($query);



// De resultaten worden ingelezen in een array
while ($rij = $resultaat->fetch_array(MYSQLI_ASSOC))
{
    echo"<TR><TD>$rij[klantnummer]</TD>";
    echo"<TD>$rij[naam]</TD>";
    echo"<TD>$rij[adres]</TD>";
    echo"<TD>$rij[postcode]</TD>";
    echo"<TD>$rij[woonplaats]</TD>";
    echo"<TD>$rij[email]</TD>";
    echo "</TR>";
}


// Reset resultaat en sluit de verbinding
$resultaat->free_result();
$dbVerbinding->close();

?>
</TABLE>
</BODY>
</HTML>
