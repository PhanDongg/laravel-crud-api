<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table3 extends Model
{
    use HasFactory;
    public function table3()
    {
        return $this->belongsTo(Table3::class);
    }
}
