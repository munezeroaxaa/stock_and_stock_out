<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-form {
      max-wnameth: 400px;
      margin: 0 auto;
      margin-top: 100px;
      background: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2 class="text-center">Create Acoount</h2>
      <form action="log.php" method="Post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="UserName" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="inputPassword" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sing Up</button>
    <p class="mt-3 text-center">do you have an account? <a href="index.php">Log in</a></p>

      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
