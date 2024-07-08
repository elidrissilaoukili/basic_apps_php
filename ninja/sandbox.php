<?php

//// sessions

// sessions: doesn't store data on the user's computer like the cookie
//           would, but instead it stores data on the server between requests
//           between loading different pages 

$name = '';
if (isset($_POST['submit'])) {

    // cookie for gender
    setcookie('gender', $_POST['gender'], time() + 10);

    session_start();
    $_SESSION['name'] = $_POST['name'];
    // echo $_SESSION['name'];
    header('Location: index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name">
        <select name="gender" id="">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>