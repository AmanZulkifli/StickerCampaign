<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Driver Login</title>
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
    
    <!-- Right Side - Login Form -->
    <div class="w-1/2 flex items-center justify-center bg-white relative">
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

      <div class="w-3/4 max-w-md mt-20 p-8 rounded-xl border">
        <h2 class="text-5xl font-semibold text-[#00B14F] mb-2">Welcome back</h2>
        <p class="mb-6 text-gray-500">Please login to your account.</p>

        <!-- Login Form -->
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="mb-4">
            <label class="block text-md font-medium text-gray-700">Email</label>
            <input name="email" type="email" class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]" required>
          </div>

          <div class="mb-4">
            <label class="block text-md font-medium text-gray-700">Password</label>
            <input name="password" type="password" class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00B14F]" required>
          </div>

          <div class="flex justify-end text-md mb-6">
            <a href="#" class="text-[#00B14F] hover:underline">Forgot password?</a>
          </div>

          <button type="submit" class="w-full bg-[#00B14F] text-white py-2 rounded-md hover:bg-emerald-700 transition duration-200">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
