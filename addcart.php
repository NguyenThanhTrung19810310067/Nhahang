<?php 
    session_start();
    if(isset($_POST["id"]) && isset($_POST["num"])){
       include("./admin/config.php");
       $id = $_POST["id"];
       $num = $_POST["num"];
       $sql="SELECT *FROM products WHERE prd_id=$id";
       $query=mysqli_query($conn,$sql);
       $rowCart = mysqli_fetch_row($query);
       if(!isset($_SESSION["cart"])){
           $cart = array();
           $cart[$id] = array(
               'name'=>$rowCart[1],
               'num'=>$num,
               'price'=>$rowCart[4],
               'image'=>$rowCart[2]
           );
       }else{
           $cart = $_SESSION["cart"];
           if(array_key_exists($id, $cart)){
              $cart[$id] = array(
            'name'=>$rowCart[1],
            'num'=>(int)$cart[$id]['num']+$num,
            'price'=>$rowCart[4],
            'image'=>$rowCart[2]       
        );
        //die("Stuo[");
    }else{
        //die("LELESddd[");
        $cart[$id] = array(
            'name'=>$rowCart[1],
            'num'=>$num,
            'price'=>$rowCart[4],
            'image'=>$rowCart[2]
        );
    }
}
$_SESSION["cart"]=$cart;
    echo "<pre>";
    print_r($_SESSION["cart"]);
    die;
  }

?>