<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_feedback extends Model
{
    use HasFactory;
    protected $table = 'user_feedback';
    protected $fillable = ['user_feedback','product_id','user_name'];
}
