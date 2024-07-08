<?php

//// ternary operators

$score = 50;

// if ($score > 40) {
//     echo 'high score!';
// } else {
//     echo ('low score:(');
// }

echo $score > 40 ? 'high score!' : 'low score :(';

$val = $score > 40 ? 'high score!' : 'low score:('; // better use :)
echo $val;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php echo $score > 40 ? 'high score!' : 'low score:('; ?>

</body>

</html>