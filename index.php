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
                <li><a href="index.php">Home</a></li>
                <li><a href="views/createUser.php">Create User</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="title">
                        Users
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <a href="views/createUser.php" class="btn btn-primary pull-right">Create User</a><br><br>
                    </div>

                    <table class="table table-responsive">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Identification</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                        <?php
                            require_once ("Conexion.php");
                            require_once( "./models/user.php" );

                            $user = new User();
                            $users = $user->lists();

                            if($users > 0){
                                for($i=0;$i<sizeof($users);$i++)
                                {
                                    echo "<tr>";
                                    echo "<td>".$users[$i]["id"]."</td>";
                                    echo "<td>".$users[$i]["name"]."</td>";
                                    echo "<td>".$users[$i]["last_name"]."</td>";
                                    echo "<td>".$users[$i]["identification"]."</td>";
                                    echo "<td>".$users[$i]["address"]."</td>";
                                    echo "<td>".$users[$i]["phone"]."</td>";
                                    echo '<td>
                                            <a href="./views/showUser.php?id='.$users[$i]['id'].'" class="btn btn-default">Show</a>
                                            <a href="./views/editUser.php?id='.$users[$i]['id'].'" class="btn btn-warning">Edit</a>
                                         </td>';
                                    echo "</tr>";
                                }
                            }else{
                                echo "Not Users";
                            }
                        ?>
                        <tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>