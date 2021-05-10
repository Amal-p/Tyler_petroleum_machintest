<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userlanguage extends Model
{
    use HasFactory;
    protected $primaryKey = 'u_id';
    protected $fillable = ['user_id','	l_id '];
}
