<?php 
    require 'header.php';
?>

<main class="container mt-4">

    <h2>Home</h2>
    <?php 
         if (isset($_SESSION['username'])) {
            # code...
            $user = $_SESSION['username'];
            echo $user;
        }
    
    ?>
  
</main>

<?php 
    require 'footer.php';
?>