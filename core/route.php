<?php

namespace core;

/**
 * Класс для работы с путями
 * 
 * Выполняет проверку наличия пути и действий в контроллере
 *
 * 
 * @category Route
 * @author SebekShop
 * @version 1.0
 * @copyright Copyright (c) 2020, Sebek UA
 */
class Route {

    /**
     * @var array список путей и методов
     */
    public static $DATA = [];

    /**
     * Проверка пути
     *
     * @return void наличие путей и методов для выполнения 
     */
    static function start() {
        $route = substr($_SERVER['REQUEST_URI'], 1);
        if (strripos($route, "?") != NULL) {
            $route = strstr($route, "?", true);
        }
        foreach (self::$DATA as $value) {
            if ($value["path"] ==  $route) {
                $con = explode('@', $value["ctrl"]);
                $controller_name = $con[0];
                $action = $con[1];
                $controller_name = 'Controller\\' . $controller_name;
                $controller = new $controller_name;
                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    Errors::handler("Method not found");
                }
            } 
        }
    }

    /**
     * Получение пути и методов из адресной строки
     *
     * @param string путь
     * @param string действие
     * @return array данные из таблицы
     */
    static function get(string $path, string $ctrl) {
        self::$DATA[] = [
            "path" => $path,
            "ctrl" => $ctrl
        ];
    }
}
