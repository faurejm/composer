<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 29/10/18
 * Time: 14:06
 */
require '../vendor/autoload.php';

$mess = new \App\wcs\hello();

$mess->talk();

echo '<br>' . \HelloWorld\SayHello::world();

