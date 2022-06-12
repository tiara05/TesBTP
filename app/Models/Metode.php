<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Metode extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'metodes';
    
    protected $fillable = [
        'nama_metode',
        'id',
    ];

    protected $hidden = [];
}
