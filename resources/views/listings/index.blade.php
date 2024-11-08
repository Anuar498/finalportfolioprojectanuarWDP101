<x-layout>
   
  @include('partials._hero')
    
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-12">
          @include('partials._search')
        </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    
    @unless(count($listings) == 0) 
    
    @foreach ($listings as $listing)
    
    <x-listing-card :listing="$listing" />
    

    @endforeach
    
    @else
        <p>No Room Reservations Found</p>
    @endunless
    </div>
    
  </div>

    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
    
 </x-layout>