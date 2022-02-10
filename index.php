<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Номер кабинета</th>
        <th>Номер шкафа</th>
        <th>Номер полки</th>
        <th>Номер коробки</th>
        <th>Наименование проекта</th>
        <th>Подсистема</th>
        <th>Номер контракта</th>
        <th>Дата заключения ГК</th>
        <th>Этап</th>
        <th>Количесвто экземпляров</th>
        <th>Номер документа</th>
        <th>Фото документа</th>
        <th>Согласовано</th>
        <th>Утверждено</th>
    </tr>

    <?php

    /*
     * Делаем выборку всех строк из таблицы "products"
     */

    $products = mysqli_query($connect, "SELECT * FROM `products`");

    /*
     * Преобразовываем полученные данные в нормальный массив
     */

    $products = mysqli_fetch_all($products);

    /*
     * Перебираем массив и рендерим HTML с данными из массива
     * Ключ 0 - id
     * Ключ 1 - title
     * Ключ 2 - price
     * Ключ 3 - description
     */

    foreach ($products as $product) {
        ?>
        <tr>
            <td><?= $product[0] ?></td>
            <td><?= $product[1] ?></td>
            <td><?= $product[2] ?></td>
            <td><?= $product[3] ?></td>
            <td><?= $product[4] ?></td>
            <td><?= $product[5] ?></td>
            <td><?= $product[6] ?></td>
            <td><?= $product[7] ?></td>
            <td><?= $product[8] ?></td>
            <td><?= $product[9] ?></td>
            <td><?= $product[10] ?></td>
            <td><?= $product[11] ?></td>
            <td><?= $product[12] ?></td>
            <td><?= $product[13] ?></td>
            <td><?= $product[14] ?></td>
            <td><a href="update.php?id=<?= $product[0] ?>">Редактировать</a></td>
            <td><a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<h3>Добавить новую запись</h3>
<form action="vendor/create.php" method="post">
    <p>Номер кабинета</p>
    <input type="number" name="Kab">
    <p>Номер шкафа</p>
    <input type="number" name="Closet">
    <p>Номер полки</p>
    <input type="number" name="Shelf">
    <p>Номер коробки</p>
    <input type="number" name="Box">
    <p>Наименование проекта</p>
    <textarea name="ProjectName"></textarea>
    <p>Подсистема</p>
    <textarea name="subsystem"></textarea>
    <p>Номер контракта</p>
    <input type="number" name="Contract">
    <p>Дата заключения ГК</p>
    <input type="date" value="2017-06-01" id="Data" name="Data">
    <p>Этап</p>
    <input type="number" name="Stage">
    <p>Количесвто экземпляров</p>
    <input type="number" name="NoC">
    <p>Номер документа</p>
    <input type="number" name="Doc">
    <p>Фото документа</p>
    <textarea name="Photo"></textarea>
    <p>Согласовано</p>
    <input type="number" name="Agreed">
    <p>Утверждено</p>
    <input type="number" name="Approved">
    <br> <br>
    <button type="submit">Добавить
    </form>
</body>
</html>
