<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class recruiter extends Model
{
    use HasFactory;
    protected $fillable = ['companies_id','name','role'];
    public function recruiter_companies(): BelongsTo
    {
        return $this->belongsTo(company::class,'companies_id');
    }
}
