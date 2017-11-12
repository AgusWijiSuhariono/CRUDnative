<?php
$koneksi = new mysqli('localhost', 'root', 'agusbiji','blog');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>