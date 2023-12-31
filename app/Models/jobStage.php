<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class jobStage extends Model
{
    use HasFactory;
    protected $fillable = ['jobs_id','name','round'];

    public function jobStagess(): BelongsTo
    {
        return $this->belongsTo(job::class,'jobs_id');
    }
}
