<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    use Notifiable;
   
    protected $fillable = [
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'numberGuest',
        'date'=>'required',
        'time'=>'required',
        'message'=>'required',

    ];
}
