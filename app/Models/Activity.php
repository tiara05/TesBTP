<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'activities';
    protected $fillable = [
        'id_metode',
        'nama_event',
        'tanggal_pelaksanaan',
        'batas_pelaksanaan',
    ];
    
    public function metode(){
        return $this->belongsTo('App\Models\Metode','id');
    }
}
