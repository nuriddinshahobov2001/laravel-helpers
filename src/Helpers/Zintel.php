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


    // Магический метод для перехвата вызова методов
    public function __call($method, $parameters)
    {
        // Проверяем, существует ли метод с таким названием в классе
        if (method_exists($this, $method)) {
            // Если существует, вызываем его
            return call_user_func_array([$this, $method], $parameters);
        }

        // Если метода нет, выводим ошибку
        throw new \BadMethodCallException("Метод {$method} не существует.");
    }
}