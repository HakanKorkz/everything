<?php

namespace app\elements;

class element
{
    use htmlElements;

    public static string $html="";
    public static array $Att=[];


    private static function Attributes(array $Attributes): string
    {
        $Attr = "";
        foreach ($Attributes as $key => $value) {

            $Attr .= $key . '="' . $value . '"';

        }

        return $Attr;

    }

    private function deBugControl($any): void
    {
        echo "<pre>";
        print_r($any);
        echo "</pre>";
        echo "<hr>";
        echo "<pre>";
        var_dump($any);
        echo "</pre>";

    }

}