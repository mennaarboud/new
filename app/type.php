<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $fillable = [
        'name', 'admin_id'
    ];
    
    protected $primarykey='id';
    
    public $timestamps=true;

    public function admin_id()
    {
        return $this->belongsTo('App\models\User');
    }
}
