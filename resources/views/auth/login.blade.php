@extends('layouts.app')

@section('content')
<body class="bg-gray-100 h-screen flex items-center justify-center">
  <div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center lg:text-left">
        <h1 class="text-5xl font-bold">Welcome  back!</h1>
        <p class="py-6">Please log in to access your account. If you encounter any issues,
          feel free to contact our support team. Remember to keep your account credentials safe and secure.</p>

      </div>
      <!--<div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <form action="{{ url('authenticate') }}" method="POST" class="card-body">
           @csrf
          <div class="form-control">
           <label class="label">
             <span class="label-text">Email</span>
           </label>
           <input type="email" name="email" placeholder="email" id="email"
           class="input input-bordered @error('email') @enderror"
             value="{{ old('email') }}" required />
             @error('email')
             <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
             @enderror

         </div>

         <div class="form-control">
           <label class="label">
             <span class="label-text">Password</span>
           </label>
           <input type="password" id="password" name="password" placeholder="password"
           class="input @error('password') input-bordered @enderror" required />

           @error('password')
           <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
           @enderror

         </div>
         <div class="form-control mt-6">
           <button type="submit"  class="btn btn-primary">Login</button>
         </div>
       </form>
     </div>
   </div>
 </div>-->
</body>
@endsection
