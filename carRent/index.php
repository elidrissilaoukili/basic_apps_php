<?php
require "./config/db-pdo.php";

try {
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT last_name, brand, model, id FROM user_info ORDER BY id";
     $users = $conn->prepare($sql);
     $users->execute();

     // set the resulting array to associative
     $result = $users->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
     echo "Error: " . $e->getMessage();
}

$conn = null;


include("./templates/header.php");
?>


<section class="home-container">
     <div class="cent-txt">
          <h2>Page Information</h2>
     </div>
     <div class="card-container">
          <?php foreach ($users as $user) : ?>

               <div class="card-info">

                    <div class="cent-txt">
                         <h5>Welcome</h5>
                         <h6><?php echo htmlspecialchars($user['last_name']); ?></h6>
                    </div>

                    <div class="info">
                         <p>Car you like is <span><?php echo htmlspecialchars($user['brand']); ?></span></p>
                         <p>Model you perfer is <span><?php echo htmlspecialchars($user['model']); ?></span></p>
                    </div>

                    <div class="details">
                         <a href="details.php?id=<?php echo $user['id']; ?>">More info</a>
                    </div>
               </div>
          <?php endforeach; ?>
     </div>


</section>


<?php include("./templates/footer.php"); ?>