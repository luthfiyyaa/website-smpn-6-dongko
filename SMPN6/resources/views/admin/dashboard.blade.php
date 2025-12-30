@extends('layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
<div class="space-y-8">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-blue-100 p-3 rounded-lg">
                    <i data-lucide="newspaper" class="w-6 h-6 text-blue-600"></i>
                </div>
                <span class="text-sm text-gray-500">Total</span>
            </div>
            <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_news'] }}</div>
            <div class="text-sm text-gray-600">News Articles</div>
            <div class="mt-3 text-xs text-green-600">
                {{ $stats['published_news'] }} Published
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-green-100 p-3 rounded-lg">
                    <i data-lucide="images" class="w-6 h-6 text-green-600"></i>
                </div>
                <span class="text-sm text-gray-500">Total</span>
            </div>
            <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_galleries'] }}</div>
            <div class="text-sm text-gray-600">Gallery Images</div>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-yellow-100 p-3 rounded-lg">
                    <i data-lucide="clock" class="w-6 h-6 text-yellow-600"></i>
                </div>
                <span class="text-sm text-gray-500">Pending</span>
            </div>
            {{-- <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['pending_registrations'] }}</div> --}}
            <div class="text-sm text-gray-600">Applications</div>
            <a href="{{ route('admin.registrations.index', ['status' => 'pending']) }}" class="mt-3 text-xs text-blue-600 hover:underline">
                Review Now →
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-purple-100 p-3 rounded-lg">
                    <i data-lucide="users" class="w-6 h-6 text-purple-600"></i>
                </div>
                <span class="text-sm text-gray-500">Total</span>
            </div>
            {{-- <div class="text-3xl font-bold text-gray-900 mb-1">{{ $stats['total_registrations'] }}</div> --}}
            <div class="text-sm text-gray-600">Registrations</div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="{{ route('admin.news.create') }}" class="flex items-center gap-4 p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all group">
                <div class="bg-blue-100 p-3 rounded-lg group-hover:bg-blue-200">
                    <i data-lucide="plus" class="w-6 h-6 text-blue-600"></i>
                </div>
                <div>
                    <div class="font-semibold text-gray-900">Create News</div>
                    <div class="text-sm text-gray-600">Add new article</div>
                </div>
            </a>

            <a href="{{ route('admin.gallery.create') }}" class="flex items-center gap-4 p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-green-500 hover:bg-green-50 transition-all group">
                <div class="bg-green-100 p-3 rounded-lg group-hover:bg-green-200">
                    <i data-lucide="image-plus" class="w-6 h-6 text-green-600"></i>
                </div>
                <div>
                    <div class="font-semibold text-gray-900">Upload Photo</div>
                    <div class="text-sm text-gray-600">Add to gallery</div>
                </div>
            </a>

            <a href="{{ route('admin.registrations.index') }}" class="flex items-center gap-4 p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-purple-500 hover:bg-purple-50 transition-all group">
                <div class="bg-purple-100 p-3 rounded-lg group-hover:bg-purple-200">
                    <i data-lucide="inbox" class="w-6 h-6 text-purple-600"></i>
                </div>
                <div>
                    <div class="font-semibold text-gray-900">View Applications</div>
                    <div class="text-sm text-gray-600">Manage registrations</div>
                </div>
            </a>
        </div>
    </div>

    <!-- Recent News -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-900">Recent News</h3>
            <a href="{{ route('admin.news.index') }}" class="text-sm text-blue-600 hover:underline">View All →</a>
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
                            <i data-lucide="edit" class="w-4 h-4"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-center py-8">No news articles yet. <a href="{{ route('admin.news.create') }}" class="text-blue-600 hover:underline">Create one</a></p>
        @endif
    </div>

    <!-- Recent Registrations -->
    {{-- <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-900">Recent Registrations</h3>
            <a href="{{ route('admin.registrations.index') }}" class="text-sm text-blue-600 hover:underline">View All →</a>
        </div>
        @if($recent_registrations->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-200">
                            <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Student Name</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Grade</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Date</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Status</th>
                            <th class="text-right py-3 px-4 text-sm font-semibold text-gray-700">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recent_registrations as $registration)
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-3 px-4 text-sm">{{ $registration->student_name }}</td>
                                <td class="py-3 px-4 text-sm">{{ $registration->grade_level }}</td>
                                <td class="py-3 px-4 text-sm text-gray-600">{{ $registration->created_at->format('M d, Y') }}</td>
                                <td class="py-3 px-4">
                                    <span class="text-xs px-3 py-1 rounded-full 
                                        {{ $registration->status === 'pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
                                        {{ $registration->status === 'reviewed' ? 'bg-blue-100 text-blue-700' : '' }}
                                        {{ $registration->status === 'accepted' ? 'bg-green-100 text-green-700' : '' }}
                                        {{ $registration->status === 'rejected' ? 'bg-red-100 text-red-700' : '' }}">
                                        {{ ucfirst($registration->status) }}
                                    </span>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <a href="{{ route('admin.registrations.show', $registration) }}" class="text-blue-600 hover:text-blue-700">
                                        View →
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-500 text-center py-8">No registrations yet.</p>
        @endif --}}
    </div>
</div>
@endsection
