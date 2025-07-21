<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'texto'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
