<?php 
      include ("connection.php");

      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM usuario WHERE id = $id";
        $result = mysqli_query($conn,$query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Persona eliminada';
        $_SESSION['message_type'] = 'Peligro';

        header("Location: admin.php");
      }

?>