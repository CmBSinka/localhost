<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$KabNumber = $_POST['Kab'];
$ClosetNumber = $_POST['Closet'];
$ShelfNumber = $_POST['Shelf'];
$BoxNumber = $_POST['Box'];
$ProjectName = $_POST['ProjectName'];
$Subsystem = $_POST['subsystem'];
$ContractNumber = $_POST['Contract'];
$DateGK = $_POST['Data'];
$Stage = $_POST['Stage'];
$NoC = $_POST['NoC'];
$DocNumber = $_POST['Doc'];
$Photo = $_POST['Photo'];
$Agreed = $_POST['Agreed'];
$Approved = $_POST['Approved'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `products` SET `Kab` = '$KabNumber', `Closet` = '$ClosetNumber', `Shelf` = '$ShelfNumber', 
                `Box` = '$BoxNumber', `ProjectName` = '$ProjectName', `subsystem` = '$Subsystem', `Contract` = '$ContractNumber', 
                `Data` = '$DateGK', `Stage` = '$Stage', `NoC` = '$NoC', `Doc` = '$DocNumber',
                `Photo` = '$Photo', `Agreed` = '$Agreed', `Approved` = '$Approved'WHERE `products`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: /');