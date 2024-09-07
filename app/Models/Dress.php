<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','price','active'];

    public function sizes(){
        return $this->belongsToMany(Size::class)->withPivot(['id','active']);
    }

    public function images(){
        return $this->hasMany(DressImage::class);
    }
}
