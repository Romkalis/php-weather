<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Переменные
    
    // $colors = array('red', 'blue', 'green');
    // // print_r($colors);
    // // var_dump($colors);
    
    // echo $colors[1];
    // echo "<br>";
    // $colors['pink'] = "Pink";
    
    // $colors[] = "Black";
    // print_r($colors);
    
    // -------------------------------------------------------------------------------
    
    // Массивы
    
    // $names[0] = "John";
    // $names[2] = "Jane";
    // $names[] = "Jun";
    
    // print_r($names);
    
    // echo sizeof($names);
    
    // -------------------------------------------------------------------------------
    
    // IF - ELSE
    
    // $userName = "Roman";
    // $isUserlogin = true;
    
    // if ($isUserlogin) {
    //     echo "Sholom, " . $userName . "!";
    // } else {
    //     echo "You need to log in!";
    // }
    
    // -------------------------------------------------------------------------------
    
    // Logical && ||
    
    // $userName = "Roman";
    // $isUserlogin = true;
    // $userAge = 17;
    
    // if ($isUserlogin && $userAge >= 18) {
    //     echo "Sholom, " . $userName . "!";
    // } else {
    //     echo "You need to log in & must be older 18!";
    // }    
    

    // -------------------------------------------------------------------------------
    
    //  ЦИКЛЫ
    
    // for( $i = 10; $i >= 0; $i-- ) {
    // echo $i."<br>";
    // } 
    
    // $colors = array("red","orange","black","pink","tomato","green");
    
    // // Цикл  FOR 
    
    // for ($i = 0; $i < sizeof($colors); $i++) {
    //     echo $colors[$i]."<br>";
    // }
    
    // // Цикл  FOREACH
    // foreach($colors as $key => $value) {
    //     $colors[$key] = $value." color";
    //     echo $colors[$key]."<br>";
    // }
    
    // $k = 1;
    
    // while($k < 10) {
    //     echo (7 * $k);
    //     echo '<br>';
    //     $k ++ ;
    // }  
    ?>




    <!-- <p>Input number to check</p>
    <form>
        <input type="text" name="number">   
        <button>Submit</button>
    </form>
    
    -->

    <?php
    // $queryNumber = $_GET["number"];
    // $isNumericNumber = is_numeric($queryNumber);
    // if ($isNumericNumber) {
    
    //     if ($queryNumber && ($queryNumber %2 == 0)) {
    //         echo $queryNumber.' is even';
    //     } else if ($queryNumber && ($queryNumber %2 != 0)) {
    //         echo $queryNumber.' is odd';
    //     } 
    // } else {
    //     echo "Это не целое число!"; 
    // }
    ?>


    <p>Login</p>
    <form method="post">
        <input type="text" name="name" placeholder="Input your name">   
        <input type="password" name="pass" placeholder="Input password">   
        <button>Submit</button>
    </form>
    
   <?php
//    print_r($_POST)

   $logindata = ["Roman" => "qweqwe", "Lisa" => "asdasd"];
//    print_r($_POST);

   foreach ($logindata as $key => $value) {
    if ($_POST['name'] == $key && $_POST['pass'] == $value){
        echo "<hr> hello $key"; 
    } else if ($_POST['name'] == $key && $_POST['pass'] != $value) {
        echo "<hr> Password is incorrect"; 
    } else if ($_POST['name'] != $key && $_POST['pass'] == $value) {
        echo " <hr> Name is incorrect";
    } else {
        // echo "<hr>Can't find user";
    }
   }
//    if($_POST["name"] == "Roman" && $_POST["pass"] == "123") {
//         echo " <br><hr>Hello There!";
//    }    
    echo $nameFromForm;
   ?>

   <hr>
   
   <?php
    include 'additionalFile.php';
    echo '<br>';
    include 'addsFolder/additonalFileFromFolder.php';
   ?>

</body>

</html>