<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];

    public function cliente(){
        return $this->belongsTo('App\Models\Clientes');
    }
}
