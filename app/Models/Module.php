<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->belongsTo('App\Models\teacher');
    }

    public function students()
    {
        return $this->belongsTo('App\Models\Student');
    }
    
}