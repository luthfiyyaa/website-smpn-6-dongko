<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'principal_photo',
        'principal_message',
        'principal_name',
        'principal_title',
        'ppdb_start_date',
        'ppdb_end_date',
        'test_start_date',
        'test_end_date',
        'announcement_date',
        'reregistration_start_date',
        'reregistration_end_date',
        'academic_year_start',
    ];

    protected $casts = [
        'ppdb_start_date' => 'date',
        'ppdb_end_date' => 'date',
        'test_start_date' => 'date',
        'test_end_date' => 'date',
        'announcement_date' => 'date',
        'reregistration_start_date' => 'date',
        'reregistration_end_date' => 'date',
        'academic_year_start' => 'date',
    ];

    /**
     * Helper untuk format tanggal Indonesia
     */
    public function getFormattedPpdbPeriodAttribute()
    {
        if (!$this->ppdb_start_date || !$this->ppdb_end_date) {
            return null;
        }

        return $this->ppdb_start_date->format('d F Y') . ' - ' . 
               $this->ppdb_end_date->format('d F Y');
    }

    /**
     * Helper untuk format tanggal tes
     */
    public function getFormattedTestPeriodAttribute()
    {
        if (!$this->test_start_date || !$this->test_end_date) {
            return null;
        }

        return $this->test_start_date->format('d F Y') . ' - ' . 
               $this->test_end_date->format('d F Y');
    }

    /**
     * Helper untuk cek apakah PPDB masih buka
     */
    public function getIsPpdbOpenAttribute()
    {
        if (!$this->ppdb_start_date || !$this->ppdb_end_date) {
            return false;
        }

        $now = now();
        return $now->between($this->ppdb_start_date, $this->ppdb_end_date);
    }
}