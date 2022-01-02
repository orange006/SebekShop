<?php
namespace core;
use PDO;
use PDOException;

interface IDataBase {
    public static function select(string $sql);
    public static function delete(string $sql);
    public static function update(string $sql, array $data);
    public static function insert(string $sql, array $data);
}

/**
 * Класс для работы с базой данных
 * 
 * Выполняет подключение к базе данных и обработку полученной информации
 *
 * 
 * @category DataBase
 * @author SebekShop
 * @version 1.0
 * @copyright Copyright (c) 2020, Sebek UA
 */
class DataBase implements IDataBase {

    /**
     * @var mixed подключение к базе
     */
    public static $connection;

    /**
     * @var array данные из базы
     */
    public static $data = [];

    
    private function __clone() {}
    private function __construct() {}

    /**
     * Подключение к базе данных
     *
     * @return void результат подключения к базе 
     */ 
    public static function db_connection() {
        try {
            self::$connection = new PDO('mysql:dbname=sebek-shop;host=localhost', 'root', '');
        } catch (PDOException $e) {
            Errors::handler("Database connection failed");
        }        
    }

    /**
     * Подключение к базе данных и вывод данных
     *
     * @param string запрос к базе
     * @return array данные из таблицы
     */
    public static function select(string $sql): array {
        self::db_connection();
        $result = self::$connection->query($sql);
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    /**
     * Подключение к базе данных и удаление данных
     *
     * @param string запрос к базе
     * @return int успешность удаления данных
     */
    public static function delete(string $sql): int {
        self::db_connection();
        $del = self::$connection->prepare($sql);
        $del->execute();
        return $del->rowCount();
    }

    /**
     * Подключение к базе данных и вставка данных
     *
     * @param string запрос к базе
     * @param array данные для вставки
     * @return int успешность вставки данных
     */
    public static function insert(string $sql, array $data): int {
        self::db_connection();
        $ins = self::$connection->prepare($sql);
            foreach($data as $key => $value)
        {
            $ins->bindValue(":$key",$value);
        }
        $ins->execute();
        return $ins->rowCount(); 
    }

    /**
     * Подключение к базе данных и обновления данных
     *
     * @param string запрос к базе
     * @param array измененные данные
     * @return int успешность обновления данных
     */
    public static function update(string $sql, array $data): int {
        self::db_connection();
        $upd = self::$connection->prepare($sql);
        foreach($data as $key => $value)
        {
            $upd->bindValue(":$key",$value);
        }
        $upd->execute();
        return $upd->rowCount();
    }
}
