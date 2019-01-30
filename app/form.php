<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    //
    protected $table = 'books';
   protected $fillable=['Book_name', 'Author', 'categories'];
}
