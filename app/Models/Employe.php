<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeFactory> */
    use HasFactory;

    public function jobs(){
        return $this->hasMany(JobListing::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
