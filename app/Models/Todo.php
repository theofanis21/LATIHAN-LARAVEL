<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Tambahkan baris di bawah ini:
    protected $table = 'todos'; 
    protected $fillable = ['title', 'description', 'is_completed', 'completed_at'];
    public $timestamps = false; 
}