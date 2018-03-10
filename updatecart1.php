
<?php
session_start();
$itemId = isset($_GET['itemId']) ? $_GET['itemId'] : "";
if ($_POST)
{
    for ($i = 0; $i < count($_POST['qty']); $i++)
    {
        $key = $_POST['arr_key_' . $i];
        $_SESSION['qty'][$key] = $_POST['qty'][$i];
        header('location:logincomset.php');
    }
} else
{
    if (!isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = array();
        $_SESSION['qty'][] = array();
    }

    if (in_array($itemId, $_SESSION['cart']))
    {
        $key = array_search($itemId, $_SESSION['cart']);
        $_SESSION['qty'][$key] = $_SESSION['qty'][$key] + 1;
        echo "string";
        echo "<script type='text/javascript'>";
        echo "alert ('สินค้าอยู่ในตระกร้าเรียบร้อยแล้ว');";
        echo "window.location='logincomset1.php?a=exits';";
        echo "</script>";
    } else
    {
        array_push($_SESSION['cart'], $itemId);
        $key = array_search($itemId, $_SESSION['cart']);
        $_SESSION['qty'][$key] = 1;
        echo "<script type='text/javascript'>";
        echo "alert ('สินค้าอยู่ในตระกร้าเรียบร้อยแล้ว');";
        echo "window.location='logincomset1.php?a=add';";
        echo "</script>";
    }
}
?>
