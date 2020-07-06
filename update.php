<?php
include "database.php";
if(isset($_POST['submit'])){
	
	$id = $_GET['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	mysqli_query($con, "update users set name = '$name', mobile = '$mobile', email = '$email' where sno = $id");
	sleep(1);
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="#">Demo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-left"
                id="navcol-1">
                <ul class="nav navbar-nav text-left ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="add.html">Create</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Nav Item</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <form method="POST">
        <!-- Start: Simple Contact Form With Shadow - Ambrodu -->
        <div class="container">
            <div class="form-row">
                <div class="col">
                    <div class="shadow" style="width: 100%;min-height: 630px;margin-top: 119px;background-color: rgba(255,255,255,0.79);">
                        <form style="padding-top: 70px;" method="post">
                            <div class="form-group">
                                <h1 class="text-center">Update User</h1>
                            </div>
                            <div class="form-group"><input class="form-control form-control-lg" type="text" style="width: 50%;margin-left: 25%;" required="" placeholder="Name" name="name"></div>
                            <div class="form-group"><input class="form-control form-control-lg" type="email" style="width: 50%;margin-left: 25%;" placeholder="Email" name="email"></div>
                            <div class="form-group"><input class="form-control form-control-lg" type="text" style="width: 50%;margin-left: 25%;" placeholder="Mobile" name="mobile"></div>
                            <div class="form-group"><button class="btn btn-dark btn-lg" style="width: 50%;margin-left: 25%;" type="submit" name="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Simple Contact Form With Shadow - Ambrodu -->
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>