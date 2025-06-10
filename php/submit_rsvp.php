<?php
$conn = new mysqli("localhost", "root", "", "undangan_ukk");

$id = $_POST["id"];
$name = $_POST["name"];
$jumlah = $_POST["jumlah"];
$attendance = $_POST["attendance"];

if ($id == "") {
    $sql = "INSERT INTO rsvp (name, jumlah, attendance) VALUES ('$name', '$jumlah', '$attendance')";
    $conn->query($sql);
}

$conn->close();
?>