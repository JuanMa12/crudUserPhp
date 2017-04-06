<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CRUD</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="createUser.php">Create User</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="title">
                        Edit User
                    </div>
                </div>
                <div class="panel-body">
                    <?php
                        require_once ("../Conexion.php");
                        require_once( "../models/user.php" );

                        $user = new User();
                        $result = $user->show($_GET['id']);

                        if( $result == 1 ){
                    ?>
                    <form action="../controllers/update.php" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>" class="form-control" required>
                            <input type="text" name="name" value="<?php echo $_SESSION['name'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" value="<?php echo $_SESSION['last_name'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Identification</label>
                            <input type="number" name="identification" value="<?php echo $_SESSION['identification'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" value="<?php echo $_SESSION['address'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" name="phone" value="<?php echo $_SESSION['phone'] ?>" class="form-control" required>
                        </div>
                        <br><input type="submit" class="btn btn-primary" value="Edit">
                        <a href="../index.php" class="btn btn-default pull-right">List Users</a>
                    </form>
                    <?php
                        }else{
                            echo "<h2>Not user</h2>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>