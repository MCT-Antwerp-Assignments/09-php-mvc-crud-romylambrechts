<?php

namespace Core;

class Session
{
    public static function start()
    {
        session_start();
    }

    /**
     * Set a session key and value
     */
    public static function set(string $key, mixed $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Get a session value by key
     */
    public static function get(string $key, mixed $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    /**
     * Get a session value by key and remove it from the session
     */
    public static function getAndForget(string $key, mixed $default = null)
    {
        $value = $_SESSION[$key] ?? $default;
        unset($_SESSION[$key]);

        return $value;
    }

    /**
     * Destroy the session
     */
    public static function destroy()
    {
        session_destroy();
    }

}
