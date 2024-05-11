<?php

class RouteModel extends Model
{
    public $errors= [];
    protected $table = 'routes';
    protected $allowedColumns = [
        'toStation',
        'fromStation',
        'startDate',
        'stopDate',
        'disabled',
       
    ];

    public function validate($data)
    {
        $this->errors = [];

        if(empty(trim($data['phone'])))
        {
            $this->errors['phone']='Please enter your phone number';
        }
        if(empty(trim($data['email'])))
        {
            $this->errors['email']='Please enter your email';
        }
        elseif(!filter_var(trim($data['email']), FILTER_VALIDATE_EMAIL) )
        {
              $this->errors['email'] = "Please, enter valid email!";
        }
        if(empty(trim($data['address'])))
        {
            $this->errors['address'] = "Please, enter your address";
        }
          if(empty(trim($data['regNo'])))
        {
            $this->errors['regNo'] = "Please, enter your registration number";
        }

        if(empty($this->errors))
        {
            return true;
        }
        return false;
    }
}