<?php

require_once "vendor/autoload.php";

use App\classes\Home;
use App\classes\Calculator;
use App\classes\OddEven;
use App\classes\Prime;
use App\classes\Category;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['pages'] == 'even-odd')
    {
        include "pages/even-odd.php";
    }
    elseif ($_GET['pages'] == 'prime')
    {
        include "pages/prime.php";
    }
    elseif ($_GET['pages'] == 'all-products')
    {
        include "pages/all-products.php";
    }
}
elseif (isset($_POST['btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->index();
    include "pages/home.php";

}
elseif (isset($_POST['oddbtn']))
{
    $oddEven = new OddEven($_POST);
    $result = $oddEven->index();
    include "pages/even-odd.php";

} elseif (isset($_POST['primeBtn'])){
    $prime = new Prime($_POST);
    $result = $prime->index();
    include "pages/prime.php";
}
elseif (isset($_POST['primeBtn'])){
    $category = new Category($_POST);
    $categories = $category->index();
    include "pages/all-products.php";
}