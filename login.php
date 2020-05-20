<!Doctype html>
<html>
<head>
<title>User registration and Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="login-box">
   <div class="row">
     <div class="col-md-6 login-left">
     <h2>Login here</h2>
     <form action="validation.php" method="POST">
       <div class="form-group">
         <label>Username</label>
         <input type="text" name="user" class="form-control" required>
       </div>
       <div class="form-group">
         <label>Password</label>
         <input type="text" name="password" class="form-control" required>
       </div>
       <button type="submit" class="btn btn-primary">Login</button>
       <div class="forgot" id="for">
     <a href="forgotpass.php" style="color: red">forgot pass</a>
    </div>
     </form>
     
     </div>
     
     <div class="col-md-6 login-right">
     <h2>Register here</h2>
     <form action="register.php" method="POST">
       <div class="form-group">
         <label>Username</label>
         <input type="text" name="user" class="form-control" required>
       </div>
       <div class="form-group">
         <label>Password</label>
         <input type="text" name="password" class="form-control" required>
       </div>
       <button type="submit" class="btn btn-primary">register</button>
     </form>
     </div>
   </div>
</div>
</div>

</div>
</body>

</html>