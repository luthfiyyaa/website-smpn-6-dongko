@extends('layouts.admin')

@section('title', 'Registration Detail')

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4">
        <a href="{{ route('admin.registrations.index') }}" 
           class="text-[var(--color-neutral-700)] hover:text-[var(--color-primary)] transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
        </a>
        <h1>Registration Details</h1>
    </div>
    <p class="text-[var(--color-neutral-700)]">View and manage application details</p>
</div>

@if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-lg mb-6 flex items-center gap-3">
        <i data-lucide="check-circle" class="w-5 h-5"></i>
        <span>{{ session('success') }}</span>
    </div>
@endif

<div class="grid lg:grid-cols-3 gap-6">
    <!-- Main Information -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Student Information -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="flex items-center gap-3">
                    <div class="bg-blue-100 p-2 rounded-lg">
                        <i data-lucide="user" class="w-5 h-5 text-blue-600"></i>
                    </div>
                    Student Information
                </h2>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm text-[var(--color-neutral-700)] mb-1">Full Name</label>
                    <p class="text-[var(--color-neutral-900)]">{{ $registration->student_name }}</p>
                </div>
                <div>
                    <label class="block text-sm text-[var(--color-neutral-700)] mb-1">Date of Birth</label>
                    <p class="text-[var(--color-neutral-900)]">{{ $registration->birth_date }}</p>
                </div>
                <div>
                    <label class="block text-sm text-[var(--color-neutral-700)] mb-1">Grade Level</label>
                    <p class="text-[var(--color-neutral-900)]">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 text-blue-700">
                            {{ $registration->grade_level }}
                        </span>
                    </p>
                </div>
                @if($registration->previous_school)
                    <div>
                        <label class="block text-sm text-[var(--color-neutral-700)] mb-1">Previous School</label>
                        <p class="text-[var(--color-neutral-900)]">{{ $registration->previous_school }}</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Parent/Guardian Information -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-green-100 p-2 rounded-lg">
                    <i data-lucide="users" class="w-5 h-5 text-green-600"></i>
                </div>
                <h2>Parent/Guardian Information</h2>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
                <div class="sm:col-span-2">
                    <label class="block text-sm text-[var(--color-neutral-700)] mb-1">Full Name</label>
                    <p class="text-[var(--color-neutral-900)]">{{ $registration->parent_name }}</p>
                </div>
                <div>
                    <label class="block text-sm text-[var(--color-neutral-700)] mb-1">Phone Number</label>
                    <p class="text-[var(--color-neutral-900)]">
                        <a href="tel:{{ $registration->phone }}" class="text-blue-600 hover:underline">
                            {{ $registration->phone }}
                        </a>
                    </p>
                </div>
                <div>
                    <label class="block text-sm text-[var(--color-neutral-700)] mb-1">Email Address</label>
                    <p class="text-[var(--color-neutral-900)]">
                        <a href="mailto:{{ $registration->email }}" class="text-blue-600 hover:underline">
                            {{ $registration->email }}
                        </a>
                    </p>
                </div>
                <div class="sm:col-span-2">
                    <label class="block text-sm text-[var(--color-neutral-700)] mb-1">Address</label>
                    <p class="text-[var(--color-neutral-900)]">{{ $registration->address }}</p>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        @if($registration->message)
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-purple-100 p-2 rounded-lg">
                        <i data-lucide="message-square" class="w-5 h-5 text-purple-600"></i>
                    </div>
                    <h2>Additional Message</h2>
                </div>
                <p class="text-[var(--color-neutral-900)] leading-relaxed">{{ $registration->message }}</p>
            </div>
        @endif

        <!-- Admin Notes -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center gap-3 mb-4">
                <div class="bg-orange-100 p-2 rounded-lg">
                    <i data-lucide="file-text" class="w-5 h-5 text-orange-600"></i>
                </div>
                <h2>Admin Notes</h2>
            </div>
            
            <form method="POST" action="{{ route('admin.registrations.update', $registration->id) }}">
                @csrf
                @method('PUT')
                
                <textarea 
                    name="admin_notes" 
                    rows="4"
                    class="w-full px-4 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent mb-4"
                    placeholder="Add internal notes about this application...">{{ old('admin_notes', $registration->admin_notes) }}</textarea>
                
                <input type="hidden" name="status" value="{{ $registration->status }}">
                
                <button 
                    type="submit"
                    class="bg-[var(--color-primary)] text-white px-6 py-2 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                    Save Notes
                </button>
            </form>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Status -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="mb-4">Application Status</h3>
            
            <form method="POST" action="{{ route('admin.registrations.update', $registration->id) }}">
                @csrf
                @method('PUT')
                
                <div class="space-y-4">
                    <label class="flex items-start gap-3 cursor-pointer p-3 rounded-lg hover:bg-[var(--color-neutral-50)] transition-colors">
                        <input 
                            type="radio" 
                            name="status" 
                            value="pending"
                            {{ $registration->status == 'pending' ? 'checked' : '' }}
                            class="mt-1 w-4 h-4 text-yellow-600">
                        <div>
                            <div class="text-[var(--color-neutral-900)] flex items-center gap-2">
                                <i data-lucide="clock" class="w-4 h-4 text-yellow-600"></i>
                                Pending
                            </div>
                            <p class="text-sm text-[var(--color-neutral-700)]">Awaiting review</p>
                        </div>
                    </label>

                    <label class="flex items-start gap-3 cursor-pointer p-3 rounded-lg hover:bg-[var(--color-neutral-50)] transition-colors">
                        <input 
                            type="radio" 
                            name="status" 
                            value="reviewed"
                            {{ $registration->status == 'reviewed' ? 'checked' : '' }}
                            class="mt-1 w-4 h-4 text-blue-600">
                        <div>
                            <div class="text-[var(--color-neutral-900)] flex items-center gap-2">
                                <i data-lucide="eye" class="w-4 h-4 text-blue-600"></i>
                                Reviewed
                            </div>
                            <p class="text-sm text-[var(--color-neutral-700)]">Under consideration</p>
                        </div>
                    </label>

                    <label class="flex items-start gap-3 cursor-pointer p-3 rounded-lg hover:bg-[var(--color-neutral-50)] transition-colors">
                        <input 
                            type="radio" 
                            name="status" 
                            value="accepted"
                            {{ $registration->status == 'accepted' ? 'checked' : '' }}
                            class="mt-1 w-4 h-4 text-green-600">
                        <div>
                            <div class="text-[var(--color-neutral-900)] flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-4 h-4 text-green-600"></i>
                                Accepted
                            </div>
                            <p class="text-sm text-[var(--color-neutral-700)]">Application approved</p>
                        </div>
                    </label>

                    <label class="flex items-start gap-3 cursor-pointer p-3 rounded-lg hover:bg-[var(--color-neutral-50)] transition-colors">
                        <input 
                            type="radio" 
                            name="status" 
                            value="rejected"
                            {{ $registration->status == 'rejected' ? 'checked' : '' }}
                            class="mt-1 w-4 h-4 text-red-600">
                        <div>
                            <div class="text-[var(--color-neutral-900)] flex items-center gap-2">
                                <i data-lucide="x-circle" class="w-4 h-4 text-red-600"></i>
                                Rejected
                            </div>
                            <p class="text-sm text-[var(--color-neutral-700)]">Application declined</p>
                        </div>
                    </label>
                </div>

                <input type="hidden" name="admin_notes" value="{{ $registration->admin_notes }}">

                <button 
                    type="submit"
                    class="w-full mt-6 bg-[var(--color-primary)] text-white py-3 rounded-lg hover:bg-[var(--color-primary-dark)] transition-colors">
                    Update Status
                </button>
            </form>
        </div>

        <!-- Meta Information -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="mb-4">Information</h3>
            <div class="space-y-3 text-sm">
                <div class="flex justify-between">
                    <span class="text-[var(--color-neutral-700)]">Submitted:</span>
                    <span class="text-[var(--color-neutral-900)]">{{ $registration->created_at->format('M d, Y') }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-[var(--color-neutral-700)]">Time:</span>
                    <span class="text-[var(--color-neutral-900)]">{{ $registration->created_at->format('H:i A') }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-[var(--color-neutral-700)]">Updated:</span>
                    <span class="text-[var(--color-neutral-900)]">{{ $registration->updated_at->format('M d, Y') }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-[var(--color-neutral-700)]">ID:</span>
                    <span class="text-[var(--color-neutral-900)]">#{{ str_pad($registration->id, 6, '0', STR_PAD_LEFT) }}</span>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="mb-4">Quick Actions</h3>
            <div class="space-y-3">
                <a href="tel:{{ $registration->phone }}" 
                   class="w-full bg-blue-100 text-blue-700 py-3 rounded-lg hover:bg-blue-200 transition-colors flex items-center justify-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i>
                    <span>Call Parent</span>
                </a>
                <a href="mailto:{{ $registration->email }}" 
                   class="w-full bg-green-100 text-green-700 py-3 rounded-lg hover:bg-green-200 transition-colors flex items-center justify-center gap-2">
                    <i data-lucide="mail" class="w-5 h-5"></i>
                    <span>Send Email</span>
                </a>
                <form method="POST" 
                      action="{{ route('admin.registrations.destroy', $registration->id) }}" 
                      onsubmit="return confirm('Are you sure you want to delete this registration? This action cannot be undone.');">
                    @csrf
                    @method('DELETE')
                    <button 
                        type="submit"
                        class="w-full bg-red-100 text-red-700 py-3 rounded-lg hover:bg-red-200 transition-colors flex items-center justify-center gap-2">
                        <i data-lucide="trash-2" class="w-5 h-5"></i>
                        <span>Delete Registration</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Back Button -->
        <a href="{{ route('admin.registrations.index') }}" 
           class="block w-full bg-[var(--color-neutral-200)] text-[var(--color-neutral-700)] py-3 rounded-lg hover:bg-[var(--color-neutral-300)] transition-colors text-center">
            Back to All Registrations
        </a>
    </div>
</div>
@endsection
