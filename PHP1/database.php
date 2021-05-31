<?php include "DB.php";?>
<?php include "function.php";?>
 <?php
   createTable(); 
?>

<html>
    <body>
    <form action="" method="post">
        <h1>Create Database</h1>
        <div class="field">
            id:<input type="number" name="id" min="0">
        </div>
        <div class="field">
            Username:<input type="text" name="user">
        </div>

        <div class="field">
            password:<input type="password" name="password">
        </div>

        <div class="field">
            <input type="submit" name="submit">
        </div><br>
        <span class="error"><?php echo $error; ?></span>
    </form>
   </body>
</html>        