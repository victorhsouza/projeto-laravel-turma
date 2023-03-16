<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $dates = ['datanasc'];

    protected $fillable = [];

    protected $guarded = [];

    public function osCliente(){
        return $this->hasMany('App\Models\Os');
    }
}
