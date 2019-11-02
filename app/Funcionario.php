<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Posto;

class Funcionario extends Model
{
    protected $table = 'Funcionario';

    protected $attributes = [
        'delayed' => false,
    ];

    public function posto()
    {
        return $this->belongsToMany(Posto::class);
    }
}
