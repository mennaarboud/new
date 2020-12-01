<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    protected $fillable = [
        'name','location','description','image','price','type_id'
    ];
    
    protected $primarykey='id';
    
    public $timestamps=true;

    public function type_id()
    {
        return $this->belongsTo('App\Models\Type', 'foreign_key');
    }
}
