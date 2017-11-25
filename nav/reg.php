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
  <h2>Registration for new user</h2>
  <p align="right"><a class="btn btn-default" href="../index.php">Homepage</a></p>
  
  <form method="POST" action="regdatabase.php" enctype="multipart/form-data" autocomplete="off">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" value="<?php if(isset($name)) echo $name; ?>">
    </div>
    <div class="form-group">
      <label for="phone">Phone no.:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone" value="<?php if(isset($phone)) echo $phone; ?>">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter your address along with street address" name="address" value="<?php if(isset($address)) echo $address; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($email)) echo $email; ?>">
    </div>
    <div class="form-group">
      <label for="user">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter new username" name="username" value="<?php if(isset($username)) echo $username; ?>">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php if(isset($password)) echo $password; ?>">
    </div>
    <div class="form-group">
      <label for="cpassword">Confirm Password:</label>
      <input type="password" class="form-control" id="cpassword" placeholder="Again enter your password to confirm" name="cpassword" value="<?php if(isset($cpassword)) echo $cpassword; ?>">
    </div>
    <button type="submit" class="btn btn-default" name="register">Submit</button>
    <button type="reset" class="btn btn-default">Reset</button>
  </form>
</div>
</body>
</html>