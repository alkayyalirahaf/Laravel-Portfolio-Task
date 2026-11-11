<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Developer extends Model
{




protected $fillable = [
    'name',
    'job-title',
    'skills',
];

protected function casts(): array
{
    return [
        'skills' => 'array',
    ];
}

public function projects() : HasMany
{
    return $this->hasMany(Project::class);
}
}
