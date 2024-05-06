<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table1 extends Model
{
    use HasFactory;
    public function table2()
    {
        return $this->hasOne(Table2::class);
    }
}
