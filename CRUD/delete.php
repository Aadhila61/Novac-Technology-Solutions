<?php

include "connection.php";

if(isset($_GET["buttonid"])){
    $id=$_GET["buttonid"];

    $sql = "DELETE FROM data WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: data.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

}


?>