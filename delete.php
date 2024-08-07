<?php

// GetID from query parameter
$id = $_GET['id'];

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "data");

// Delete comment from database
$query = "DELETE FROM tb_data1 WHERE id = $id";
mysqli_query($conn, $query);

// Close database connection
mysqli_close($conn);

?>