<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postings extends Model
{
    use HasFactory;
    protected $fillable = array();
    public function category()
    {
        // set a Relationship between Category and Postings
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        // set a Relationship between User and Postings
        return $this->belongsTo(User::class);
    }
}