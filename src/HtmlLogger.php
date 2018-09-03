<?php
namespace Styde;

class HtmlLogger implements Logger
{
    public static function info(string $message)
    {
        echo "<p>$message</p>";
    }
}
