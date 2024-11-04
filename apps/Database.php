<?php

$mysqli = new mysqli('localhost', 'root', '', 'mvcapp');
if($mysqli -> connect_error){
    die("koneksi gagal" . $mysqli -> connect_error);
}