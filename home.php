<?php 
    require 'header.php';
?>

<main class="mt-2 d-flex  align-items-center flex-column" style="height:100vh">

    <h2>Home</h2>

    <?php if(isset($_SESSION['username'])) : ?>
        
        <p>
            Usuario: <?php echo $_SESSION['username'] ?> 
        </p>
        <p>
            rol: <?php echo $_SESSION['rol'] ?> 
        </p>

    <?php endif; ?>



 

   
  
</main>

<?php 
    require 'footer.php';
?>