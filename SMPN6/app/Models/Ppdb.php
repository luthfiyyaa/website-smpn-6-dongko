<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'parent_name',
        'email',
        'phone',
        'birth_date',
        'address',
        'grade_level',
        'previous_school',
        'message',
        'status',
        'admin_notes'
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
