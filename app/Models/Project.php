<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'github_url', 'thumbnail', 'description'];


    public function getThumbUrlAttribute()
    {
        return asset('storage/project_images/' . $this->thumbnail);
    }
}
