@extends('layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
<div class="space-y-8">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-blue-100 p-3 rounded-lg">
                    <i class="fa-solid fa-newspaper text-blue-600"></i>
                </div>
                <span class="text-sm text-gray-500">Total</span>
            </div>
            <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_news'] }}</div>
            <div class="text-sm text-gray-600">Berita Sekolah</div>
            <div class="mt-3 text-xs text-green-600">
                {{ $stats['published_news'] }} Terpublikasi
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-green-100 p-3 rounded-lg">
                    <i class="fa-solid fa-images text-green-600"></i>
                </div>
                <span class="text-sm text-gray-500">Total</span>
            </div>
            <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_galleries'] }}</div>
            <div class="text-sm text-gray-600">Galeri Foto</div>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-orange-100 p-3 rounded-lg">
                    <i class="fa-solid fa-trophy text-orange-600"></i>
                </div>
                <span class="text-sm text-gray-500">Total</span>
            </div>
            <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_achievements'] }}</div>
            <div class="text-sm text-gray-600">Prestasi Siswa</div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="{{ route('admin.news.create') }}" class="flex items-center gap-4 p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all group">
                <div class="bg-blue-100 p-3 rounded-lg group-hover:bg-blue-200">
                    <i class="fa-solid fa-plus text-blue-600"></i>
                </div>
                <div>
                    <div class="font-semibold text-gray-900">Buat Berita</div>
                    <div class="text-sm text-gray-600">Tambahkan berita baru</div>
                </div>
            </a>

            <a href="{{ route('admin.gallery.create') }}" class="flex items-center gap-4 p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-green-500 hover:bg-green-50 transition-all group">
                <div class="bg-green-100 p-3 rounded-lg group-hover:bg-green-200">
                    <i class="fa-solid fa-plus text-green-600"></i>
                </div>
                <div>
                    <div class="font-semibold text-gray-900">Upload Foto</div>
                    <div class="text-sm text-gray-600">Tambahkan foto ke galeri</div>
                </div>
            </a>

            <a href="{{ route('admin.achievement.create') }}" class="flex items-center gap-4 p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-orange-500 hover:bg-orange-50 transition-all group">
                <div class="bg-orange-100 p-3 rounded-lg group-hover:bg-orange-200">
                    <i class="fa-solid fa-plus text-orange-600"></i>
                </div>
                <div>
                    <div class="font-semibold text-gray-900">Tambahkan Prestasi</div>
                    <div class="text-sm text-gray-600">Tambah prestasi siswa</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Recent News -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-900">Berita Terbaru</h3>
            <a href="{{ route('admin.news.index') }}" class="text-sm text-blue-600 hover:underline">Lihat Semua →</a>
        </div>
        @if($recent_news->count() > 0)
            <div class="space-y-4">
                @foreach($recent_news as $news)
                    <div class="flex items-center justify-between py-3 border-b border-gray-100 last:border-0">
                        <div class="flex-1">
                            <h4 class="font-medium text-gray-900">{{ $news->title }}</h4>
                            <div class="flex items-center gap-4 mt-1">
                                <span class="text-xs text-gray-500">{{ $news->category }}</span>
                                <span class="text-xs text-gray-400">{{ $news->created_at->format('M d, Y') }}</span>
                                <span class="text-xs px-2 py-1 rounded {{ $news->is_published ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }}">
                                    {{ $news->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </div>
                        </div>
                        <a href="{{ route('admin.news.edit', $news) }}" class="text-blue-600 hover:text-blue-700 ml-4">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-center py-8">Tidak ada berita.<a href="{{ route('admin.news.create') }}" class="text-blue-600 hover:underline">Create one</a></p>
        @endif
    </div>
    </div>
</div>
@endsection
