<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art_Lessons extends Model
{
    use HasFactory;

    public function teacher(){
        return $this->belongsTo(Teachers::class);
    }
}
