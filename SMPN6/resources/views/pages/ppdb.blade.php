@extends('layouts.app')

@section('title', 'Student Admissions (PPDB) - Harmony Academy')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full mb-6">
            <span class="flex items-center gap-2">
                <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                Admissions 2024/2025
            </span>
        </div>
        <h1 class="text-white mb-6">Student Admissions</h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto">
            Join Harmony Academy and embark on an exceptional educational journey
        </p>
    </div>
</section>

<!-- Success Message -->
@if(session('success'))
    <section class="py-8 bg-green-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white border-2 border-green-500 rounded-2xl p-8 text-center shadow-lg">
                <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="check-circle" class="w-10 h-10 text-green-600"></i>
                </div>
                <h3 class="text-green-900 mb-4">Application Submitted Successfully!</h3>
                <p class="text-green-700 text-lg">
                    {{ session('success') }}
                </p>
            </div>
        </div>
    </section>
@endif

<!-- Admission Steps -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i data-lucide="list-checks" class="w-5 h-5"></i>
                    Application Process
                </span>
            </div>
            <h2 class="mb-6">How to Apply</h2>
            <p class="text-xl text-[var(--color-neutral-700)] max-w-3xl mx-auto">
                Follow these simple steps to complete your application
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="relative">
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-md text-center h-full">
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">
                        1
                    </div>
                    <h3 class="mb-4">Fill Application</h3>
                    <p class="text-[var(--color-neutral-700)]">
                        Complete the online registration form with accurate information
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                    <i data-lucide="chevron-right" class="w-8 h-8 text-[var(--color-primary)]/30"></i>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-8 shadow-md text-center h-full">
                    <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">
                        2
                    </div>
                    <h3 class="mb-4">Submit Documents</h3>
                    <p class="text-[var(--color-neutral-700)]">
                        Upload required documents and academic records
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                    <i data-lucide="chevron-right" class="w-8 h-8 text-[var(--color-primary)]/30"></i>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative">
                <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-8 shadow-md text-center h-full">
                    <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">
                        3
                    </div>
                    <h3 class="mb-4">Assessment</h3>
                    <p class="text-[var(--color-neutral-700)]">
                        Participate in entrance test and interview session
                    </p>
                </div>
                <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                    <i data-lucide="chevron-right" class="w-8 h-8 text-[var(--color-primary)]/30"></i>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="bg-gradient-to-br from-orange-50 to-white rounded-2xl p-8 shadow-md text-center h-full">
                <div class="bg-orange-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">
                    4
                </div>
                <h3 class="mb-4">Enrollment</h3>
                <p class="text-[var(--color-neutral-700)]">
                    Receive acceptance letter and complete enrollment
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Requirements -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i data-lucide="file-text" class="w-5 h-5"></i>
                    Requirements
                </span>
            </div>
            <h2 class="mb-6">Admission Requirements</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Documents Required -->
            <div class="bg-white rounded-2xl p-8 shadow-md">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-blue-100 w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i data-lucide="folder" class="w-7 h-7 text-blue-600"></i>
                    </div>
                    <h3>Required Documents</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Birth certificate (original and photocopy)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Previous school report card (last 2 years)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Family card (KK) photocopy</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Parent ID card photocopy</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Recent passport-size photos (3x4 cm, 4 sheets)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                        <span class="text-[var(--color-neutral-700)]">Health certificate from doctor</span>
                    </li>
                </ul>
            </div>

            <!-- Important Information -->
            <div class="bg-white rounded-2xl p-8 shadow-md">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-green-100 w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i data-lucide="info" class="w-7 h-7 text-green-600"></i>
                    </div>
                    <h3>Important Dates</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Registration Period</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">January 15 - March 31, 2024</div>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Entrance Test</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">April 10-20, 2024</div>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Result Announcement</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">May 1, 2024</div>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Re-registration</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">May 5-15, 2024</div>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <div class="text-[var(--color-neutral-900)] mb-1">Academic Year Starts</div>
                            <div class="text-sm text-[var(--color-neutral-700)]">July 15, 2024</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="py-16 bg-white" id="registration-form">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-block bg-[var(--color-primary)]/10 px-6 py-3 rounded-full mb-6">
                <span class="text-[var(--color-primary)] flex items-center gap-2">
                    <i data-lucide="file-edit" class="w-5 h-5"></i>
                    Online Registration
                </span>
            </div>
            <h2 class="mb-6">Submit Your Application</h2>
            <p class="text-xl text-[var(--color-neutral-700)]">
                Fill out the form below to start your admission process
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl border-2 border-[var(--color-neutral-200)] p-10">
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-lg mb-8">
                    <div class="flex items-center gap-3 mb-2">
                        <i data-lucide="alert-circle" class="w-5 h-5"></i>
                        <span>Please correct the following errors:</span>
                    </div>
                    <ul class="list-disc list-inside space-y-1 ml-8">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('ppdb.submit') }}" class="space-y-8">
                @csrf

                <!-- Student Information -->
                <div>
                    <h3 class="mb-6 pb-3 border-b border-[var(--color-neutral-200)]">Student Information</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="student_name" class="block text-sm mb-2 text-[var(--color-neutral-700)]">
                                Student Full Name <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="student_name" 
                                id="student_name" 
                                value="{{ old('student_name') }}"
                                required
                                class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                                placeholder="Enter student's full name">
                        </div>

                        <div>
                            <label for="birth_date" class="block text-sm mb-2 text-[var(--color-neutral-700)]">
                                Date of Birth <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="date" 
                                name="birth_date" 
                                id="birth_date" 
                                value="{{ old('birth_date') }}"
                                required
                                class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                        </div>

                        <div>
                            <label for="grade_level" class="block text-sm mb-2 text-[var(--color-neutral-700)]">
                                Grade Level Applying For <span class="text-red-500">*</span>
                            </label>
                            <select 
                                name="grade_level" 
                                id="grade_level" 
                                required
                                class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent">
                                <option value="">Select grade level</option>
                                <option value="Grade 1" {{ old('grade_level') == 'Grade 1' ? 'selected' : '' }}>Grade 1</option>
                                <option value="Grade 2" {{ old('grade_level') == 'Grade 2' ? 'selected' : '' }}>Grade 2</option>
                                <option value="Grade 3" {{ old('grade_level') == 'Grade 3' ? 'selected' : '' }}>Grade 3</option>
                                <option value="Grade 4" {{ old('grade_level') == 'Grade 4' ? 'selected' : '' }}>Grade 4</option>
                                <option value="Grade 5" {{ old('grade_level') == 'Grade 5' ? 'selected' : '' }}>Grade 5</option>
                                <option value="Grade 6" {{ old('grade_level') == 'Grade 6' ? 'selected' : '' }}>Grade 6</option>
                                <option value="Grade 7" {{ old('grade_level') == 'Grade 7' ? 'selected' : '' }}>Grade 7</option>
                                <option value="Grade 8" {{ old('grade_level') == 'Grade 8' ? 'selected' : '' }}>Grade 8</option>
                                <option value="Grade 9" {{ old('grade_level') == 'Grade 9' ? 'selected' : '' }}>Grade 9</option>
                                <option value="Grade 10" {{ old('grade_level') == 'Grade 10' ? 'selected' : '' }}>Grade 10</option>
                                <option value="Grade 11" {{ old('grade_level') == 'Grade 11' ? 'selected' : '' }}>Grade 11</option>
                                <option value="Grade 12" {{ old('grade_level') == 'Grade 12' ? 'selected' : '' }}>Grade 12</option>
                            </select>
                        </div>

                        <div>
                            <label for="previous_school" class="block text-sm mb-2 text-[var(--color-neutral-700)]">
                                Previous School
                            </label>
                            <input 
                                type="text" 
                                name="previous_school" 
                                id="previous_school" 
                                value="{{ old('previous_school') }}"
                                class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                                placeholder="Name of previous school">
                        </div>
                    </div>
                </div>

                <!-- Parent/Guardian Information -->
                <div>
                    <h3 class="mb-6 pb-3 border-b border-[var(--color-neutral-200)]">Parent/Guardian Information</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="parent_name" class="block text-sm mb-2 text-[var(--color-neutral-700)]">
                                Parent/Guardian Full Name <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="parent_name" 
                                id="parent_name" 
                                value="{{ old('parent_name') }}"
                                required
                                class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                                placeholder="Enter parent/guardian name">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm mb-2 text-[var(--color-neutral-700)]">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="tel" 
                                name="phone" 
                                id="phone" 
                                value="{{ old('phone') }}"
                                required
                                class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                                placeholder="+62 812 3456 7890">
                        </div>

                        <div class="md:col-span-2">
                            <label for="email" class="block text-sm mb-2 text-[var(--color-neutral-700)]">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                value="{{ old('email') }}"
                                required
                                class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                                placeholder="parent@email.com">
                        </div>

                        <div class="md:col-span-2">
                            <label for="address" class="block text-sm mb-2 text-[var(--color-neutral-700)]">
                                Full Address <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                name="address" 
                                id="address" 
                                rows="3"
                                required
                                class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                                placeholder="Enter complete home address">{{ old('address') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div>
                    <h3 class="mb-6 pb-3 border-b border-[var(--color-neutral-200)]">Additional Information</h3>
                    <div>
                        <label for="message" class="block text-sm mb-2 text-[var(--color-neutral-700)]">
                            Message / Special Notes (Optional)
                        </label>
                        <textarea 
                            name="message" 
                            id="message" 
                            rows="4"
                            class="w-full px-5 py-3 border border-[var(--color-neutral-300)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent"
                            placeholder="Any additional information you'd like to share...">{{ old('message') }}</textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-6 border-t border-[var(--color-neutral-200)]">
                    <button 
                        type="submit"
                        class="w-full bg-[var(--color-primary)] text-white py-5 rounded-xl hover:bg-[var(--color-primary-dark)] transition-colors flex items-center justify-center gap-3">
                        <span class="text-lg">Submit Application</span>
                        <i data-lucide="send" class="w-5 h-5"></i>
                    </button>
                    <p class="text-sm text-[var(--color-neutral-700)] text-center mt-4">
                        By submitting this form, you agree to our terms and conditions
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-[var(--color-neutral-50)]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)] text-white rounded-2xl p-10">
            <div class="text-center mb-8">
                <h2 class="text-white mb-4">Need Help?</h2>
                <p class="text-white/90 text-lg">
                    Our admissions team is here to assist you with any questions
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="phone" class="w-7 h-7"></i>
                    </div>
                    <div class="text-sm text-white/80 mb-2">Phone</div>
                    <div class="text-white">+62 21 1234 5678</div>
                </div>
                <div class="text-center">
                    <div class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="mail" class="w-7 h-7"></i>
                    </div>
                    <div class="text-sm text-white/80 mb-2">Email</div>
                    <div class="text-white">admissions@harmonyacademy.edu</div>
                </div>
                <div class="text-center">
                    <div class="bg-white/20 backdrop-blur-sm w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="clock" class="w-7 h-7"></i>
                    </div>
                    <div class="text-sm text-white/80 mb-2">Office Hours</div>
                    <div class="text-white">Mon-Fri: 8:00 AM - 4:00 PM</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
