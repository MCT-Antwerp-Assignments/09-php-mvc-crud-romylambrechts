<?php

namespace Core;

use Core\Session;

class Core
{
    public static ?string $title = '';

    /**
     * Start the output buffering for templating
     */
    public static function header(?string $title = '')
    {
        self::$title = $title;

        ob_start();
    }

    /**
     * End the output buffering for templating
     * Pass the content to the layout file
     * Set title
     */
    public static function footer(): void
    {
        $content = ob_get_clean();
        $title = self::$title;

        require "../app/views/layout/default.php";
    }

    /**
     * Init whoops and session
     */
    public static function Init(): void
    {
        Session::start();

        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }

}
