<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DressImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['dress_id'];

    public function dress(){
        return $this->belongsTo(Dress::class);
    }
}
