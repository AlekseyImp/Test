<?php
$str="@gmail.com";
if(isset($_POST["done"])) {
if(substr_count($_POST["email"] , $str) >=1) {
echo "Регистрация пользователя с таким почтовым адресом невозможна. <a href='/'>Исправить</a>";
return error;
}
if($_POST["FIO"] == "") {
    echo "Введите ФИО. <a href='/'>Исправить</a>";
    echo "<br />";
}
if($_POST["mob"] == "") {
    echo "Введите номер моб. телефона. <a href='/'>Исправить</a>";
    echo "<br />";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Форма обратной связи</title>
</head>
<body>
    <form name="feedback" action="" method="post" enctype="multipart/form-data" >
        <label>Комментарий</label><br />
        <textarea name="comm" cols="40" rows="10"></textarea><br />
        <label>ФИО</label><br />
        <input required="1" type="text" name="FIO" pattern="[а-яА-Я]+" placeholder="ФИО"/><br />
        <label>Адрес</label><br />
        <input type="text" name="addres" placeholder="Адрес"/><br />
        <label>Email</label><br />
        <input type="text" name="email" placeholder="Email"/><br />
        <label>Мобильный телефон в формате +71234567890</label><br />
        <input required="1" type="text" name="mob" pattern="(8|\+7)\d{10}$" placeholder="Моб. телефон"/><br />
        <label>Файл</label><br />
        <input type="file" name="file" placeholder="Файл"/><br />
        <input type="submit" name="done" value="Отправить"/>
    </form>
</body>
</html>