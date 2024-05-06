<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table4 extends Model
{
    use HasFactory;
    protected $fillable = ['table3_id', 'column1', 'column2'];

    public function table3()
    {
        return $this->belongsTo(Table3::class);
    }
}
