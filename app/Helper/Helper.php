<?php
class Helper
{
    public static function minPrice()
    {
        return floor (\App\Product::min('unit_price'));
    }

    public static function maxPrice()
    {
        return floor (\App\Product::max('unit_price'));
    }
}