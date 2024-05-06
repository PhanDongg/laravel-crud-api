<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table5 extends Model
{
    use HasFactory;
    protected $fillable = ['column1', 'column2'];

    public function table6s()
    {
        return $this->belongsToMany(Table6::class);
    }
}
