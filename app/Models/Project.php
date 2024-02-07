<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function getId()
    {
        return $this->id;
    }

    public function technologies()
    {
        $this->belongsToMany(Technology::class);
    }
}
