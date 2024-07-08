<?php

include('./config/db_connect.php');

$email = $title = $ingredients = "";
$errors = array('email' => '', 'title' => '', 'ingredients' => '');
if (isset($_POST['submit'])) {

    // check email
    if (empty($_POST['email'])) {
        $errors['email'] =  'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "email must be a valid email adress";
        }
    }

    // check pizza
    if (empty($_POST['title'])) {
        $errors['title'] =  'A title is required <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = "title must be letters and spaces only";
        }
    }

    // check ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] =  'An ingredients is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = "ingredients must be seperated by a comma";
        }
    }

    if (array_filter($errors)) {
        // 
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        // create sql
        $sql = "INSERT INTO pizzas(email, title, ingredients) VALUES ('$email', '$title', '$ingredients')";

        // save to db then check
        if (mysqli_query($conn, $sql)) {
            // success
            header('Location: index.php');
        } else {
            // error
            echo 'query error: ' . mysqli_error($conn);
        }

        // header('Location: index.php');
    }
} // end of POST check

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Add a pizza</h4>
    <!-- here in the action we used a add.php -->
    <!-- <form class="white" action="add.php" method="POST"> -->

    <!-- here in the action we used  <echo $_SERVER['PHP_SELF'] > inside of  php tag because this way is global, we could update the file name without the need to update form action-->
    <form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <label for="">Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label for="">Pizza title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>

        <label for="">Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>

    </form>
</section>

<?php include('templates/footer.php'); ?>

</html>