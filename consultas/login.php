<?php 
    require_once('sesion.php');

    $table = $_POST['table']; 
    $user = $_POST['usuario']; 
    $password = $_POST['password']; 

    if($table == "alumno"){
        $sql = ("SELECT * FROM alumnos");
        $result = $conn->query($sql);
        $resultados =  mysqli_fetch_array($result);
        echo($resultados);
    }else{
        if($table=="profesor"){
            $sql = ("SELECT idprofesor FROM profesor where usuario='.$user' && password ='.$password'");
            $result = $conn->query($sql);
            $row = mysqli_num_rows($result);
                echo($resultados);

        }
    }
?>