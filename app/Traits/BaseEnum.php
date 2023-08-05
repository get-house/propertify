<?php


namespace App\Traits;

trait BaseEnum
{
    public static function getCommaSeparatedValues(): string
    {
        foreach (self::cases() as $case) {
            $array[] = $case->value;
        }

        return implode(',', $array);
    }

    public static function inRandomOrder(): self
    {
        $cases = self::cases();

        return $cases[array_rand($cases)];
    }
}
