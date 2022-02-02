<?php


//function validateMinPayment($transaction)
//{
//
//
//    $min_money_transfer = 500;
//
//
//    if ($transaction < $min_money_transfer) {
//        return "Ваша сумма перевода ниже минимальной";
//    }
//    return "Сумма в пределах нижнего порога";
//}
//
//
//function validateMaxPayment($transaction)
//{
//
//    $max_money_transfer = 5000;
//
//    if ($transaction > $max_money_transfer) {
//        return "Ваша сумма перевода выше максимальной ";
//    }
//    return "Сумма в пределах верхнего порога";
//}
//
//
//function validationReceiverMinAccount($receiver_account)
//{
//
//    $min_account_character_number = 8;
//
//    if (mb_strlen($receiver_account) < $min_account_character_number) {
//        return "Получатель не найдет так как минимальное колчество знаков - 8";
//    }
//    return "В пределах нормы";
//}
//
//function validationReceiverMaxAccount($receiver_account)
//{
//
//    $max_account_character_number = 16;
//
//    if (mb_strlen($receiver_account) > $max_account_character_number) {
//        return "Получатель не найден так как максимальное колличество знаков - 16";
//    }
//    return "В пределах нормы ";
//}
//
//
//
//
//
//
//
////echo validateMaxPayment(6000);
////echo validateMinPayment(400);
////echo validationReceiverMaxAccount(11112222333344445555);
////echo validationReceiverMinAccount(1111222);


function validateMinTransaction($money, $min_value)
{
    if ($money < $min_value) {
        return "Error not enough money";
    }
    return "It's OK";
}

function validateMaxTransaction($money, $max_value)
{
    if ($money > $max_value) {
        return "Error";
    }else{
        return "It's OK";
    }


}

function validateIntTransaction($money)
{
    if (!is_int($money)) {
        return "It is not a number please change";
    }else{
        return "It's OK Int";
    }

}

function validateReceiverCorrectNumber($number, $correct_number): string
{


    if (mb_strlen($number) < $correct_number ) {
        return "not enough characters, please add more";
    }elseif(mb_strlen($number) > $correct_number ){
        return "To much characters please delete some";
    }else{
        return "It's OK";
    }

}

function message(int $money, int $number,)
{
    $validate_min = validateMinTransaction($money, 1000) . "</br>";
    $validate_max = validateMaxTransaction($money, 1000000) . "</br>";
    $validate_int = validateIntTransaction($money) . "</br>";
    $validate_receiver = validateReceiverCorrectNumber($number, 16) . "</br>";

    return "$validate_min $validate_max $validate_int $validate_receiver";

}

echo message(10000, 1111222233334444);

//echo validateReceiverCorrectNumber(14, 3);

//echo validateIntTransaction(1321321);

//echo validateMaxTransaction(500, 300);

//echo validateMinTransaction(4 , 5);







