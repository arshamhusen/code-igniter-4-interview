<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my interview application</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="container">

            <header>
            <!-- Navbar -->
                <div class="navbar navbar-light bg-dark bg-red-100 py-3 d-flex shadow-md">
                    <a  href="<?php  echo base_url ('interview/public/employee/add')?>" class="text-light text-decoration-none">WAMCO HR System</a>
                </div> 
                
                <!-- Nav links -->
                <div class="bg-white shadow-sm">
                    <div class="container mb-5">
                        <nav class="nav nav-underline">
                            <div class="row pr-5">
                                <a class="text-dark text-decoration-none" href="<?php echo base_url ('interview/public/employee/add') ?>">Home</a>
                            </div>
                        </nav>
                    </div>
                </div>

            </header>
            

            <div class="container d-flex justify-content-end my-2">
                <a class="btn btn-success px-2" href="<?php echo base_url ('interview/public/employee/add') ?>">Add an Employee</a>
            </div>

            <!-- Card -->

            <div class="container">
                <div class="card-container">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h6 class="card-header-title text-white">All Employees</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">

                            <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>

                            <?php 
                            if (!empty($employees)) {
                              
                                foreach ($employees as $employee){     

                            ?>
                                <tr>
                                    <td><?php echo $employee['id']?></td>
                                    <td><?php echo $employee['first_name']?></td>
                                    <td><?php echo $employee['last_name']?></td>
                                    <td><?php echo $employee['phone']?></td>
                                    <td><?php echo $employee['email']?></td>
                                    <td><?php echo $employee['designation']?></td>
                                    <td>
                                        <div class="row d-flex justify-content-around">
                                            <a href="<?php echo base_url('interview/public/employee/update/'.$employee['id']) ?>" class="btn btn-primary">edit</a>
                                            <a href="" class="btn btn-danger">delete</a>
                                        </div>
                                    </td>
                                </tr>

                            <?php
                                }
                            }else{ ?>
                            <tr>
                                    <td>No records found</td>
                            </tr>
                            <?php }?>

                            </table>

                  

                            

                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>