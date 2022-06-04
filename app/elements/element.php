<?php

namespace app\elements;

class element
{
    public static string $html;
    public static array $Att;

    public static function FormStart(array $Attr): string
    {

        $attribute = self::Attributes(self::$Att=$Attr);

        return self::$html="<form $attribute>";

    }

    private static function Attributes(array $Attributes): string
    {
        $Attr="";
        foreach ($Attributes as $key => $value) {

            $Attr.=$key.'="'.$value.'" ';

        }

        return $Attr;

    }

    public static function Input(array $Attr): string
    {
        $attribute = self::Attributes(self::$Att=$Attr);

        return self::$html="<input $attribute>";

    }

    public static function Button(string $string,array $Attr): string
    {
        $attribute = self::Attributes(self::$Att=$Attr);

        return self::$html="<button $attribute>$string</button>";

    }

    private static function options($options): string
    {

        $option="";

        foreach ($options as $key=>$value) {

            $option.='<option value="'.$key.'">'.$value.'</option>';

        }
        return $option;
    }

    public static function Select(array $option,array $Attr): string
    {
        $attribute = self::Attributes(self::$Att=$Attr);

        $options=self::options($option);

        return self::$html="<select $attribute>$options</select>";

    }

    public static function FormEnd(): string
    {
        return "</form>";

    }

}