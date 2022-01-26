<?php
/* Qurutob Recipe
1 fatir
300 ml chaka
2 teaspoons salt
3 tomatoes , diced
2 onions , chopped
2 spring onions , thinly sliced
1 bunch cilantro , chopped
100 ml Vegetable oil
4 shrimps
*/

function cookQurutob
(int $fatir,
 int $chaka,
 int $salt,
 int $tomatoes,
 int $onions,
 int $spring_onions,
 int $cilantro,
 int $vegetable_oil,
 int $shrimps,
 string $horoshie_slova)
{
    echo
    "1. Saute $onions onions with $shrimps shrimps in a skillet in hot $vegetable_oil oil until translucent, about 8 minutes.<br> 
    2. Meanwhile, place small pieces of $fatir bread in traditionally a large wooden dish.<br> 
    3. Top with $chaka chaka. <br>
    4. Pour the onion with the hot oil. <br>
    5. Top with $spring_onions spring onions, $tomatoes tomatoes and $cilantro cilantro. Serve immediately. <br>
    $horoshie_slova";
    /*Saute onion in a skillet in hot oil until translucent, about 8 minutes.
Meanwhile, place small pieces of fatir bread in traditionally a large wooden dish.
Top with chaka. Pour the onion with the hot oil. Top with spring onions, tomatoes and cilantro. Serve immediately.*/
}

cookQurutob(1, 300, 2, 3, 2, 2, 1, 100, 4, 'Bon appetit');



