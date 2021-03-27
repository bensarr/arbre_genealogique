<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable=array(
        'parent_id',
        'order',
        'nom'
    );
    public static $rules=array(
        'parent_id'=>'bigInteger',
        'order'=>'required',
        'nom'=>'required'
    );
    public function parent()
    {
        return $this->belongsTo(Personne::class,'parent_id');
    }
}
