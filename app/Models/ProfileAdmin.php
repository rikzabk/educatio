<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\ProfileAdmin as Authenticatable;

class ProfileAdmin extends Model
{
    use HasFactory;
    // protected $guard = 'admin';
    protected $table = 'admin';
    protected $primaryKey = 'adminid';
    public $timestamps = false;
    protected $fillable = ['admin_name', 'admin_password', 'admin_email', 'admin_phone', 'admin_dob','admin_address'];
}
