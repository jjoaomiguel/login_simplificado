<?php 
include('../../includes/db.php'); 

$id = $_GET['id'];

$sql = "DELETE FROM times WHERE id=$id";
if ($mysqli->query($sql)) {
    header("Location: read.php");
    exit;
} else {
    echo "<div class='alert alert-danger mt-3'>Erro: " . $mysqli->error . "</div>";
}
?>