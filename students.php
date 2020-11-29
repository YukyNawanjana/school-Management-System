<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>


    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <!-- As a heading -->
            <nav class="navbar navbar-dark nav-bg-ligt ">
                <span class="navbar-brand mb-0 h1"><i class="fas fa-graduation-cap mx-2"></i>Admin panel</span>
            </nav>
            <div class="profile-clearfix navbar-dark ">
                <div class="profile-pic">
                    <img src="./assets/images/user.png" class="img-fluid profile-img" alt="">
                </div>
                <div class="profile-info">
                    <span>welcome,</span>
                    <h6>Yuky Nawanjana</h6>
                </div>
            </div>

            <div class="nav-links">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="home.php"><i class="fas fa-home mr-3"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-chalkboard-teacher mr-3"></i>Teachers</a>
                    </li>
                    <li class="nav-item active-link">
                        <a class="nav-link " href="#"><i class="fas fa-user-graduate mr-3"></i>Students</a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
                
            <nav class="navbar navbar-light bg-light">
                <div class="content-header text-center">
                    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle ">
                        <i class="icon fa fa-times "></i>
                    </a>
                    <span class="navbar-brand mb-0 h1 text-center mx-auto text-uppercase">school management system</span>
                </div>
            </nav>


            <div class="container-fluid">
                <div class="row my-3">
                    <div class="col-lg-8 col-md-8 col-6">
                       <h1>Students</h1>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6  d-flex align-items-center justify-content-end">
                        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#exampleModal">
                            Add Student
                        </button>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-12 mx-auto">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
    <!-- end of modal -->
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="./app.js"></script>
</body>
</html>