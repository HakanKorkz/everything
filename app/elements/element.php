<?php

namespace app\elements;


class element
{

    public static string $html="";
    public static array $Att=[];

    public static function FormStart(array $Attr): string
    {

        $attribute = self::Attributes(self::$Att = $Attr);

        return self::$html = "<form $attribute>";

    }

    private static function Attributes(array $Attributes): string
    {
        $Attr = "";
        foreach ($Attributes as $key => $value) {

            $Attr .= $key . '="' . $value . '"';

        }

        return $Attr;

    }

    public static function Input(array $Attr): string
    {
        $attribute = self::Attributes(self::$Att = $Attr);

        return self::$html = "<input $attribute>";

    }

    public static function Button(string $string, array $Attr): string
    {
        $attribute = self::Attributes(self::$Att = $Attr);

        return self::$html = "<button $attribute>$string</button>";

    }

    private static function options($options): string
    {

        $option = "";

        foreach ($options as $value) {

            $attr = self::Attributes(self::$Att=$value["attributes"]);

            $option .= '<option '.$attr.'>' . $value["tittle"] . '</option>';

        }
        return $option;
    }

    public static function Select(array $option, array $Attr): string
    {
        $attribute = self::Attributes(self::$Att = $Attr);

        $options = self::options($option);

        return self::$html = "<select $attribute>$options</select>";

    }

    public static function FormEnd(): string
    {
        return "</form>";

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