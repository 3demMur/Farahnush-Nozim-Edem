<?php

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