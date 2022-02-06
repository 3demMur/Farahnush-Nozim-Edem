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


function validateMin($money, $min_value)
{
    if ($money < $min_value) {
        return "Error, low money transfer \n";
    }
    return "It's OK, money transfer within the lower threshold \n ";
}

function validateMax($money, $max_value)
{
    if ($money > $max_value) {
        return "Error, money transfer is greater than the maximum value \n ";
    } else {
        return "It's OK, money transfer within the maximum threshold \n ";
    }


}

function validateInt($money)
{

    if (!is_int($money)) {
        return "It is not a number please change to number \n";
    } else {
        return "It's OK, your value is integer  \n";
    }
}

function validateAccount($number, $correct_number): string
{

    if (strlen($number) == $correct_number) {
        return "Successes, you entered right Receiver account number";
    } else {
        return "Error, wrong account number, please change it ";
    }
//    if (mb_strlen($number) < $correct_number ) {
//        return "not enough characters, please add more \n";
//    }elseif(mb_strlen($number) > $correct_number ){
//        return "To much characters please delete some \n";
//    }else{
//        return "It's OK ";
//    }






//function message($money, int $number,)
//{
//    $validate_int = validateIntTransaction($money);
//    $validate_min = validateMinTransaction($money, 1000);
//    $validate_max = validateMaxTransaction($money, 1000000);
//    $validate_receiver = validateReceiverCorrectNumber($number, 16);
//
//
//    return "$validate_min $validate_max $validate_int $validate_receiver";

}

//$money = readline("Please enter the amount of money you want to transfer :");
//$number = readline("Please ender sender's account number");




function validate($rules, $request)
{
    $message = [];
    //"int", "min:100000", "max:10000"


    $rules_in_array = explode("|", $rules);
    foreach ($rules_in_array as $rule ){
        $value_semicolumns = explode(":",$rule );
        ////"int", "min", "100000", "max", "10000"
        array_push($message, call_user_func_array('validate' . ucfirst($value_semicolumns[0]), [$request,$value_semicolumns[1] ]));
    }
    return $message;
}



function index($request)
{
    $rules = "int|min:100000|max:10000000|account:16";
    $messages = validate($rules, $request);

    return count($messages)
        ? implode (',\n',$messages)
        : 'No available messages';

}


$request = 250000;//в центах
echo index($request);




//
//echo message($money, $number);



//$result = call_user_func_array('message', [1000000, 1111222233334444]);
//
//echo $result;


