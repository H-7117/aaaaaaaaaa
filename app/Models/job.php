<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class job extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','description','job_state',
        'companies_id','job_positions_id',
        'job_categories_id'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class,'companies_id');
    }

    public function company_positon(): BelongsTo
    {
        return $this->belongsTo(jobPosition::class,'job_positions_id');
    }

    public function company_category(): BelongsTo
    {
        return $this->belongsTo(jobCategory::class,'job_categories_id');
    }


    public function jobs() : HasMany
    {
        return $this->hasMany(jobStage::class);
    }
}
