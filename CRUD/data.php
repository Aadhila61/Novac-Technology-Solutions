



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>

<?php
include "connection.php";

$sql = "SELECT * FROM data";
$result = $conn->query($sql);

if ($result) {
    echo "<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>gender</th>
    <th>operation</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo"<td>".$row["id"]."</td>";
      echo"<td>".$row["name"]."</td>";
      echo"<td>".$row["email"]."</td>";
      echo"<td>".$row["gender"]."</td>";
      echo "<td>";
      echo "<a href='edit.php?updateid=".$row["id"]."'><button>edit</button></a>";
      echo "<a href='delete.php?buttonid=".$row["id"]."'><button>delete</button></a>";
      echo "</td>";
      echo"</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();

  
  ?>



