<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;
    protected $table = 'balance';
    protected $primaryKey = 'balanceid';
    public $timestamps = false;
    protected $fillable = ['balance', 'userid'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userid', 'userid');
    }
}
