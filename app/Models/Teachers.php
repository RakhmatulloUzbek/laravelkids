<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;


    public function lessons()
    {
        return $this->hasMany(Art_Lessons::class);
    }
//    public function services(){
//        return $this->hasMany(Service::class);
//    }
//    // One to Many Inverse
//    public function parent(){
//        return $this->belongsTo(Category::class, 'parent_id');
//    }
//
//    // One to Many
//    public function children(){
//        return $this->hasMany(Category::class, 'parent_id');
//    }
}
