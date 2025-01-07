<?php

namespace Zintel\LaravelHelpers\Helpers;

class Zintel
{
    // Пример вспомогательной функции
    public static function toUpperCase($input)
    {
        return strtoupper($input); // Преобразует строку в верхний регистр
    }

    // Еще одна вспомогательная функция
    public static function toLowerCase($input)
    {
        return strtolower($input); // Преобразует строку в нижний регистр
    }

    // Пример добавления еще одной функции
    public static function reverseString($input)
    {
        return strrev($input); // Переворачивает строку
    }
}