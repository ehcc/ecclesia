<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

class Member extends Model
{
    //
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    private $rules = [
        'firstName' => 'required|string',
        'lastName' => 'required|string',
        'email' => 'required|string',
        'address' => 'required|string',
        'birthday' => 'required|date',
        'maritalStatus' => 'required|string',
        'dateJoined' => 'required|date',
        'mobileNumber' => 'required|string'
    ];

    public function validate(array $members)
    {
        return Validator::make($members, $this->rules);
    }
}
