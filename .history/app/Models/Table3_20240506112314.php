<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table3 extends Model
{
    use HasFactory;
    protected $fillable = ['column1', 'column2'];

    public function table4s()
    {
        return $this->hasMany(Table4::class);
    }
}
