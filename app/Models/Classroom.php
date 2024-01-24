<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable=[
        'class',
        'name',
        'jobTitle',
        'age',
        'time',
        'capacity',
        'cost',
        'image',
        'teacher_id',
        'published',
        ];
    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
}
