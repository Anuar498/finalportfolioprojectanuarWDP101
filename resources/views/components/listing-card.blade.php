@props(['listing'])

  <div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="relative">
      <img
      class="w-full h-48 object-cover"
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.jpg')}}"        
      alt=""
    />
      <div class="absolute top-4 right-4 flex gap-2">
        <span
          class="px-3 py-1 bg-purple-500 text-white rounded-full text-sm font-semibold"
          >{{$listing->checkin}}</span
        >
        <span
          class="px-3 py-1 bg-orange-500 text-white rounded-full text-sm font-semibold"
          >{{$listing->checkout}}</span
        >
      </div>
    </div>
    <div class="p-6">
      <div class="flex justify-between items-start mb-4">
        <h2 class="text-2xl font-bold text-orange-800">{{$listing->room}}</h2>
        <span class="text-2xl font-bold text-green-600">{{$listing->price}}</span>
      </div>
      
      <x-listing-tags :tagsCsv="$listing->tags" />

      <div class="flex items-center">
        <div class="flex items-center mr-4">
          <i class="fas fa-user-alt text-red-600 w-6 text-xl"></i>
          <span class="text-red-700 ml-4 font-medium">{{$listing->fullname}}</span>
        </div>
        <div class="flex items-center mr-4">
          <i class="fas fa-envelope text-red-600 w-6 text-xl"></i>
          <span class="text-red-700 ml-4 font-medium">{{$listing->email}}</span>
        </div>
      </div>
    </div>
    <div class="px-4 pb-4 pt-0 mt-2">
      <a href="/listings/{{$listing->id}}"
          class="block w-full bg-red-600 text-white text-center py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300">
         View Detail
      </a>
</div>
  </div>
  