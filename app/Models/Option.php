<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $fillable=['option_text','word_id', 'is_correct'];

    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
