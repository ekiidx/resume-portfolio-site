<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->belongsToMany(Project::class)->orderBy('year', 'desc')->orderBy('id', 'desc');
    }
}
