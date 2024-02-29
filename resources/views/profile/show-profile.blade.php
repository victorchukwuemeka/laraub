<!-- resources/views/user/profile.blade.php -->

<!-- Display user profile details -->
<h1>{{ $user->name }}</h1>
<p>Email: {{ $user->email }}</p>


<!-- Display user profile details -->
<h2>Profile</h2>
@if($profile)
<p>Job Title: {{ $profile }}</p>
<p>Company: {{ $profile }}</p>
@endif
 <a href="{{ route('user.edit', ['userId' => $user->id]) }}"
   class="text-blue-500 hover:underline">Edit Profile</a>
@if($certificates)
<!-- Display user certificates -->
<h2>Certificates</h2>
<p>Laravel Certifications: {{ $certificates}}</p>
<p>Other Certifications: {{ $certificates}}</p>
@endif
<!-- Add sections for displaying user projects, work experiences, and skills... -->
