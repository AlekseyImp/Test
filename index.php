<?php
$str="@gmail.com";
if(isset($_POST["done"])) {
if(substr_count($_POST["email"] , $str) >=1) {
echo "����������� ������������ � ����� �������� ������� ����������. <a href='/'>���������</a>";
return error;
}
if($_POST["FIO"] == "") {
    echo "������� ���. <a href='/'>���������</a>";
    echo "<br />";
}
if($_POST["mob"] == "") {
    echo "������� ����� ���. ��������. <a href='/'>���������</a>";
    echo "<br />";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>����� �������� �����</title>
</head>
<body>
    <form name="feedback" action="" method="post" enctype="multipart/form-data" >
        <label>�����������</label><br />
        <textarea name="comm" cols="40" rows="10"></textarea><br />
        <label>���</label><br />
        <input required="1" type="text" name="FIO" pattern="[�-��-�]+" placeholder="���"/><br />
        <label>�����</label><br />
        <input type="text" name="addres" placeholder="�����"/><br />
        <label>Email</label><br />
        <input type="text" name="email" placeholder="Email"/><br />
        <label>��������� ������� � ������� +71234567890</label><br />
        <input required="1" type="text" name="mob" pattern="(8|\+7)\d{10}$" placeholder="���. �������"/><br />
        <label>����</label><br />
        <input type="file" name="file" placeholder="����"/><br />
        <input type="submit" name="done" value="���������"/>
    </form>
</body>
</html>