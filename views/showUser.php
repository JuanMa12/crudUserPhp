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
                       User
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <?php
                        require_once ("../Conexion.php");
                        require_once( "../models/user.php" );

                        $user = new User();
                        $result = $user->show($_GET['id']);

                        if( $result == 1 ){
                        ?>
                            <tr><th>Id</th><td><?php echo $_SESSION['id'] ?></td></tr>
                            <tr><th>Name</th><td><?php echo $_SESSION['name'] ?></td></tr>
                            <tr><th>Last Name</th><td><?php echo $_SESSION['last_name'] ?></td></tr>
                            <tr><th>Identification</th><td><?php echo $_SESSION['identification'] ?></td></tr>
                            <tr><th>Address</th><td><?php echo $_SESSION['address'] ?></td></tr>
                            <tr><th>Phone</th><td><?php echo $_SESSION['phone'] ?></td></tr>
                            <tr>
                                <td colspan="2">
                                    <br><a href="../controllers/delete.php?id=<?php echo $_SESSION['id'] ?>" class="btn btn-danger">Delete</a>
                                    <a href="../index.php" class="btn btn-default">List Users</a><br>
                                </td>
                            </tr>
                        <?php
                        }else{
                            echo "<h2>Not user</h2>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>