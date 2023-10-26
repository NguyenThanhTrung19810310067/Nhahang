<?php 
session_start();
if(isset($_POST["id"]) && isset($_POST["num"])){
    $num = $_POST["num"];
    $id = $_POST["id"];
    $cart = $_SESSION["cart"];
    if(array_key_exists($id, $cart)){
        if($num){
        $cart[$id] = array(
            'name'=>$cart[$id]["name"],
            'num'=>$num,
            'price'=>$cart[$id]["price"],
            'image'=>$cart[$id]['image']
        );
    }else{
        unset($cart[$id]);
    }

        $_SESSION["cart"] = $cart;
    }
}
?>

    