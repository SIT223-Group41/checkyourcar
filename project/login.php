<?php include('userAccount.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
    <h2>Log In</h2>
    <form action="login.php" method="post">
        <?php include('error.php') ?>
        <div class="form-group">
            <label>Username:<sup>*</sup></label>
            <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
        </div>
        <div class="form-group">            
            <label>Password:<sup>*</sup></label>
            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="login_user">Register</button>
            <input type="reset" onclick="window,location='login.php" class="btn btn-default" value="Reset">

        </div>
        <p>Create an account ! <a href='register.php'>Register</a>.</p>
    </form>
</div>


<?php include('footer.php'); ?>
    
