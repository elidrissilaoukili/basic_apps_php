<?php
require "./config/db-pdo.php";
include("./templates/header.php");


////
$first_name = $last_name = $email = $phone = $brand = $model = "";
$errors = array('first_name' => '', 'last_name' => '', 'email' => '', 'phone' => '', 'brand' => '', 'model' => '');
if (isset($_POST['submit'])) {

     // check name -1
     if (empty($_POST['first_name'])) {
          $errors['first_name'] = "First Name is required!";
     } else {
          $first_name = $_POST['first_name'];
     }

     if (empty($_POST['last_name'])) {
          $errors['last_name'] = "Last Name is required!";
     } else {
          $last_name = $_POST['last_name'];
     }

     // check email -2
     if (empty($_POST['email'])) {
          $errors['email'] = "Email is required!";
     } else {
          $email = $_POST['email'];
     }

     // check phone -3
     if (empty($_POST['phone'])) {
          $errors['phone'] = "Number Phone is required!";
     } else {
          $phone = $_POST['phone'];
     }

     // check brand -4
     if (empty($_POST['brand'])) {
          $errors['brand'] = "Name of the brand is required!";
     } else {
          $brand = $_POST['brand'];
     }

     // check model -5
     if (empty($_POST['model'])) {
          $errors['model'] = "Name of the model is required!";
     } else {
          $model = $_POST['model'];
     }


     // insert information to data base
     if (array_filter($errors)) {
          //
     } else {
          try {
               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               $sql = "INSERT INTO user_info(first_name, last_name, email, phone, brand, model) 
                    VALUES ('$first_name','$last_name', '$email', '$phone', '$brand', '$model')";

               $conn->exec($sql);
          } catch (PDOException $e) {
               echo "Connection error <br>" . $e->getMessage();
          }

          header('location: index.php');
     }
     $conn = null;
}




?>

<section class="add-container">
     <div class="center">
          <h3>Fill your form!</h3>
          <div class="form-container shadow p-3 mb-5 bg-body rounded">
               <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="mb-3 names">
                         <div class="mr-r1">
                              <label for="" class="form-label">First Name</label>
                              <input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>">
                              <p class="text-danger"><?php echo $errors['first_name'] ?></p>
                         </div>
                         <div> <label for="" class="form-label">Last Name</label>
                              <input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>">
                              <p class="text-danger"><?php echo $errors['last_name'] ?></p>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="" class="form-label">Email address</label>
                         <input type="email" name="email" class="form-control" placeholder="name@example.com" value="<?php echo $email; ?>">
                         <p class="text-danger"><?php echo $errors['email'] ?></p>
                    </div>
                    <div class="mb-3">
                         <label for="" class="form-label">Phone Number</label>
                         <input type="text" name="phone" class="form-control" placeholder="(+212)" value="<?php echo $phone; ?>">
                         <p class="text-danger"><?php echo $errors['phone'] ?></p>
                    </div>
                    <div class="mb-3">
                         <label for="" class="form-label">What car in your mind!</label>
                         <input type="text" name="brand" class="form-control" placeholder="example: Dacia or fiat or .." value="<?php echo $brand; ?>">
                         <p class="text-danger"><?php echo $errors['brand'] ?></p>
                    </div>
                    <div class="mb-3">
                         <label for="" class="form-label">What model you perfer?</label>
                         <input type="text" name="model" class="form-control" placeholder="example: Duster, logan.." value="<?php echo $model; ?>">
                         <p class="text-danger"><?php echo $errors['model'] ?></p>
                    </div>

                    <div class="sub">
                         <input type="submit" name="submit" class="center-btn" value="Add Car">
                    </div>

               </form>
          </div>
     </div>
</section>

<?php include("./templates/footer.php"); ?>