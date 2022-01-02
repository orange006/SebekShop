<?php
namespace core;

/**
 * Класс для работы с представлениями
 * 
 * Выполняет генерацию представления и получает данные из базы
 *
 * 
 * @category View
 * @author SebekShop
 * @version 1.0
 * @copyright Copyright (c) 2020, Sebek UA
 */
class View {

	/**
     * Подключение к базе данных
     *
	 * @param mixed контент страницы
	 * @param mixed|null данные из базы
     * @return void отображение контента  
     */
	static function generate($content_view, $data = null)
	{
		include __DIR__.'/../views/'.$content_view;
	}
}
