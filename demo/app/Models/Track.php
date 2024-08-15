<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    // protected $table="myTracks";

    protected $fillable=['name','about','logo'];

    function students()
    {
        return $this->hasMany(Student::class);
    }

}
