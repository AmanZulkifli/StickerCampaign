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
  <div class="flex h-full">

    <!-- Left Side - Image -->
    <div class="w-3/4 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/grabcar.png') }}'); background-position: 55% center;">
    </div>

    <!-- Right Side - Register Form -->
    <div class="w-1/2 flex items-center justify-center bg-white relative overflow-y-auto">
      <!-- Top Tabs -->
      <div class="absolute top-8 left-1/2 transform -translate-x-1/2 flex gap-6">
        <a href="{{ route('login') }}"
           class="{{ request()->routeIs('login') ? 'active-tab' : 'text-gray-500 hover:text-[#00B14F]' }} text-lg font-medium transition duration-200">
          Login
        </a>
        <a href="{{ route('register') }}"
           class="{{ request()->routeIs('register') ? 'active-tab' : 'text-gray-500 hover:text-[#00B14F]' }} text-lg font-medium transition duration-200">
          Sign up
        </a>
      </div>

      <!-- Form -->
      <div class="w-11/12 max-w-3xl mt-24 mb-10 p-8 bg-white rounded-xl border">
        <h2 class="text-3xl font-bold text-[#00B14F] mb-6">Register for Sticker Campaign</h2>

        <form action="{{ route('register') }}" method="POST">
          @csrf
          <input type="hidden" name="role" value="driver" />

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Personal Details -->
            <div>
              <label class="block text-sm font-semibold mb-1">Full Name</label>
              <input type="text" name="name" placeholder="Enter your full name"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]" required>
            </div>

            <div>
              <label class="block text-sm font-semibold mb-1">Phone Number</label>
              <input type="text" name="phone_number" placeholder="Enter your phone number"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]">
            </div>

            <div>
              <label class="block text-sm font-semibold mb-1">Email</label>
              <input type="email" name="email" placeholder="Enter your email"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]" required>
            </div>

            <div>
              <label class="block text-sm font-semibold mb-1">Grab Driver ID <span class="text-gray-400">(Optional)</span></label>
              <input type="text" name="grab_driver_id" placeholder="Enter your Grab Driver ID"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]">
            </div>

            <!-- Vehicle Details -->
            <div class="col-span-2 mt-4">
              <h3 class="text-xl font-semibold mb-2">Vehicle Details</h3>
            </div>

            <div>
              <label class="block text-sm font-semibold mb-1">Car Make and Model</label>
              <input type="text" name="car_make_model" placeholder="e.g., Toyota Camry"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]">
            </div>

            <div>
              <label class="block text-sm font-semibold mb-1">Production Year</label>
              <input type="number" name="production_year" placeholder="e.g., 2022"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]">
            </div>

            <div>
              <label class="block text-sm font-semibold mb-1">License Plate Number</label>
              <input type="text" name="license_plate_number" placeholder="e.g., ABC 1234"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]">
            </div>

            <div>
              <label class="block text-sm font-semibold mb-1">Car Color</label>
              <input type="text" name="car_color" placeholder="e.g., Silver"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]">
            </div>

            <!-- Passwords -->
            <div>
              <label class="block text-sm font-semibold mb-1">Password</label>
              <input type="password" name="password" placeholder="Password"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]" required>
            </div>

            <div>
              <label class="block text-sm font-semibold mb-1">Confirm Password</label>
              <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="w-full p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]" required>
            </div>

          </div>

          <!-- Agreement -->
          <div class="mt-4">
            <label class="flex items-center gap-2 text-sm text-gray-600">
              <input type="checkbox" name="agreed_to_terms" value="1" class="text-[#00B14F]">
              I agree to the <a href="#" class="text-[#00B14F] underline">terms and conditions</a> of the sticker campaign
            </label>
          </div>

          <!-- Submit Button -->
          <div class="mt-6">
            <button type="submit"
              class="w-full bg-[#00B14F] text-white py-3 text-lg font-semibold rounded-md hover:bg-emerald-700 transition duration-200">
              Register Now
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</body>
</html>
