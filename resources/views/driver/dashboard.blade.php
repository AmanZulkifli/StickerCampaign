<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Driver Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .active-tab {
      color: #00B14F;
      border-bottom: 2px solid #00B14F;
    }
  </style>
</head>
<body class="h-screen bg-white">
@if(session('registered'))
  <div id="success-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
    <div class="bg-white rounded-2xl shadow-xl w-[90%] max-w-2xl p-10 relative">
      
      <!-- Success Icon -->
      <div class="flex justify-center mb-6">
        <div class="bg-[#E3F9E5] rounded-full p-4">
          <svg class="w-8 h-8 text-[#00B14F]" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
      </div>

      <!-- Title -->
      <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-2">
        Registration Successful!
      </h2>

      <!-- Message -->
      <p class="text-center text-gray-500 text-sm md:text-base mb-6">
        Thank you, <span class="font-medium">{{ Auth::user()->name }}</span>, for registering for the Grab X TCID Sticker Campaign. Your application has been successfully submitted.
      </p>

      <hr class="my-6">

      <!-- Submitted Info -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-10 text-sm text-gray-700 px-4">
        <div>
          <p class="text-gray-400">Name</p>
          <p class="font-semibold">{{ Auth::user()->name }}</p>
        </div>
        <div>
          <p class="text-gray-400">Email</p>
          <p class="font-semibold">{{ Auth::user()->email }}</p>
        </div>
        <div>
          <p class="text-gray-400">Phone Number</p>
          <p class="font-semibold">{{ Auth::user()->phone_number }}</p>
        </div>
        <div>
          <p class="text-gray-400">Vehicle Make</p>
          <p class="font-semibold">{{ Auth::user()->car_make_model }}</p>
        </div>
        <div>
          <p class="text-gray-400">Vehicle Year</p>
          <p class="font-semibold">{{ Auth::user()->production_year }}</p>
        </div>
        <div>
          <p class="text-gray-400">License Plate</p>
          <p class="font-semibold">{{ Auth::user()->license_plate_number }}</p>
        </div>
      </div>

      <!-- Button -->
      <div class="flex justify-center mt-10">
        <button type="button" id="close-modal-btn"
           class="px-6 py-2 bg-[#00B14F] text-white rounded-md hover:bg-green-700 transition">
          Close
        </button>
      </div>
    </div>
  </div>

  <!-- Close Modal Script -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      document.getElementById('close-modal-btn')?.addEventListener('click', () => {
        document.getElementById('success-modal').style.display = 'none';
      });
    });
  </script>
@endif



<h1>Welcome, {{ auth()->user()->name }}</h1>
<p>This is the Driver Dashboard.</p>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
</body>
</html>

