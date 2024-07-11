<?php

namespace NadzorServera\Skijasi\Theme\CommerceTheme\Models;

use Illuminate\Database\Eloquent\Model;

class FormEntry extends Model
{
    protected $table = 'skijasi_form_entries'; 

    protected $fillable = ['form_id', 'data'];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}