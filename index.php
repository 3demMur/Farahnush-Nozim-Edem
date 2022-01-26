<?php

 feature-mojito
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




/*
large handful of ice
100ml vodka
500ml tomato juice
1 tbsp lemon juice, plus 2 slices to serve
2 shakes Worcestershire sauce
2 shakes Tabasco (smoked Tabasco is nice)
pinch celery salt
pinch black pepper
2 celery sticks, to serve
*/

function makeBloodyMary(
    int $ice,
    int $vodka,
    int $tomato_juice,
    int $lemon_juice,
    int $worcestershire_sauce,
    int $tabasko_sauce,
    int $salt_pinch,
    int $black_pepper_pinch,
    int $celery_strick,
)

{
    echo
    "STEP 1<br>
    Place the $ice in a large jug. Measure the $vodka, $tomato_juice and $lemon_juice and pour it straight onto the ice.<br>
    
    STEP 2<br>
    Add 3 shakes of $Worcestershire_sauce and $tabasko_sauce (or more if you like it very spicy) and a pinch of $salt_pinch and $balck_pepper_pich.<br>
     Stir until the outside of the jug feels cold, then strain the cocktail into 2 tall glasses.<br>
    
    STEP 3<br>
    Top up with fresh $ice, add a $celery_stick and lemon slice to both glasses and enjoy.<br>"
};

makeBloodyMary(1, 100, 500, 1, 2, 2, 1, 1, 2)
/*
    recipe coctktail
    1. milk 300 ml;
    2. sugar 5 ch.l;
    3. banana 1;
    4. ice-cream 3 st.l;
    5. berries 1.
*/

function milkyCocktktail(int $milk, int $sugar, int $banana, int $ice_cream, int $berries){
    echo
    "milk $milk ml;" .
    "sugar $sugar ch.l;" .
    "banana $banana" .
    "ice-cream $ice_cream st.l;" .
    "barries $barries.";
}

milkyCocktktail(300, 5, 1, 3, 1);

