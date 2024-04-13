<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

	    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id', 'title', 'isbn', 'pub_year', 'available'
    ];

	   /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'author_id' => 'integer',
        'pub_year' => 'integer',
        'available' => 'integer',
    ];
}
