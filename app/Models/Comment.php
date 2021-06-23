<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function article() {
        return $this->belongsTo('App\Models\Article');
    }
}