<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agriculteur extends Model
{
    protected $table='agriculteurs';
    protected $primaryKey='id';
    public $incrementing=false;
    protected $fillable=[
        'zone_cultivée',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
