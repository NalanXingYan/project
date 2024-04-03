<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_GET['name'];
    $password=$_GET['password'];
    $name=$_POST['name'];
    $password=$_POST['password'];

    session_start(); 
    
    include "conn.php";
    
    if (isset($_POST['name']) && isset($_POST['password'])) {
    
        function validate($data){
    
           $data = trim($data);
    
           $data = stripslashes($data);
    
           $data = htmlspecialchars($data);
    
           return $data;
    
        }
    
        $name = validate($_POST['name']);
    
        $pass = validate($_POST['password']);
    
        if (empty($name)) {
    
            header("Location: index.php?error=User Name is required");
    
            exit();
    
        }else if(empty($pass)){
    
            header("Location: index.php?error=Password is required");
    
            exit();
    
        }else{
    
            $sql = "SELECT * FROM user WHERE name='$name' AND password='$pass'";
    
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) === 1) {
    
                $row = mysqli_fetch_assoc($result);
    
                if ($row['name'] === $name && $row['password'] === $pass) {
    
                    echo "Logged in!";
    
                    $_SESSION['name'] = $row['name'];
    
                    $_SESSION['password'] = $row['password'];
    
                    $_SESSION['id'] = $row['id'];
    
                    header("Location: home.html");
    
                    exit();
    
                }else{
    
                    header("Location: index.php?error=Incorect User name or password");
    
                    exit();
    
                }
    
            }else{
    
                header("Location: index.php?error=Incorect User name or password");
    
                exit();
    
            }
    
        }
    
    }else{
    
        header("Location: index.php");
    
        exit();
    
    }
}
?>