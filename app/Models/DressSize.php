<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DressSize extends Model
{
    use HasFactory;
    public $table = 'dress_size';
    public $timestamps = false;

    protected $fillable = ['dress_id', 'size_id', 'active'];
}
