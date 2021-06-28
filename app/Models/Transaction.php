<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $primaryKey = 'transactionid';
    public $timestamps = false;
    protected $fillable = ['transaction_date','tryoutid','userid'];

    public function user()
    {
        return $this->belongsTo('App\Models\ListUser', 'userid', 'userid');
    }
    public function tryout()
    {
        return $this->belongsTo('App\Models\ListTryout', 'tryoutid', 'tryoutid');
    }
}
