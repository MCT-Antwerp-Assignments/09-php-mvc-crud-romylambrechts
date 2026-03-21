<?php

/**
 * For debugging purposes: Dump and Die
 */
function dd($data = null)
{
    if (empty($data)) {
        die();
    }

    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

/**
 * Making it easier to redirect
 */
function redirect($path)
{
    header("Location: {$path}");
    exit;
}

/**
 * Load a snippet
 */
function snippet($snippet, $data = [])
{
    extract($data);
    require_once "../app/views/snippets/{$snippet}.php";
}

/**
 * Load a view
 */
function view($view, $data = [])
{
    extract($data);
    require_once "../app/views/{$view}.php";
}

/**
 * Get a value from the $_GET or $_POST array
 */
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
