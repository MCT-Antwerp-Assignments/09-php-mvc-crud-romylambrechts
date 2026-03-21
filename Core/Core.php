<?php

namespace Core;

class Core
{
    public static function Init(): void
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }

    public static function header(?string $title = '')
    {
        ob_start();
    }

    public static function footer(): void
    {
        $content = ob_get_clean();
        require_once"../app/views/layout/default.php";
    }
}
