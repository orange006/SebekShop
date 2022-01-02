<?php
namespace Controller;

use core\Database;
use core\View;

/**
 * Класс для работы с данными
 * 
 * Выполняет обработку и генерацию представлений каждой страницы: контакты, товары, корзина
 *
 * 
 * @category Data
 * @author SebekShop
 * @version 1.0
 * @copyright Copyright (c) 2020, Sebek UA
 */
class MainController {

    /**
     * Генерация главной страницы
     *
     * @return void представление на главной странице
     */
	function index(){ 
        View::generate('index.php'); 
    }

    /**
     * Генерация и обработка данных про одежду
     *
     * @return void представление страницы одежды и данных из базы
     */
    function clothes() { 
        $sql = 'select * from clothes';
        $data = Database::select($sql);
        View::generate('clothes/clothes.php', $data); 
    }

    /**
     * Генерация и обработка данных про мундштуки
     *
     * @return void представление страницы мундштуков и данных из базы
     */
    function smoke() { 
        $sql = 'select * from mouthpieces';
        $data = Database::select($sql);
        View::generate('smoke/smoke.php', $data); 
    }

    /**
     * Генерация и обработка данных про чехлы
     *
     * @return void представление страницы чехлов и данных из базы
     */
    function covers() { 
        $sql = 'select * from covers';
        $data = Database::select($sql);
        View::generate('covers/covers.php', $data); 
    }

    /**
     * Генерация и обработка данных про товары
     *
     * @return void представление страницы всех товаров из базы
     */
    function shop() { 
        $data = array(
            'clothes' => Database::select('select * from clothes'),
            'smoke' => Database::select('select * from mouthpieces'),
            'covers' => Database::select('select * from covers')
        );
        View::generate('shop.php', $data); 
    } 

    /**
     * Генерация страницы вопрос
     *
     * @return void представление вопросов
     */
    function qa() { View::generate('qa.php'); }

    /**
     * Генерация страницы контактов
     *
     * @return void представление контактов
     */
    function contacts() { View::generate('contacts.php'); }
    
    /**
     * Генерация страницы корзина
     *
     * @return void представление корзины товаров
     */
    function cart() { View::generate('cart.php'); }

    function cloth_prod() {
        $id_prod = ((int)$_GET["id"]);
        $sql = 'select * from clothes where id='.$id_prod.'';
        $data = Database::select($sql);
        View::generate('clothes/product.php', $data[0]); 
    }
	
    function cover_prod() {
        $id_prod = ((int)$_GET["id"]);
        $sql = 'select * from covers where id='.$id_prod.'';
        $data = Database::select($sql);
        View::generate('covers/product.php', $data[0]); 
    }
	
    function smoke_prod() {
        $id_prod = ((int)$_GET["id"]);
        $sql = 'select * from mouthpieces where id='.$id_prod.'';
        $data = Database::select($sql);
        View::generate('smoke/product.php', $data[0]); 
    }
}
