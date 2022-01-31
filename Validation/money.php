
<div style="text-align: center">
    <form action="index.php" method="post">
        <p>Report: <input type="text" name="name" /></p>
        <p><input type="submit" /></p>
    </form>
</div>

<?php
$item = htmlspecialchars($_POST['name']);
echo ('Report: '. $item);

//проверяем минимальную длину символов в Приказе
$min_value = 2;
function validateMin ($item, $min_value)
{
    if(strlen($item) <= $min_value){
        return "Very few characters in the order.";
    }
    return "Min number of characters are ok. ";
}
echo "<br/>";
echo validateMin($item,$min_value);

//проверяем максимальную длину символов в Приказе
$max_value=10;
function validateMax ($item, $max_value)
{
    if(strlen($item) <= $max_value){
        return "Very much characters in the order.";
    }
    return "Max number of characters are ok. ";
}
echo "<br/>";
echo validateMax($item,$max_value);

