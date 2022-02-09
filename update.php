<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $product_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<body>
    <h3>Update Product</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Kab</p>
        <input type="number" name="Kab" value="<?= $product['Kab'] ?>">
        <p>Closet</p>
        <input type="number" name="Closet" value="<?= $product['Closet'] ?>">
        <p>Shelf</p>
        <input type="number" name="Shelf" value="<?= $product['Shelf'] ?>">
        <p>Box</p>
        <input type="number" name="Box" value="<?= $product['Box'] ?>">
        <p>ProjectName</p>
        <textarea name="ProjectName"><?= $product['ProjectName'] ?></textarea>
        <p>subsystem</p>
        <textarea name="subsystem"><?= $product['subsystem'] ?></textarea>
        <p>Contract</p>
        <input type="number" name="Contract" value="<?= $product['Contract'] ?>">
        <p>Data</p>
        <input type="date" name="Data" value="<?= $product['Data'] ?>">
        <p>Stage</p>
        <input type="number" name="Stage" value="<?= $product['Stage'] ?>">
        <p>NoC</p>
        <input type="number" name="NoC" value="<?= $product['NoC'] ?>">
        <p>Doc</p>
        <input type="number" name="Doc" value="<?= $product['Doc'] ?>">
        <p>Photo</p>
        <textarea name="Photo"><?= $product['Photo'] ?></textarea>
        <p>Agreed</p>
        <input type="number" name="Agreed" value="<?= $product['Agreed'] ?>">
        <p>Approved</p>
        <input type="number" name="Approved" value="<?= $product['Approved'] ?>">
 <br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>