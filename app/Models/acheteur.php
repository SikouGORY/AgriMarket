<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class acheteur extends Model
{
    protected $table='acheteurs';
    protected $primaryKey='id';
    public $incrementing=false;
    protected $fillable=[
        'emplacement_boutique',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
