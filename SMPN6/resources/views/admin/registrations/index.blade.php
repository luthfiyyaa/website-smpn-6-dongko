@extends('layouts.admin')

@section('title', 'Manage Registrations')

@section('content')
<div class="mb-8">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="mb-2">Student Registrations</h1>
            <p class="text-[var(--color-neutral-700)]">View and manage student admission applications</p>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-lg mb-6 flex items-center gap-3">
        <i data-lucide="check-circle" class="w-5 h-5"></i>
        <span>{{ session('success') }}</span>
    </div>
@endif

@if(session('error'))
    <div class="bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-lg mb-6 flex items-center gap-3">
        <i data-lucide="alert-circle" class="w-5 h-5"></i>
        <span>{{ session('error') }}</span>
    </div>
@endif

<!-- Statistics Cards -->
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-yellow-100 p-3 rounded-lg">
                <i data-lucide="clock" class="w-6 h-6 text-yellow-600"></i>
            </div>
            <span class="text-3xl text-yellow-600">{{ $stats['pending'] }}</span>
        </div>
        <h3 class="text-[var(--color-neutral-700)]">Pending</h3>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-blue-100 p-3 rounded-lg">
                <i data-lucide="eye" class="w-6 h-6 text-blue-600"></i>
            </div>
            <span class="text-3xl text-blue-600">{{ $stats['reviewed'] }}</span>
        </div>
        <h3 class="text-[var(--color-neutral-700)]">Reviewed</h3>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-green-100 p-3 rounded-lg">
                <i data-lucide="check-circle" class="w-6 h-6 text-green-600"></i>
            </div>
            <span class="text-3xl text-green-600">{{ $stats['accepted'] }}</span>
        </div>
        <h3 class="text-[var(--color-neutral-700)]">Accepted</h3>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-red-100 p-3 rounded-lg">
                <i data-lucide="x-circle" class="w-6 h-6 text-red-600"></i>
            </div>
            <span class="text-3xl text-red-600">{{ $stats['rejected'] }}</span>
        </div>
        <h3 class="text-[var(--color-neutral-700)]">Rejected</h3>
    </div>
</div>

<!-- Filters -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <form method="GET" action="{{ route('admin.registrations.index') }}" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div>
            <label class="block text-sm mb-2 text-[var(--color-neutral-700)]">Search</label>
            <input 
                type="text" 
                name="search" 
                value="{{ request('search') }}"
                placeholder="Search by name..."
                class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
        </div>
        <div>
            <label class="block text-sm mb-2 text-[var(--color-neutral-700)]">Status</label>
            <select 
                name="status"
                class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                <option value="">All Status</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="reviewed" {{ request('status') == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                <option value="accepted" {{ request('status') == 'accepted' ? 'selected' : '' }}>Accepted</option>
                <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>
        <div>
            <label class="block text-sm mb-2 text-[var(--color-neutral-700)]">Grade Level</label>
            <select 
                name="grade_level"
                class="w-full px-4 py-2 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)]">
                <option value="">All Grades</option>
                @for($i = 1; $i <= 12; $i++)
                    <option value="Grade {{ $i }}" {{ request('grade_level') == "Grade $i" ? 'selected' : '' }}>Grade {{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="flex items-end gap-2">
            <button 
                type="submit"
                class="flex-1 bg-[var(--color-primary)] text-white px-6 py-2 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                Filter
            </button>
            <a 
                href="{{ route('admin.registrations.index') }}"
                class="bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] px-4 py-2 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors">
                Reset
            </a>
        </div>
    </form>
</div>

<!-- Registrations Table -->
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    @if($registrations->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-[var(--color-neutral-50)] border-b border-[var(--color-neutral-200)]">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Student Name</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Parent Name</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Grade Level</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Contact</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Status</th>
                        <th class="px-6 py-4 text-left text-sm text-[var(--color-neutral-700)]">Date</th>
                        <th class="px-6 py-4 text-center text-sm text-[var(--color-neutral-700)]">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[var(--color-neutral-200)]">
                    @foreach($registrations as $registration)
                        <tr class="hover:bg-[var(--color-neutral-50)] transition-colors">
                            <td class="px-6 py-4">
                                <div>
                                    <div class="text-[var(--color-neutral-900)]">{{ $registration->student_name }}</div>
                                    <div class="text-sm text-[var(--color-neutral-700)]">{{ $registration->birth_date }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-[var(--color-neutral-900)]">
                                {{ $registration->parent_name }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 text-blue-700">
                                    {{ $registration->grade_level }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm">
                                    <div class="text-[var(--color-neutral-900)]">{{ $registration->phone }}</div>
                                    <div class="text-[var(--color-neutral-700)]">{{ $registration->email }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if($registration->status == 'pending')
                                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-sm bg-yellow-100 text-yellow-700">
                                        <i data-lucide="clock" class="w-3 h-3"></i>
                                        Pending
                                    </span>
                                @elseif($registration->status == 'reviewed')
                                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-sm bg-blue-100 text-blue-700">
                                        <i data-lucide="eye" class="w-3 h-3"></i>
                                        Reviewed
                                    </span>
                                @elseif($registration->status == 'accepted')
                                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-sm bg-green-100 text-green-700">
                                        <i data-lucide="check-circle" class="w-3 h-3"></i>
                                        Accepted
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-sm bg-red-100 text-red-700">
                                        <i data-lucide="x-circle" class="w-3 h-3"></i>
                                        Rejected
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-[var(--color-neutral-700)]">
                                {{ $registration->created_at->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.registrations.show', $registration->id) }}" 
                                       class="text-blue-600 hover:text-blue-700 p-2 hover:bg-blue-50 rounded-lg transition-colors"
                                       title="View Details">
                                        <i data-lucide="eye" class="w-4 h-4"></i>
                                    </a>
                                    <form method="POST" 
                                          action="{{ route('admin.registrations.destroy', $registration->id) }}" 
                                          class="inline"
                                          onsubmit="return confirm('Are you sure you want to delete this registration?');">
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                            type="submit"
                                            class="text-red-600 hover:text-red-700 p-2 hover:bg-red-50 rounded-lg transition-colors"
                                            title="Delete">
                                            <i data-lucide="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-[var(--color-neutral-200)]">
            {{ $registrations->links('pagination::tailwind') }}
        </div>
    @else
        <!-- Empty State -->
        <div class="text-center py-16">
            <div class="bg-[var(--color-neutral-100)] w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="inbox" class="w-10 h-10 text-[var(--color-neutral-400)]"></i>
            </div>
            <h3 class="mb-2 text-[var(--color-neutral-900)]">No Registrations Found</h3>
            <p class="text-[var(--color-neutral-700)]">
                {{ request()->has('search') || request()->has('status') || request()->has('grade_level') 
                   ? 'Try adjusting your filters' 
                   : 'Applications will appear here when students register' }}
            </p>
        </div>
    @endif
</div>
@endsection
