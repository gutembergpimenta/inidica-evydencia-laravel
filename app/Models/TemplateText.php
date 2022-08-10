<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TemplateText extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'text',
        'status'
    ];
}
