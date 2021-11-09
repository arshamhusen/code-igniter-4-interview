<?php
namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model {
    
    protected $table = 'employees';
    protected $allowedFields = ['first_name', 'last_name', 'phone', 'email', 'designation' ];
}
?>