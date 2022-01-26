<?php

function mojitoRecipe
(int $juice_of_1_lime,
 int $tsp_granulated_sugar,
 int $mint_leaves,
 int $soda_water,
 string $wishes)
{
    echo
        "STEP 1 <br>
    Muddle $juice_of_1_lime the lime juice, $tsp_granulated_sugar sugar and mint $mint_leaves leaves in a small jug, 
    crushing the mint as you go – you can use the end of a rolling pin for this.<br> 
    Pour into a tall glass and add a handful of ice.<br>
    STEP 2 <br> 
    Pour over the rum, stirring with a long-handled spoon. Top up with $soda_water soda water, garnish with mint and 
    serve. <br> $horoshie_slova";
}

mojitoRecipe(1, 1, 3, 500, 'Bon appetit');



