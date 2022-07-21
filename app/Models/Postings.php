<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postings extends Model
{
    use HasFactory;
    public function category()
    {
        // set a Relationship between Category and Postings
        return $this->belongsTo(Category::class);
    }
}