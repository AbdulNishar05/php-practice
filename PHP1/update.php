<?php include "DB.php";?>
<?php include  "function.php";?>

<?php
    if(isset($_POST['submit']))
    {
        update();
    }
?>
<html>
    <head>
        <!-- CSS only -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <head>
        <body>
        <form action="" method="post">
        <h1>Update</h1>
        <div class="field">
            id:<input type="number" name="id" min="0">
        </div>
        <div class="field">
            Username:<input type="text" name="user">
        </div>

        <div class="field">
            password:<input type="password" name="password">
        </div>
            <?php
            showData();
            ?>
        <div class="field">
            <input type="submit" name="submit" value="update">
        </div><br>
        <span class="error"><?php echo $error; ?></span>
    </form>   
        </body>
</html>            