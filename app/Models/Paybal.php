<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paybal extends Model
{
    use HasFactory;
    protected $table = 'paybals';
    protected $guarded = [];
}
