<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> SQLite </title>
</head>

<body>
<h1> SQLite </h1>   
<?php
   // Define PDO - tell about database file
   #$pdo = new PDO('sqlite:example.db');
   $pdo = new PDO ('sqlite: /home/tyler-a/example.db');
   // Write SQL
   // Executes SQL statement
   $statement = $pdo->query("SELECT * FROM Planets");

   // Run the SQL
   // Returns array all result set rows
   $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

   // Display it on the Screen
   // Views array contents
   var_dump($rows);
?>

</body>
</html>