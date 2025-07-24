<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Full Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password_confirmation" placeholder="Confirm Password">
    <input type="text" name="phone_number" placeholder="Phone Number">
    <input type="text" name="grab_driver_id" placeholder="Grab Driver ID">
    <input type="text" name="car_make_model" placeholder="Car Make and Model">
    <input type="number" name="production_year" placeholder="Production Year">
    <input type="text" name="license_plate_number" placeholder="License Plate Number">
    <input type="text" name="car_color" placeholder="Car Color">
    <input type="checkbox" name="agreed_to_terms" value="1"> I agree to the terms and conditions
    <input type="hidden" name="role" value="driver">
    <button type="submit">Register</button>
</form>
