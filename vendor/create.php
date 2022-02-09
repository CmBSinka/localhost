<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

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
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `products` (`id`, `Kab`, `Closet`, `Shelf`, `Box`, `ProjectName`, `subsystem`, `Contract`, `Data`, `Stage`, `NoC`, `Doc`, `Photo`, `Agreed`, `Approved`) VALUES 
(NULL, $KabNumber, $ClosetNumber, $ShelfNumber, $BoxNumber, $ProjectName, $Subsystem, $ContractNumber, $DateGK, $Stage, $NoC, $DocNumber, $Photo, $Agreed, $Approved)");

/*
 * Переадресация на главную страницу
 */

header('Location: /');