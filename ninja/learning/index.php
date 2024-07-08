<?php

// define('name', 'Khalid');

// // $name = "Yoshi";
// // $age = 22;

// $stringOne = 'my email is ';
// $stringTwo = 'laoukili@gmail.com ';
// //echo $stringOne . $stringTwo;

// $name = 'mohammed';
// //echo 'my name is: ' . $name;
// echo "my name is: $name,.. ";
// echo "ninja screamed \"whaaaaaa\" ";


// echo $name[0] . " ";


// echo " " . strlen($name);
// echo " " . strtoupper($name);
// echo " " . str_replace('m', "M", $name);

// ///////////////////////////////////////
// /////////////////NUMBERS//////////////
// //////////////////////////////////////
// $radius = 25;
// $pi = 3.14;

// ///////////////////////////////////////
// /////////////////Arrays//////////////
// //////////////////////////////////////

// $peopleOne = ['mohmmed', 'laoukili', 'elidrissi'];
// $peopleTwo = array('saad', 'hamdouch');
// // echo $peopleOne[1] . " ";
// // echo $peopleTwo[1];

// $ages = [10, 20, 30, 40];
// // print_r($ages);
// $ages[1] = 99;
// // print_r($ages);
// $ages[] = 88;
// // print_r($ages);
// array_push($ages, 70);
// // print_r($ages);

// // echo count($ages);

// $peopleThree = array_merge($peopleOne, $peopleTwo);
// // print_r($peopleThree);

// $ninjasOne = ['m' => 'mohammed', 'l' => 'laoukili', 'e' => 'elidrissi'];
// // echo $ninjasOne['m'];
// // print_r($ninjasOne);

// $ninjasTwo = ['s' => 'saad', 'h' => 'hamdouch'];
// // echo $ninjasTwo['s'];
// // print_r($ninjasTwo);

// $ninjasTwo['d'] = 'developer';
// // print_r($ninjasTwo);
// echo count($ninjasTwo);



// ///////////////////////////////////////
// /////////////////Multidemension//////////////
// //////////////////////////////////////

// $blogs = [
//     ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
//     ['title' => 'mario kart', 'author' => 'MOhAMMED', 'content' => 'lorem', 'likes' => 25],
//     ['title' => 'this hidden info', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
// ];

// // print_r($blogs);
// // print_r($blogs[1][1]);
// // print_r($blogs[1]['author']);
// // echo count($blogs);

// $blogs[] = [
//     ['title' => 'NEW TITLE', 'author' => 'LAOUKILI', 'content' => 'LOREM', 'likes' => 99],
// ];
// // echo count($blogs);

// $popped = array_pop($blogs);
// print_r($popped);



// $other = ['mohmmed', 'laoukili', 'elidrissi'];
// // for ($i = 0; $i < count($other); $i++) {
// //     echo $other[$i] . "<br/>";
// // }

// foreach ($other as $person) {
//     echo $person . "<br/>";
// }


$blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart', 'author' => 'mohammed', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'this hidden info', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];

// foreach ($blogs as $blog) {
//     echo $blog['title'] . ' - ' . $blog['author'] . ' - ' . $blog['content'] . ' - ' . $blog['likes'];
//     echo '<br/>';
// }

// $i = 0;
// while ($i < count($blogs)) {
//     echo $blogs[$i]['title'] . ' - ' . $blogs[$i]['author'] . ' - ' . $blogs[$i]['content'] . ' - ' . $blogs[$i]['likes'];
//     echo '<br/>';
//     $i++;
// }
include('login.php');
require("login.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <!--     
        <div class="class">
        <h1><?php // echo 'hello ', $name, " to the page"; 
            ?></h1>
        <h1><?php // echo 'you are ', $age, " years old"; 
            ?></h1>

        <h1><?php // echo 'hello ', name, " to the page"; 
            ?></h1>
    </div>  -->




    <section>

        <h1>Blogs</h1>
        <ul>
            <?php foreach ($blogs as $blog) { ?>
                <h3> <?php echo $blog['title']; ?> </h3>
                <p> <?php echo $blog['author']; ?> </p>
            <?php  } ?>
        </ul>

    </section>

</body>

</html>