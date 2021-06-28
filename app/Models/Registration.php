<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Registration as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Fortify\TwoFactorAuthenticatable;
// use Laravel\Jetstream\HasProfilePhoto;
// use Laravel\Sanctum\HasApiTokens;

class Registration extends Authenticatable
{

  use HasFactory;

  protected $table = 'user';
  protected $primaryKey = 'userid';
  public $timestamps = false;
  protected $fillable = ['user_name', 'user_password', 'user_email', 'user_phone'];

  public function getAuthPassword()
  {
    return $this->user_password;
  }
}

