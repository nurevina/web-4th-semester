<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendas extends Model
{
    use HasFactory;
    protected $table = 'agendas';
    protected $guarded = [];
    public function employees(){
        return $this->hasMany('Employees::class');
    }
}
