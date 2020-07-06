<?php 
include "database.php";

if(isset($_POST['search'])){
	
	$val = $_POST['sval'];
	$q = "SELECT * FROM USERS WHERE name LIKE '%".$val."%'";
	$qe = mysqli_query($con,$q);
}else{
	$qe = mysqli_query($con,"select * from users");
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
        <div class="container-fluid"><a class="navbar-brand" href="index.php">Demo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-left"
                id="navcol-1">
                <ul class="nav navbar-nav text-left ml-auto">
                    <li class="nav-item" role="presentation"><button style="margin-left:50px;" class="btn btn-primary" type="button"><a class="text-white" href="add.php">ADD</a></button></li>
                    <li class="nav-item" role="presentation"> &nbsp;&nbsp;&nbsp; </li>
					<form action="index.php" method="POST">
						<input type="text" class="form-control-sm" placeholder="Search Name" name="sval" />
						<input value="Filter" type="submit" class="form-control-sm" name="search" />
					</form>
				</ul>
            </div>
        </div>
    </nav>
    <div class="table-responsive">
        <table class="table" id="table">
            <thead>
                <tr>
                    <th class="text-center">Sno</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Mobile</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Update</th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
			<?php
			
				while($res = mysqli_fetch_array($qe)){
			?>
			<tbody>
                <tr>
                    <td class="text-center"><?php echo $res['sno']?></td>
                    <td class="text-center"><?php echo $res['name']?></td>
                    <td class="text-center"><?php echo $res['mobile']?></td>
                    <td class="text-center"><?php echo $res['email']?></td>
                    <td class="text-center"><button class="btn btn-primary" type="button"><a class="text-white" href="update.php?id=<?php echo $res['sno'];?>">Update</a></button></td>
                    <td class="text-center"><button class="btn btn-danger" type="button"><a class="text-white" href="delete.php?id=<?php echo $res['sno'];?>">Delete</a></button></td>
				</tr>
            </tbody>
			
			<?php } ?>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>