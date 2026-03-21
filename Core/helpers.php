<?php 

function view($view, $data = [])
{
    extract($data);
    require_once "../app/views/$view.php";
}

function redirect ($path): void{
    header ("Location: {$path}");
}

function get($key)
{
    if (!empty($_GET[$key])) {
        return $_GET[$key];
    }

    if (!empty($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}
