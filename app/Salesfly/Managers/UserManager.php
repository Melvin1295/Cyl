<?php

namespace Salesfly\Salesfly\Managers;
class UserManager extends BaseManager {

    public function getRules()
    {
        $rules = ['name'=> 'required',
    'email'=> 'required','password'=> '','role_id'=> 'required','estado'=> 'required','image'=> 'required','nuevo'=>''];
        return $rules;
    }
} 
