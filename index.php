<?php
/*
 * /SFY/index.php  — Root redirect
 * Redirect ke halaman utama atau admin SongForYou
 */

$requestUri = $_SERVER['REQUEST_URI'];
// Cek jika path diakhiri dengan /admin atau /admin/
if (preg_match('/\/admin\/?$/i', parse_url($requestUri, PHP_URL_PATH))) {
    header('Location: /SFY/admin/index.php');
    exit;
}

$queryString = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? '?' . $_SERVER['QUERY_STRING'] : '';
header('Location: /SFY/Ujian-Praktek/SongForYou/index.php' . $queryString);
exit;
?>
