<?php
include "polacz.php";
$pesel = wczytaj("pesel");//wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if ($sql = $baza->prepare( "DELETE FROM poprawa WHERE pesel = ?;" ))
{
 $sql->bind_param( "s", $pesel); 
 $sql->execute();
 $sql->close();
}
$baza->close();
header ("Location: http://localhost/poprawa/" );
?>