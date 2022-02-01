<?php




function validateMinPayment($transaction)
{


    $min_money_transfer = 500;


    if($transaction < $min_money_transfer){
        return "Ваша сумма перевода ниже минимальной";
    }
    return "Сумма в пределах нижнего порога";
}



function validateMaxPayment ($transaction){

    $max_money_transfer = 5000;

    if ($transaction > $max_money_transfer ){
        return "Ваша сумма перевода выше максимальной ";
    }
    return "Сумма в пределах верхнего порога";
}


function validationReceiverMinAccount($receiver_account){

    $min_account_character_number = 8;

    if (mb_strlen($receiver_account) < $min_account_character_number){
        return "Получатель не найдет так как минимальное колчество знаков - 8";
    }
    return "В пределах нормы";
}

function validationReceiverMaxAccount ($receiver_account){

    $max_account_character_number = 16;

    if (mb_strlen($receiver_account) > $max_account_character_number){
        return "Получатель не найден так как максимальное колличество знаков - 16";
    }
    return "В пределах нормы ";
}

echo validateMaxPayment(6000);
echo validateMinPayment(400);
echo validationReceiverMaxAccount(11112222333344445555);
echo validationReceiverMinAccount(1111222);


