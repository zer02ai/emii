<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    public function parent_category()
    {
        return $this->hasOne(course::class,'id','parent_id');
    }
}
