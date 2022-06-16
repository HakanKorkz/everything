<?php

namespace app\elements;

trait htmlElements
{

    public static function FormStart(array $Attr): string
    {

        $attribute = self::Attributes(self::$Att = $Attr);

        return self::$html = "<form $attribute>";

    }

    public static function FormEnd(): string
    {
        return "</form>";

    }

    public static function labelStart($labels, $Att = []): string
    {
        $Attributes = self::Attributes(self::$Att = $Att);
        if (is_array($labels)) {
            $html = "<label $Attributes>" . implode('', $labels);
            return self::$html = $html;
        } else {
            return self::$html = "<label $Attributes > $labels ";
        }

    }

    public static function labelEnd(): string
    {
        return "</label>";

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

            $attr = self::Attributes(self::$Att = $value["attributes"]);

            $option .= '<option ' . $attr . '>' . $value["tittle"] . '</option>';

        }
        return $option;
    }

    public static function Select(array $option, array $Attr): string
    {
        $attribute = self::Attributes(self::$Att = $Attr);

        $options = self::options($option);

        return self::$html = "<select $attribute>$options</select>";

    }

}