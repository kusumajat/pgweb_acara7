<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$motor = array("Beat", "Vario", "Scoopy", "Nmax", "vespa"); 
$warna = array("oren", "biru", "pink", "hitam", "putih");
$cc = array(125, 150, 125, 165, 165);
$harga = array(1000, 2000, 3000, 4000, 5000);

echo "<h2>Tabel Motor</h2>";
echo "<table border = '1'>";
echo "<tr><th>Motor</th><th>Warna</th><th>CC</th><th>Harga</th></tr>";
for ($i = 0; $i < 5; $i++) {
    echo "<tr><td>$motor[$i]</td><td>$warna[$i]</td>
    <td>$cc[$i]</td><td>$harga[$i]</td></tr>";
}
echo "</table>";
?>

</pre>
</body>
</html>