<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListUser extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'userid';
    public $timestamps = false;
    protected $fillable = ['user_name', 'user_password', 'user_email', 'user_phone', 'user_address'];
}
