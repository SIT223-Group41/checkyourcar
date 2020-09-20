<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Project A</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">HOME</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Register.php">REGISTER</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">LOGIN</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="search_recall.php">SEARCH</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="login-masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Register now!</h1>
                    <hr class="divider my-4" />
                </div>
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
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="register_user">Register</button>
            <input type="reset" onclick="window,location='register.php'" class="btn btn-default" value="Reset">

        </div>
                <div class="col-lg-8 align-self-baseline">
                    <div class="card-body">
                    </div>
                    <div class="btn btn-primary btn-xl js-scroll-trigger">
                        <input type="submit" value="Submit" class="btn float-right login_btn">
                    </div>
                    </form>
                </div>
                
            </div>
        </div>
        </div>
    </header>
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Group Members:</div>
            <div class="small text-center text-muted">VU THANH XUAN NGUYEN</div>
            <div class="small text-center text-muted">QUOC VIET NGU NGUYEN</div>
            <div class="small text-center text-muted">VIET HUY THAI</div>
            <div class="small text-center text-muted">TAN TAI NGUYEN</div>
            <div class="small text-center text-muted">PHUONG THAO NGAN NGUYEN</div>
        </div>
    </footer>
</body>

</html>
