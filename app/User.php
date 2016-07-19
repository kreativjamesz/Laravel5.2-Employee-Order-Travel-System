<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'admin_users';
    protected $fillable = ['last_name','first_name','title_name','email','password','profile-pic','contact_num','status','address', ];
    protected $hidden = [ 'password', 'remember_token', ];
}
