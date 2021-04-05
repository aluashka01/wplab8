<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Image extends Model
{
   protected $table='image';
   protected $fillable = ['name','surname','email','image'];

}
