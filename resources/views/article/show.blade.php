@extends('layouts.app')
@section('content')


<div class="container md:container mx-auto  p-8 px-8 md:px-8">

    <h1 class="text-3xl text-center  md:text-6xl sm:text-4xl font-extrabold mb-4 text-gray-900">
        {{ $viewData['title'] }}
    </h1>

      <div class="flex">
        <div class="flex-grow  overflow-hidden mb-6 md:w-full xl:w-full lg:w-full">
            <img src="{{ asset('/img/silicon.png') }}" alt="Article Image"
            class=" h-50 md:max-w-screen-lg w-89 overflow-hidden sm:min-m-2  md:w-full xl:w-full lg:w-full  mx-auto rounded-lg shadow-lg">
        </div>
      </div>


    <div class="font-serif break-all w-4/4">
     <div class="box-content text-left leading-relaxed  whitespace-normal break-normal
     break-words md:break-words
     p-8 h-100 w-70 p-8 px-2 md:px-32 border-1 text-sm sm:text-3xl text-gray-700">
         {!! $viewData['body'] !!}
     </div>
   </div>

</div>

@endsection
