<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

//    protected $fillable = ['address_ru', 'address_uz' , 'phone', 'mobile', 'email', 'facebook', 'linkedin', 'instagram'];
}
