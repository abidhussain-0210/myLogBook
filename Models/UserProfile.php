<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'userprofile';
    //protected $guarded = [];
    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'address', 'state', 'country', 'language' , 'image'];
}
