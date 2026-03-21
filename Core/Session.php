<?php

namespace Core;

class Session
{
    public static function start()
    {
        session_start();
    }

    public static function set(string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }

    public static function get(string $key): void
    {
        $_SESSION[$key];
    }

    public static function destroy()
    {
        session_destroy();
    }
}