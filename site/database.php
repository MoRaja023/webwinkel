<?php
// Database configuratie
$host  = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "webwinkel_theezaken";

// Maak een  database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

// Controleer de verbinding
if(mysqli_connect_error())
{
 echo "Connection establishing failed!";
}
else
{
 echo "Connection established successfully.";
}

require 'database.php';

//de sql query
$sql = "SELECT * FROM producten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn,$sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);



/**
 * Hier loop (iterate) je over alle waardes die gevonden zijn.
 * Je kunt zoals je zien paragraaf-tags gebruiken
 * maar je kunt ook andere HTML-**tags** gebruiken
 */
?>
<?php foreach($users as $user): ?>
  <p><?php echo $user["voornaam"] ?></p>
<?php endforeach; ?>