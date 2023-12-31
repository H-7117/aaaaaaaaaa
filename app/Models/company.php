<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class company extends Model
{
    use HasFactory;
    protected $fillable = ['name','about_company'];

    public function jobs() : HasMany
    {
        return $this->hasMany(job::class);
    }

    public function company_recruter() : HasMany
    {
        return $this->hasMany(recruiter::class);
    }
}
