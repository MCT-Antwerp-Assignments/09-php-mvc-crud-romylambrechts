<?php 

function view($view, $data = [])
{
    extract($data);
    require_once "../app/views/$view.php";
}

function redirect ($path): void{
    header ("Location: {$path}");
    die();
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

function snippet($snippet, $data = [])
{
    extract($data);
    require_once "../app/views/snippets/{$snippet}.php";
}
