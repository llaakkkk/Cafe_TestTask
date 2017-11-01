<?php

namespace Utils;

/**
 * Class Drink
 * @package Drink
 */

class Drink
{
    private $name;
    private $recipe;
    private $currency;

    public function __construct($name, $recipe, $currency)
    {
        $this->name = $name;
        $this->recipe = $recipe;
        $this->currency = $currency;

    }

    /**
     * Calculate Drink full Price
     * @return float
     */
    public function getDrinkPrice() {

        $recipe = $this->recipe;
        $drinkPrice = 0;

        foreach ($recipe as $item) {

            $drinkPrice += $item['price'];
        }

        return $drinkPrice;
    }

    /**
     * Get Drink recipe without price
     * @return array
     */
    public function getDrinkRecipe()
    {

        $recipe = $this->recipe;
        $drinkRecipe = [];

        foreach ($recipe as $item) {

            $drinkRecipe[] = $item['name'];
        }

        return $drinkRecipe;
    }

    /**
     * Get all info about Drink
     */
    public function getDrinkInfo() : void
    {
        $fullPrice = $this->getDrinkPrice();
        $fullRecipe = $this->getDrinkRecipe();

        echo "Name: " . $this->name . "\n Recipe: " . implode(' , ', $fullRecipe) . "\n Price: " . $this->currency. $fullPrice . "\n";

    }


}