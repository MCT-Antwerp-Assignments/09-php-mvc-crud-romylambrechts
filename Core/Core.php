<?php

namespace Core;
use Core\Session;


class Core
{
    private static string $title = '';
    public static function Init(): void
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();

        Session::start();
    }

    public static function header(?string $title = 'My Adressbook')
    {
        self::$title = $title;
        ob_start();
    }

    public static function footer(): void
    {
        $title = self::$title;
        $content = ob_get_clean();
        require_once"../app/views/layout/default.php";
    }
}
