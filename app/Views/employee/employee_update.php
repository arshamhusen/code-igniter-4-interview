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
                    <a  href="<?php  echo base_url ('interview/public/employee')?>" class="text-light text-decoration-none">WAMCO</a>
                </div> 
                
                <!-- Nav links -->
                <div class="bg-white shadow-sm">
                    <div class="container mb-5">
                        <nav class="nav nav-underline">
                            <div class="row px-3 py-3">
                                <a class="text-dark text-decoration-none" href="<?php echo base_url ('interview/public/employee/add') ?>">Home</a>
                                <span>/<span>
                                <a class="text-dark text-decoration-none" href="<?php echo base_url ('interview/public/employee/add') ?>">Add an Employee</a>
                            </div>
                        </nav>
                    </div>
                </div>

            </header>
            

            <!-- Card -->

            <div class="container">
                <div class="card-container">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h6 class="card-header-title text-white">Update Employee</h6>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">  
                                        <form name="employee_add" id="employee_add" method="post">
                                                <div class="form-group">
                                                    <label>First Name</lable>
                                                    <input type="text"  placeholder="First Name" name="first_name" id="first_namme" class="form-control" value="<?php echo set_value( employee['first_name']) ?>"/>
                                                    
                                                </div>
                                              
                                                <button type="submit" class="btn btn-primary btn-md">Submit</button>       
                                        </form>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>