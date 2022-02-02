<!--Командир корабля отдает приказ своей команде. Но приказы должны быть лаконичными (короткая фраза) и из набора понятных
для матросов приказов (напр. На Абордаж! Задрать швартовые!).
Напишите функцию, которая поверяет приказ командира, в случае ошибки вернуть сообщение
(422-неверно отправленные данные N)-->

<div style="text-align: center">
    <form action="money.php" method="post">
        <p>Report: <input type="text" name="name" /></p>
        <p><input type="submit" /></p>
    </form>
</div>

<!--Проверить типы данных, длина команды минимум и максимум, находится для в наборе уже существующих команд
(создаете отдельный массив команд)-->

<?php
$item = htmlspecialchars($_POST['name']);
echo ('Report: '. $item);

//проверяем минимальную длину символов в Приказе
$min_value = 2;
function validateMin ($item, $min_value)
{
    if(strlen($item) <= $min_value){
        return "Error 422 - Very few characters in the order.";
    }
    return "Min number of characters are ok. ";
}
echo "<br/>";
echo validateMin($item,$min_value);

//проверяем максимальную длину символов в Приказе
$max_value=10;
function validateMax ($item, $max_value)
{
    if(strlen($item) >= $max_value){
        return "Error 422 - Very much characters in the order.";
    }
    return "Max number of characters are ok. ";
}
echo "<br/>";
echo validateMax($item,$max_value);

//Валидация на типы данных в приказе
$status = $item;
echo "<br/>";
if (is_string($status)){
    echo "Type of order is string";
} else {
    echo "Type of order is not string";
}

//Определяем находится ли приказ среди уже существующей команды
$default_order =[$item];
echo "<br/>";
if (in_array('Вперед',$default_order)){
    echo "This order exist";
} else{
    echo "This order not exist";
}
