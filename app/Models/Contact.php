<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'Name',
        'Email',
        'Phone',
        'Message'
    ];
}
