<?php

$small_money_tansaction = "Недостаточная сумма тансакции";
$incorrect_reciever_account_number = "Такого Банковского номера не существует ";
$incorrect_sender_account_number = "Такого номера отправителя не существует"
$successful_transaction = "Трансакция произведенна успешно";
$unsuccessful_transaction = "Ваша Сумма перевода ниже минимальной"
$correct_sender_account_number = "Правильный номер отправителя";
$correct_account_character_number = 16;
$min_money_transfer = 500;




function approveTransaction(
    $reciever_account_number,
    $sender_account_number,
    $money_amount
);

$money_amount = 1000;
$reciever_account_number = "1111222244443333";
$sender_account_number = "2222777788889999";

if ($reciever_account_number==$correct_account_character_number){
    echo "Номер введен правильно"
}else{
    echo $incorrect_reciever_account_number
};
if($sender_account_number == $correct_account_character_number){
    echo $correct_sender_account_number
}else{
    $incorrect_sender_account_number
};
if($min_money_transfer <= $money_amount){
    echo $successful_transaction
}else{
    echo $unsuccessful_transaction
}