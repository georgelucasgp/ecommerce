<?php
/**
 * Created by PhpStorm.
 * User: georgelucas
 * Date: 04/02/2018
 * Time: 21:09
 */

function formatPrice(float $vlprice)
{

    return number_format($vlprice,2,",",".");

}