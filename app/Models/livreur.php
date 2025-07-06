<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class livreur extends Model
{
    protected $table='livreurs';
    protected $primaryKey='id';
    public $incrementing=false;
    protected $fillable=[
        'moyen_transport',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
