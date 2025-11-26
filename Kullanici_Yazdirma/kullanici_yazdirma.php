<?php
require_once "./10_veritabani.php";

if (isset($_POST['ad'])) {
  $ad = $_POST['ad'];
  echo "Girilen isim: " . $ad;
} else {
  echo "Formdan veri gelmedi.";
}
