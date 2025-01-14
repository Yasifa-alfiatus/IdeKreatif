<?php
session_start();

$nama = $_SESSION["name"];
$role = $_SESSION["role"];
// Ambil modifikasi jik ada, kemudian hapus dari sesi
$notification = $_SESSION['nootification'] ?? null;
if ($notification) {
    unset($_SESSION['nitification']);
}