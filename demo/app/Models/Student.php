<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**  table => جمع
     *   model => مفرد
     */
//  protected $table="studntsData";  // if table name with another Name
/** protected $primaryKey="studentId" */
protected $fillable=['name','grade','image','address','email','gender'];
}
