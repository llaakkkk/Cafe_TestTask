<?php

namespace Utils;


class Cafe
{

    const CURRENCY = '$';

    public function getDrinkMenu() : void
    {
        $tea = new Drink('tea', [
            Menu::$water,
            Menu::$teaBag
        ], self::CURRENCY);

        $tea->getDrinkInfo();

        $coffee = new Drink('coffee', [
            Menu::$coffee,
            Menu::$milk
        ], self::CURRENCY);

        $coffee->getDrinkInfo();

        $cacao = new Drink('cacao', [
            Menu::$cacao,
            Menu::$milk
        ], self::CURRENCY);

        $cacao->getDrinkInfo();
    }

}