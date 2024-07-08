<?php
include('./config/db-mysqli.php');

// check GET request id parameter
if (isset($_GET['id'])) {
     $id = mysqli_real_escape_string($conn, $_GET['id']);
     $sql = "SELECT * FROM user_info WHERE id = $id";
     $result = mysqli_query($conn, $sql);
     $user = mysqli_fetch_assoc($result);
     mysqli_free_result($result);
}

if (isset($_POST['delete'])) {
     $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
     $sql = "DELETE FROM user_info WHERE id= $id_to_delete";
     if (mysqli_query($conn, $sql)) {
          header('Location: index.php');
     } else {
          echo "query error: " . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">

<?php include('./templates/header.php'); ?>

<section class="details-container">
     <div class="cent-txt">
          <h2 style="margin: 2rem auto;">Details!</h2>
     </div>
     <div class="all-details">
          <div>
               <?php if ($user) : ?>
                    <div class="cent-txt">
                         <p><?php echo htmlspecialchars($user['first_name']) . " " . htmlspecialchars($user['last_name']); ?></p>
                         <p><?php echo htmlspecialchars($user['email']); ?></p>
                         <p><?php echo htmlspecialchars($user['phone']); ?></p>
                         <p><?php echo htmlspecialchars($user['brand']); ?></p>
                         <p><?php echo htmlspecialchars($user['model']); ?></p>
                         <p><?php echo htmlspecialchars(date($user['created_at'])); ?></p>
                    </div>

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="cent-txt ">
                         <input type="hidden" name="id_to_delete" value="<?php echo $user['id']; ?>">
                         <input type="submit" name="delete" value="Delete" class="btn delete">
                    </form>

               <?php else : ?>
                    <h5>No such user exist!</h5>
                    <?php ?>
               <?php endif; ?>
          </div>
     </div>
</section>


<?php include("./templates/footer.php"); ?>