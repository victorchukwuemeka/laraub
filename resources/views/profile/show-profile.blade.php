@extends('layouts.app')

@section('content')
<h1>{{ $user->name }}</h1>
<p>Email: {{ $user->email }}</p>

<a href="{{ route('user.edit', ['userId' => $user->id]) }}"
  class="text-blue-500 hover:underline">Edit Profile</a>
<!-- Display user profile details -->
<h2>Profile</h2>
@if($profile)
<p>Job Title: {{ $profile->get_title }}</p>
<p>Company: {{ $profile->get_company()}}</p>
<p>Company Website: {{ $profile->get_company_website()}}</p>
<p>Your Location: {{ $profile->get_location()}}</p>
<p>Education: {{ $profile->get_education()}}</p>
<p>Availability: {{ $profile->get_availability()}}</p>
<p>Socail Media: {{ $profile->get_contact_preferences()}}</p>



@endif
   @if($project && $project->get_project_name())
   <p> {{ $user->name }}: projects </p>
   {{ $project->get_project_name()}}
   {{ $project->get_description()}}
   {{ $project->get_link()}}
   {{ $project->get_technologies_used()}}
   @else
   <a href="{{ route('projects')}}">
    {{__("projects")}}
   </a>
   @endif
   <div class="">
     @foreach($workExperiences as $experience)
       {{ $experience->get_company()}}
       {{ $experience->get_position()}}
       {{ $experience->get_start_date()}}
       {{ $experience->get_end_date()}}
     @endforeach
    <a href="{{ route('experiences')}}">
     {{__("experiences")}}
    </a>
   </div>

    <div class="">
      @if($skills)
      {{$skills->get_laravel_skills()}}
      {{ $skills->get_other_skills()}}
      @endif
      <a href="{{ route('skills')}}">
       {{__("skills")}}
      </a>
    </div>

     <div class="">
       <a href="{{ route('certificates')}}">
         {{__('certificates')}}
       </a>
     </div>

@endsection
