<?php

namespace NadzorServera\Skijasi\Theme\CommerceTheme\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'skijasi_forms'; 
    
    protected $fillable = ['name', 'description'];

    public function fields()
    {
        return $this->hasMany(FormField::class);
    }

    
}


