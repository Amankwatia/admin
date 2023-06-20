{{-- <x-layout>

@include('partials._carousel')

@unless (count($admissions) == 0)
   @foreach ($admissions as $admission)
       <x-index-card :admission="$admission" />
   @endforeach
    
   @else
   <p>No Student found</p>
@endunless
</x-layout> --}}


<x-layout>

@include('partials._carousel')

<div class="container">
    <div class="row justify-content-center p-3 mx-5">
        @unless (count($posts) == 0)
        @foreach ($posts as $post)
            <x-index-card :post="$post" />
        @endforeach
    
        @else
            <p class="text-center text-danger">No Student record found</p>
        @endunless
</div>
</div>

</x-layout>
