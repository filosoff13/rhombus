<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 14.03.19
 * Time: 13:58
 */
use classes\Rhombus;

$height = 4;

// определяем высоту
$height = (
	isset( $_GET['height'] ) // если высота передана по гет
	? (int)$_GET['height']   // используем ее как числовое значение
	: $height        // иначе используем значение по умолчанию
);

$app = new Rhombus($height);
die($app->draw());



