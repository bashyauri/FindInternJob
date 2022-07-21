<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function postings()
    {
        // set a relationship between Category and Postings
        return $this->hasMany(Postings::class);
    }
}