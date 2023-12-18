<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // this is a trait
    protected $guarded = []; // this is a property
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
