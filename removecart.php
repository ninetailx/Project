<?php

session_start();

$itemId = isset($_GET['itemId']) ? $_GET['itemId'] : "";

if (!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
    $_SESSION['qty'][] = array();
}

$key = array_search($itemId, $_SESSION['cart']);
$_SESSION['qty'][$key] = "";

$_SESSION['cart'] = array_diff($_SESSION['cart'], array($itemId));
header('location:Logincomset.php?a=remove');
?>
