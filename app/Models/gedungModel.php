<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gedungModel extends Model
{
    use HasFactory;
    protected $table = 'gedung';
    protected $guarded = ['id'];
}
