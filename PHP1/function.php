<?php include "DB.php";?>

<?php 
    function createTable(){
    if(isset($_POST['submit']))
    {
        global $connection;
        $username=$_POST['user'];
        $password=$_POST['password'];
        $id=$_POST['id'];
    

    $query="INSERT INTO USER(ID,USERNAME,PASSWORD)";
    $query.="VALUES('$id','$username','$password')";
   
    //$username=mysqli_real_escape_string($connection,$username);
   // $password=mysqli_real_escape_string($connection,$password);

    $result=mysqli_query($connection,$query);

    if(!$result)
    {
        die("query failed".mysqli_error());
    }
    echo "record created";

}
    }

function showData(){
    global $connection;
    $query ="SELECT * FROM USER";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('Query failed'.mysqli_error());
    }
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
         }
        
        }
function update()
    {
     global $connection;
     $username= $_POST['user'];
      $password=$_POST['password'];
      $id=$_POST['id'];

      $query="UPDATE USER SET ";
      $query.="ID='$id',USERNAME='$username', PASSWORD='$password'  WHERE ID='$id'";

      $result=mysqli_query($connection,$query);

      if(!$result)
      {
          die("not connected".mysqli_error($connection));
      }
      echo "record updated";

    }

    function delete()
    {
     global $connection;
     $username= $_POST['user'];
      $password=$_POST['password'];
      $id=$_POST['id'];

      $query="DELETE FROM USER ";
      $query.="WHERE ID='$id'";

      $result=mysqli_query($connection,$query);

      if(!$result)
      {
          die("not connected".mysqli_error($connection));
      }

    }
    ?>