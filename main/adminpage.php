<?php
require_once "classes/session.php";
require_once "classes/toast.php";
$session = new sessionHelper();
$toast = new toast();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/toast.js"></script>
</head>
<body>
<?php 

include 'includes/header.php'; 

if(!$session->isloggedin()){
?>
    <div class="card mx-auto" style="width: 70%;">
        <div class="card-body">
        <form method="POST" action="includes/user-login.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="" name="exampleInputEmail1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="exampleInputPassword1" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" id="toastTrig" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
<?php 
} else 
{
    print_r($_SESSION);
    ?><a href="includes/logout.php">Logout</a><?
}
$toast->createToast();
?>

<?php 

include 'includes/footer.php'; ?> 
</body>
</html>