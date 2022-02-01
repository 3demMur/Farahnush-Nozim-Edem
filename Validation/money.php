<?php






function approveTransaction( int $receiver_account_number, int $sender_account_number, int $money_amount



)
{

    $incorrect_receiver_account_number = " Такого Банковского номера не существует. ";
    $incorrect_sender_account_number = " Такого номера отправителя не существует. ";
    $successful_transaction = " Трансакция произведенна успешно. ";
    $unsuccessful_transaction = " Ваша Сумма перевода ниже минимальной. ";
    $correct_sender_account_number = " Правильный номер отправителя. ";
    $correct_account_character_number = 16;
    $min_money_transfer = 500;
    $money_amount = mb_strlen("");
    $receiver_account_number =mb_strlen("") ;
    $sender_account_number = mb_strlen("");

    if ($receiver_account_number >= $correct_account_character_number) {
        echo "Номер введен правильно";
    } else {
        echo $incorrect_receiver_account_number;
    }
    if ($sender_account_number >= $correct_account_character_number) {
        echo $correct_sender_account_number;
    } else {
        return $incorrect_sender_account_number;
    }
    if ($min_money_transfer <= $money_amount) {
        echo $successful_transaction;
    } else {
        echo $unsuccessful_transaction;
    }


}

echo approveTransaction(111222233334444,2222333344445555,4000);