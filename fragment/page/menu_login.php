 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800 ;">Login</p>
            <div class="input-group">
                <input type="text" required placeholder="Username" name="username">
            </div>
            <div class="input-group">
                <input type="password" required placeholder="Password" name="password">
            </div>
            <div class="input-group">
                <input type="submit" class="btn"></input>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="daftar.php">Register</a></p>
        </form>
    </div>
</body>
</html>

<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300);
 
 * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins', sans-serif;
 }
  
 body {
     width: 100%;
     min-height: 100vh;
     background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.pinimg.com/736x/1c/44/37/1c4437ef1c7141e013eadee7f1b33163.jpg);
     background-position: center;
     background-size: cover;
     display: flex;
     justify-content: center;
     align-items: center;
 }
  
 .container {
     width: 400px;
     min-height: 400px;
     background: #B270A2;
     border-radius: 5px;
     box-shadow: 0 0 5px rgba(0,0,0,.3);
     padding: 40px 30px;
 }
  
 .container .login-text {
     background-color: rgb(255, 198, 230);
     font-weight: 500;
     color: rgb(129, 53, 106);
     font-size: 1.1rem;
     text-align: center;
     margin-bottom: 20px;
     display: block;
     border-radius: 8px;
     border: 2px solid rgb(129, 53, 106);
     text-transform: capitalize;
 }
  
 .container .login-email .input-group {
     width: 100%;
     height: 50px;
     margin-bottom: 25px;
 }
  
 .container .login-email .input-group input {
     width: 100%;
     height: 100%;
     border: 2px solid rgb(129, 53, 106);
     padding: 15px 20px;
     font-size: 1rem;
     border-radius: 30px;
     background: transparent;
     outline: none;
     transition: .3s;
 }
  
 .container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
     border-color: rgb(129, 53, 106);
 }
  
 .container .login-email .input-group .btn {
     display: block;
     width: 100%;
     padding: 15px 20px;
     text-align: center;
     border: none;
     background: rgb(243, 156, 217);
     outline: none;
     border-radius: 30px;
     font-size: 1.2rem;
     color: rgb(255, 225, 246);
     cursor: pointer;
     transition: .3s;
 }
  
 .container .login-email .input-group .btn:hover {
     transform: translateY(-5px);
     background: rgb(138, 89, 123);
 }
  
 .login-register-text {
     color: #FFF;
     font-weight: 600;
 }
  
 .login-register-text a {
     text-decoration: none;
     color: rgb(73, 31, 61);
 }
  
 .container-logout {
     width: 500px;
     min-height: 200px;
     background: #FFF;
     border-radius: 5px;
     box-shadow: 0 0 5px rgba(0,0,0,.3);
     padding: 40px 30px;
 }
  
 .container-logout .login-email .input-group .btn {
     display: block;
     width: 100%;
     padding: 15px 20px;
     text-align: center;
     border: none;
     background: #a29bfe;
     outline: none;
     border-radius: 30px;
     font-size: 1.2rem;
     color: #FFF;
     cursor: pointer;
     transition: .3s;
     margin-top: 20px;
 }
  
 .container-logout .login-email .input-group .btn:hover {
     transform: translateY(-5px);
     background: #6c5ce7;
 }
  
 @media (max-width: 430px) {
     .container {
         width: 300px;
     }
 }
</style>