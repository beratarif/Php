<?php
$baglanti = mysqli_connect("localhost", "root", "", "test");
if (!$baglanti) {
  die("Bağlantı hatası: " . mysqli_connect_errno());
}
$sql = "SELECT * FROM kullanicilar";
$result = mysqli_query($baglanti, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  echo "Kullanıcı: " . $row['isim'] . "<br>";
}
mysqli_close($baglanti);
