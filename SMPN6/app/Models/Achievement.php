<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'achievement',
        'level',
        'year',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
        'year' => 'integer',
    ];

    /**
     * Scope untuk hanya menampilkan prestasi aktif
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope untuk mengurutkan berdasarkan order
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('year', 'desc');
    }

    /**
     * Get color and icon based on index
     */
    public function getColorAndIcon($index)
    {
        $styles = [
            [
                'color' => 'yellow',
                'icon' => 'trophy',
                'gradient' => 'from-yellow-50 to-white',
                'border' => 'border-yellow-500',
                'icon_bg' => 'bg-yellow-100',
                'icon_text' => 'text-yellow-600',
                'badge_bg' => 'bg-yellow-600',
            ],
            [
                'color' => 'green',
                'icon' => 'trophy',
                'gradient' => 'from-green-50 to-white',
                'border' => 'border-green-500',
                'icon_bg' => 'bg-green-100',
                'icon_text' => 'text-green-600',
                'badge_bg' => 'bg-green-600',
            ],
            [
                'color' => 'purple',
                'icon' => 'trophy',
                'gradient' => 'from-purple-50 to-white',
                'border' => 'border-purple-500',
                'icon_bg' => 'bg-purple-100',
                'icon_text' => 'text-purple-600',
                'badge_bg' => 'bg-purple-600',
            ],
            [
                'color' => 'red',
                'icon' => 'trophy',
                'gradient' => 'from-red-50 to-white',
                'border' => 'border-red-500',
                'icon_bg' => 'bg-red-100',
                'icon_text' => 'text-red-600',
                'badge_bg' => 'bg-red-600',
            ],
            [
                'color' => 'blue',
                'icon' => 'trophy',
                'gradient' => 'from-blue-50 to-white',
                'border' => 'border-blue-500',
                'icon_bg' => 'bg-blue-100',
                'icon_text' => 'text-blue-600',
                'badge_bg' => 'bg-blue-600',
            ],
        ];

        // Cycle through styles if more than 5 achievements
        return $styles[$index % count($styles)];
    }
}