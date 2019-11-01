<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Funcionario;

class Posto extends Model
{
    protected $table = 'Posto';
    // protected $attributes = [
    //     'delayed' => false,
    // ];
    public function funcionario()
    {
        return $this->belongsToMany(Funcionario::class, 'posto_id');
    }
}
