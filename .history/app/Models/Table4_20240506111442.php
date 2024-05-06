<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table4 extends Model
{
    use HasFactory;
    public function table4s()
    {
        return $this->hasMany(Table4::class);
    }
}
