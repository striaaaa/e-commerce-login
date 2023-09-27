<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['email'])) {
    header("Location: login.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

if (isset($_SESSION['emaill'])) {
    header("Location: logout.php");
}
 
if (isset($_POST['submitt'])) {
    $usernamee = $_POST['usernamee'];
    $emaill = $_POST['emaill'];
    $passwordd = md5($_POST['passwordd']);
    $cpasswordd = md5($_POST['cpasswordd']);
 
    if ($passwordd == $cpasswordd) {
        $sql = "SELECT * FROM users WHERE username='$usernamee'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$usernamee', '$emaill', '$passwordd')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $usernamee = "";
                $emaill = "";
                $_POST['passwordd'] = "";
                $_POST['cpasswordd'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="style-login.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />


  </head>
  <body>
    <div class="container">
      <input type="checkbox" id="check" />
      <div class="login form">
        <header>Login</header>
        <form action="" method="POST">
          <input type="text" placeholder="Enter your email" name="email" value="<?php echo $email; ?>" required />
          <input type="password" placeholder="Enter your password" name="password" value="<?php echo $_POST['password']; ?>" required />
          <div class="signup">
            <a href="">Forgot Password?</a>
           
          </div>
            <button name="submit" class="btn" value="Login "><p>Login</p></button> 
            <span class="SIGN"
              >Already have an account?
              <label for="check">Signup</label>
            </span>
        </form>
      </div>
      <div class="registration form">
        <header>Signup</header>
        <form action="" method="POST">
           <input type="text" placeholder="Enter your username"  name="usernamee" value="<?php echo $usernamee; ?>" required />
          <input type="text" placeholder="Enter your email"  name="emaill" value="<?php echo $emaill; ?>" required />
          <input type="password" placeholder="Enter your password"  name="passwordd" value="<?php echo $_POST['passwordd']; ?>" required />
          <input type="password" placeholder="Confirm your password" name="cpasswordd" value="<?php echo $_POST['cpasswordd']; ?>" required/>
           <button name="submitt" class="btn" 
          > Signup </button>
        </form>
        <div class="login">
          <span class="login"
            >Already have an account?
            <label for="check">Login</label>
          </span>
        </div>
      </div>
    </div>
  </body>
</html>
