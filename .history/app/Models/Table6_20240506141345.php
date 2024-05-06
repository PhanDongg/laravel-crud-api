<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table6 extends Model
{
    use HasFactory;
    protected $fillable = ['column1', 'column2'];

    public function table5s()
    {
        return $this->belongsToMany(Table5::class);
    }
}
