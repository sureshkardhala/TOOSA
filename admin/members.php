<?php

include('../db.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TOOSA -  Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">TOOSA</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
     <br><br><br>
                
                      <!--      Team Section --->
                        <div class="card mb-4">
                            <div class="card-header" style="text-align:center;">
                                <i class="fas fa-table mr-1"></i>
                                Members
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Password</th>
                                                <th>Designation</th>
                                                <th>Inistitution</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Batch</th>
                                                <th>DOB</th>
                                                <th>Twitter</th>
                                                <th>Linkedin</th>
                                                <th>Facebook</th>
                                                <th>Instagram</th>

                                                <th>Description</th>
                                                <th>CV</th>
                                                
                                                <th>Image</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <?php 
                                       
                                        $result=mysqli_query($db, "SELECT * FROM members  ORDER BY batch DESC ");
                                       
                                        ?>
                                      
                                        <tbody>
                                        <?php
                                             while($row=mysqli_fetch_array($result)){
                                                 $image="uploads/members/".$row['image'];
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <th><?php echo $row['password']; ?></th>
                                                <td><?php echo $row['designation']; ?></td>
                                                <td><?php echo $row['inistitution']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['batch']; ?></td>
                                                <td><?php echo $row['dob']; ?></td>
                                                <td><?php echo $row['twitter']; ?></td>
                                                <td><?php echo $row['linkedin']; ?></td>
                                                <td><?php echo $row['facebook']; ?></td>
                                                <td><?php echo $row['instagram']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><?php echo $row['cv']; ?></td>
                                               
                                                <td><img src="<?php echo $image; ?> " alt=""  height="200px" width="200px"></td>
                                                <th><a href="update.php?id=<?php echo $row['id']; ?>"><i class="fas fa-user-edit"></i></a></td></th>
                                                <td><a href="../student.php?id=<?php echo $row['id']; ?>"><i class="fas fa-eye"></i></a></td>
                                                <td><a href="delete/delete_member.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a></td>
                                            </tr>
                                            <?php
                                             }
                                             ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                
         
                </main>
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>