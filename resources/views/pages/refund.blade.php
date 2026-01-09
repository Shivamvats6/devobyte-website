@extends('layouts.app')

@section('title', 'Refund & Cancellation Policy – Devobyte')

@section('content')

<!-- ================= REFUND POLICY BANNER ================= -->
<section class="relative min-h-[280px] flex items-center bg-white">

    <div class="absolute inset-0 bg-white"></div>

    <div class="relative max-w-7xl mx-auto px-9 w-full" data-aos="fade-right">
        <h1 class="text-4xl md:text-5xl font-extrabold text-black mt-20"
            style="font-family:'Montserrat Alternates', sans-serif;">
            Refund & <span class="text-blue-400">Cancellation Policy</span>
        </h1>

        <p class="text-white/80 text-sm font-inter">
            Effective Date: 1 January 2026
        </p>
    </div>
</section>

<!-- ================= REFUND CONTENT ================= -->
<section class="py-20 bg-white">

    <div class="max-w-4xl mx-auto px-6 text-gray-700 font-inter leading-relaxed">

        <p class="mb-8">
            At <strong>Devobyte OPC Private Limited</strong>, we maintain transparency in our refund and cancellation process.
        </p>

        <!-- 1 -->
        <h3 class="text-xl font-bold text-gray-900 mb-2">
            1. No Automatic Refunds
        </h3>
        <p class="mb-6">
            Payments once made are non-refundable, except under specific conditions outlined below.
        </p>

        <!-- 2 -->
        <h3 class="text-xl font-bold text-gray-900 mb-2">
            2. Eligible Refund Cases
        </h3>
        <p class="mb-3">Refunds may be considered only if:</p>
        <ul class="list-disc pl-6 mb-6 space-y-1">
            <li>Service has not started</li>
            <li>Project is canceled by Devobyte</li>
            <li>Duplicate or excess payment is made</li>
        </ul>

        <!-- 3 -->
        <h3 class="text-xl font-bold text-gray-900 mb-2">
            3. Non-Refundable Services
        </h3>
        <p class="mb-3">No refunds will be provided for:</p>
        <ul class="list-disc pl-6 mb-6 space-y-1">
            <li>Work already delivered or in progress</li>
            <li>Monthly retainers or subscriptions once billing cycle begins</li>
            <li>Digital marketing spends, third-party tools, or licenses</li>
            <li>Customized software or development milestones</li>
        </ul>

        <!-- 4 -->
        <h3 class="text-xl font-bold text-gray-900 mb-2">
            4. Cancellation
        </h3>
        <ul class="list-disc pl-6 mb-6 space-y-1">
            <li>Cancellation requests must be submitted in writing to <strong>info@devobyte.com</strong></li>
            <li>Any work completed till cancellation will be billed and deducted</li>
        </ul>

        <!-- 5 -->
        <h3 class="text-xl font-bold text-gray-900 mb-2">
            5. Refund Timeline
        </h3>
        <p class="mb-6">
            If approved, refunds will be processed within <strong>7–14 working days</strong> via the original payment method.
        </p>

        <!-- 6 -->
        <h3 class="text-xl font-bold text-gray-900 mb-2">
            6. Final Decision
        </h3>
        <p class="mb-10">
            All refund decisions rest solely with <strong>Devobyte OPC Private Limited</strong> and shall be final.
        </p>

        <!-- CONTACT -->
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-6">
            <h4 class="text-lg font-bold text-gray-900 mb-2">
                Contact Information
            </h4>
            <p class="mb-2">
                For any questions related to these policies, contact:
            </p>
            <p class="mb-1">📧 <strong>info@devobyte.com</strong></p>
            <p>📍 <strong>A-522, T3, NX One, Noida Extension, Uttar Pradesh, India – 201301</strong></p>
        </div>

    </div>
</section>

@endsection
