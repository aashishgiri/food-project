<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  </script>
</head>
<body>

<div class="container">
  <h2><center>Login Page</center></h2>
  <p align="right"><a class="btn btn-default" href="../index.php">Homepage</a></p>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="user">Username:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter your username" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-default">Login</button>
    <button type="reset" class="btn btn-default">Reset</button>
  </form>
</div>

</body>
</html>