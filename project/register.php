<?php include('userAccount.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
    <h2>Register</h2>
    <form action="register.php" method="post">
        <?php include('error.php') ?>
        <div class="form-group">
            <label>Username:<sup>*</sup></label>
            <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
        </div>
        <div class="form-group">            
            <label>Password:<sup>*</sup></label>
            <input type="password" name="password_1" class="form-control" value="<?php echo $password_1; ?>">
        </div>
        <div class="form-group">            
            <label>Confirm Password:<sup>*</sup></label>
            <input type="password" name="password_2" class="form-control" >
        </div>
        <div class="form-group">
            <label>Email:<sup>*</sup></label>
            <input type="text" name="email"class="form-control" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label>Full Name:<sup>*</sup></label>
            <input type="text" name="fullname"class="form-control" value="<?php echo $fullname; ?>">
        </div>
        <div class="form-group">
            <label>Address:<sup>*</sup></label>
            <input type="text" name="address"class="form-control" value="<?php echo $address; ?>">
        </div>
        <div class="form-group">
            <label>Phone:<sup>*</sup></label>
            <input type="text" name="phone"class="form-control" value="<?php echo $phone; ?>">
        </div>
        <div class="form-group">
            <label>VIN:<sup>*</sup></label>
            <input type="text" name="VIN"class="form-control" value="<?php echo $VIN; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="register_user">Register</button>
            <input type="reset" onclick="window,location='register.php" class="btn btn-default" value="Reset">

        </div>
        <p>Already have an account? <a href='login.php'>Login here</a>.</p>
    </form>
</div>


<?php include('footer.php'); ?>
 