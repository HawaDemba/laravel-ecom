<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //recuperer la categorie parent d'une categories
    public function parent(){
    
    $this->belongsTo(Category::class, 'parent_id');
    }
   public function categories(){
        $this->hasMany(Category::class, 'parent_id');
    }
}
