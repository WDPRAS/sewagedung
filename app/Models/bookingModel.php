<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingModel extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $guarded = ['id'];

    public function bookingModel()
    {
        return $this->belongsTo(bookingModel::class, 'id_gedung');
    }
}
