
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
    <h2>Search</h2>
    <form action="home.php" method="post">
        <div class="form-group">            
            <input type="text" name="input" class="form-control">
            <button type="submit" class="btn btn-primary" name="search"><i class="fa fa-search"></i></button>

        </div>

        
    </form>
    
</div>
<?php include('functions.php') ?>

<?php include('footer.php'); ?>