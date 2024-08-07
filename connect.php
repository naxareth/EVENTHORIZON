<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn= mysqli_connect('localhost','root','','events') or die("Connection failed: " .mysqli_connect_error());
    if(isset($_POST['event_date']) && isset($_POST['event_img']) && isset($_POST['event_name']) && isset($_POST['event_location'])) {
        $event_date= $_POST['event_date'];
        $event_img= $_POST['event_img'];
        $event_name= $_POST['event_name'];
        $event_location= $_POST['event_location'];

        $sql = "INSERT INTO `event_add` (`event_date`, `event_img`, `event_name`, `event_location`) VALUES ('$event_date', '$event_img', '$event_name', '$event_location')";

        $query = mysqli_query($conn,$sql);
        if($query) {
            echo "Entry Successful";
        }
        else{
            echo "Error: " . mysqli_error($conn);
        }
    }
    else{
        echo "All fields are required";
    }
}
else{
    echo "Invalid request";
}
?>