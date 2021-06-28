<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListAdmin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'adminid';
    public $timestamps = false;
    protected $fillable = ['admin_name', 'admin_password', 'admin_email', 'admin_phone', 'admin_dob', 'admin_address'];

    public function tryouts()
    {
        return $this->hasMany('App\Models\ListTryout');
    }
}
