<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AddAdmin as Authenticatable;

class AddAdmin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admin';
    protected $table = 'admin';
    protected $primaryKey = 'adminid';
    public $timestamps = false;
    protected $fillable = ['admin_name', 'admin_password', 'admin_email', 'admin_phone', 'admin_address'];
}

