<!DOCTYPE html>
<html>
   <head>
      <title>User Registration</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/css/style.css') }}">
   </head>
   <style>
    .notifaction-green {
   color: green;
   }
   .notification-red {
   color: red;
   }
</style>
   <body>
   <div class ="container">
      <div class="header">
         <h2>Create User Registration </h2>
      </div>
      <form method="POST" action="{{ route('register') }}">
      @if (Session::has('success')) 
   <div class="notifaction-green">
      <p>{{ Session::get('success') }}</p>
   </div>
   @endif 
   @if (Session::has('unsuccess')) 
   <div class="notifaction-red">
      <p> {{ Session::get('unsuccess') }}</p>
   </div>
   @endif
         @csrf
         <div class="input-group">
            <label>Name</label>
            <div class="col-md-6">
               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
               @error('name')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
         </div>
         <div class="input-group">
            <label>Email Address</label>
            <div class="col-md-6">
               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
               @error('email')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
         </div>
         <div class="input-group">
            <label>Address</label>
            <div class="col-md-6">
               <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
               @error('address')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
         </div>
         <div class="input-group">
            <label>Mobile</label>
            <div class="col-md-6">
               <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
               @error('mobile')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
         </div>
         <div class="input-group">
            <label>Password</label>
            <div class="col-md-6">
               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
               @error('password')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
         </div>
         <div class="input-group">
            <label>Confirm password</label>
            <div class="col-md-6">
               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
         </div>
         <div class="input-group register-button">
            <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
            </button>
         </div>
         <p>
            Already a member? <a href="{{ route('login') }}">Sign in</a>
         </p>
      </form>
	  </div>
<script>
    // Get the mobile input field
    var mobileInput = document.getElementById("mobile");
    // Listen for input event on mobile input field
    mobileInput.addEventListener("input", function(event) {
        // Remove any non-digit characters from the input value
        var cleanedValue = event.target.value.replace(/\D/g, '');
        // Limit the input to 10 characters
        cleanedValue = cleanedValue.substring(0, 10);
        // Update the input value with cleaned value
        event.target.value = cleanedValue;
	});
</script>
   </body>
</html>