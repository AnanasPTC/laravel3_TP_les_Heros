<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'heros';
    protected $fillable = ['name', 'gender', 'race', 'description', 'skill_id'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
