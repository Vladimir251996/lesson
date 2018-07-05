<!doctype html>
<html lang="ru">
<head>
<title>Админ-панель</title>
</head>
<body>

<?php
    $host="localhost";
    $user="root";
    $pass=""; 
    $db_name="basa1";
    $link=mysql_connect($host,$user,$pass);
    mysql_select_db("basa1",$link);
?>
<?php
if (isset($_POST["Name"])) {
    $sql = mysql_query("INSERT INTO partner (Name, summ, age) 
                        VALUES ('".$_POST['Name']."','".$_POST['summ']."','".$_POST['age']."')");
    if ($sql) {
        echo "<p>dannye dobavleny.</p>";
    } else {
        echo "<p>oshibka.</p>";
    }
}
?>
	<table>
<form action="" method="post">
    <tr>
        <td>name:</td>
        <td><input type="text" name="Name"></td>
    </tr>
    <tr>
        <td>summ:</td>
        <td><input type="text" name="Name"></td>
        <tr>
       <td>age:</td>
        <td><input type="text" name="Name"></td>
    <tr>
        <td colspan="2"><input type="submit" value="OK"></td>
    </tr>
</form>
</table>
</body>