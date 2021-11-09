<?php

namespace App\Controllers;
use App\Models\EmployeeModel;

class Employee extends BaseController
{
    public function index()
    {
        return view ('employee/index');
    }

    public function add()
    {

        // needs to use session 
        $session = \Config\Services::session();
        helper('form');
        

        $data = [];

        if ($this->request->getMethod() == 'post'){
            $input = $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'required|min_length[7]|max_length[10]',
                'email' => 'required',
                'designation' => 'required' 
            ]);

            if ($input == true ){
                // Save values to the database
                $model = new EmployeeModel();

                // Save the data to the database
                $model->save([
                    'first_name' =>  $this->request->getPost('first_name'),
                    'last_name' =>  $this->request->getPost('last_name'),
                    'phone' =>  $this->request->getPost('phone'),
                    'email' =>  $this->request->getPost('email'),
                    'designation' =>  $this->request->getPost('designation')
                ]);

                // Session to create a message

                $session->setFlashData('success', 'Record Added Successfully');

                return view ('employee/employee_add');

            } else{
                // Show error
                $data['validation'] = $this->validator;
            }
        }

        return view ('employee/employee_add', $data);
    }

    public function update (){
        return view ('employee/employee_update');
    }

    
}