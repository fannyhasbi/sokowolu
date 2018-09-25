<!DOCTYPE html>
<html>
<head>
  <title>Editor Login</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
<div class="container-fluid">
  <div class="jumbotron text-center alert-success">
    <h2>Editor Login</h2>
    <h3>Sokowolu</h3>
  </div>

  <div class="container-fluid">
    <div class="col-sm-8 col-md-4 col-md-offset-4 col-sm-offset-2">
      <form action="" method="post">
        <div class="form-group">
          <label class="control-label">Username</label>
          <input type="text" name="username" class="form-control" required autofocus>
        </div>

        <div class="form-group">
          <label class="control-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
          <input type="submit" name="login" class="btn btn-success" value="Login">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>