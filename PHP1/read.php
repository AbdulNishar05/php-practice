<?php include "DB.php";?>
<?php
    global $connection;
    $query ="SELECT * FROM USER";

    $result = mysqli_query($connection,$query);

    if(!$result){

        die('Query failed'.mysqli_error());
    } 
?>
<html>
    <head>
        <!-- CSS only -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <head>
        <body>
            <?php
            while($row=mysqli_fetch_assoc($result)){
             ?>
                <pre>
                <?php
                print_r($row);
            }
                ?>
                   
                </pre>
                
            

           
            
        </body>
</html>            