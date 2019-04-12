<?php

/**
 * Description of connect
 *
 * @author Norman Syarif
 */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'berita';

$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno) {
	echo 'gagal konek'.$mysqli->connect_error;
}

?>
