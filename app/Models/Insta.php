<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insta extends Model
{
    use HasFactory;
    protected $table = 'insta_users';
    protected $fillable = ['fullname', 'email_address', 'contact_number', 'address'];
}
