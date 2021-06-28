<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tryout extends Model
{
    use HasFactory;
    protected $table = 'tryout';
    protected $primaryKey = 'tryoutid';
    public $timestamps = false;
    protected $fillable = ['tryout_name', 'tryout_desc', 'tryout_price', 'adminid'];
}
