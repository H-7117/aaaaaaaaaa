<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentts extends Model
{
    use HasFactory;
    protected $fillable = ['recruiters_id','candittts_id','comment'];
}
