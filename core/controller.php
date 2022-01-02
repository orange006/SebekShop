<?php
namespace core;

/**
 * Основной класс контроллеров 
 * 
 * Выполняет свзяывание контроллера и представления
 *
 * 
 * @category Controller
 * @author SebekShop
 * @version 1.0
 * @copyright Copyright (c) 2020, Sebek UA
 */
class Controller {

	/**
     * @var \core\View обьект класса View
     */
	public $view;

	/**
     * Конструктор
     *
     * @return void новое представление 
     */
	function __construct() {
		$this->view = new View();
	}
}
