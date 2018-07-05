
<?php
var_dump($_POST);
// Переменные с формы
$name = $_POST['name'];
$doljnost = $_POST['doljnost'];
 
// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_baza = "KAMAZ"; // Имя БД
$db_table = "Rabotnic"; // Имя Таблицы БД
 
// Подключение к базе данных
$db = mysql_connect($db_host,$db_user,$db_password, $db_baza) OR DIE("Не могу создать соединение ");
 
// Выборка базы
mysql_select_db("KAMAZ",$db);
 
mysql_query("SET NAMES 'utf8'",$db);

 $result = mysql_query ("INSERT INTO $db_table (name,doljnost) VALUES ('$name','$doljnost')", $db);
     
    if ($result == 'true')
    {
        echo "Информация занесена в базу данных";
    }
    else
    {
        echo "Информация не занесена в базу данных,".mysql_error();
    }

?>
<table>
<form action="" method="post">
    <tr>
        <td>Имя</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Должность</td>
        <td><input type="text" name="doljnost" size="3"> руб.</td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="OK"></td>
    </tr>
</form>
</table>



