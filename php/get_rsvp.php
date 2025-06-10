<?php
$conn = new mysqli("localhost", "root", "", "undangan_ukk");
$result = $conn->query("SELECT * FROM rsvp ORDER BY id DESC");

echo "<table class='tabel-tamu' border='1'>
<tr><th>Nama</th><th>Jumlah tamu</th><th>Kehadiran</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['jumlah']}</td>
        <td>{$row['attendance']}</td>
    </tr>";
}
echo "</table>";
$conn->close();
?>
