<?php
session_start();
$itemId = isset($_GET['itemId']) ? $_GET['itemId'] : "";

    if (!isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = array();
        $_SESSION['qty'][] = array();
    }

    if (in_array($itemId, $_SESSION['cart']))
    {
        $key = array_search($itemId, $_SESSION['cart']);
        $_SESSION['qty'][$key] = $_SESSION['qty'][$key] + 1;
        header('location:logincomset1.php?a=exists');
    } else
    {
        array_push($_SESSION['cart'], $itemId);
        $key = array_search($itemId, $_SESSION['cart']);
        $_SESSION['qty'][$key] = 1;
        header('location:logincomset1.php?a=add');
    }
?>
