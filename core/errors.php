<?php
 namespace core;

/**
 * Класс для обработки ошибок
 * 
 * Выполняет обработку и вывод ошибки
 *
 * 
 * @category Errors
 * @author SebekShop
 * @version 1.0
 * @copyright Copyright (c) 2020, Sebek UA
 */
 class Errors {

    /**
     * Выводит сообщение ошибки заданого в параметре
     *
     * @param string сообщение ошибки
     * @return void вывод ошибок 
     */
    public static function handler(string $method) {
        echo "<b>USER ERROR</b><br>$method</br>\n";
    }
 }
 