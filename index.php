<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/style/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./src/script/index.js"></script>
    <title>Login</title>
</head>
<body>
    <main class="pt-5">
        <div class="container d-flex login">
            <img src="./src/img/login.svg" height="240px" class="login-img"></img>
            <form class="login-form" method="post">
                <h1>Silahkan Login</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <input type="submit" name="TbLogin" class="btn btn-primary"></input>
            </form>
        </div>
    </main>
    
    <?php
        $conn = new mysqli("localhost", "root", "", "ket_application");
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            if(isset($_POST["TbLogin"])){
                $sql = "SELECT * FROM `admin`";
                $result = $conn -> query($sql);

                $username = $_POST['username'];
                $password = $_POST['password'];
                
                if($result -> num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        if($username == $row["username"] && $password == $row["password"]){
                            $_SESSION['userweb']=$username;
                            header("Location: ./admin.php");
                        }else{
                            echo '<script type="text/JavaScript"> alert("Username / Password incorrect" , "Silahkan cek kembali Username & Passsword anda" , "error"); </script>';
                        }
                    }
                }
            }
        }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

