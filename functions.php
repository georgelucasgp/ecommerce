<?php
/**
 * Created by PhpStorm.
 * User: georgelucas
 * Date: 04/02/2018
 * Time: 21:09
 */

use \Hcode\Model\User;

function formatPrice(float $vlprice)
{

    return number_format($vlprice,2,",",".");

}

function checkLogin($inadmin = true){

    return User::checkLogin($inadmin);
}

function getUserName(){

    $user = User::getFromSession();

    return $user->getdesperson();
}