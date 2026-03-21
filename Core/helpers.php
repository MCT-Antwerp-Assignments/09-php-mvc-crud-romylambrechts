<?php 

function view($view, $data = [])
{
    extract($data);
    require_once "../app/views/$view.php";
}

function redirect ($path): void{
    header ("Location: {$path}");
}