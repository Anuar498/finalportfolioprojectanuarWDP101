
<x-layout>
  
  <div class="relative min-h-[50vh] bg-gray-900">
    
    <div 
      class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-40"
      style="background-image: url({{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.jpg')}})"
    ></div>
    
    
    <div class="relative container mx-auto px-4 py-20">
      <div class="text-center">
        <h1 class="text-5xl font-bold text-white mb-4">
          {{$listing->room}}
        </h1>
        <p class="text-xl text-gray-200 max-w-2xl mx-auto">
          Experience comfort and elegance in every stay
        </p>
      </div>
    </div>
  </div>

  
  <div class="container mx-auto px-4 -mt-16 relative z-10">
  
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      
      <div class="lg:col-span-7">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden backdrop-blur-lg bg-white/90">
          
          <div class="relative h-96">
            <img
              class="w-full h-full object-cover"
              src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.jpg')}}"
              alt="Room Image"
            />
            
            <div class="absolute top-4 right-4 flex gap-2">
              <span class="px-4 py-2 bg-purple-500/90 backdrop-blur-sm text-white rounded-full text-sm font-semibold shadow-lg">
                Check-In Date: {{$listing->checkin}}
              </span>
              <span class="px-4 py-2 bg-orange-500/90 backdrop-blur-sm text-white rounded-full text-sm font-semibold shadow-lg">
                Check-Out Date: {{$listing->checkout}}
              </span>
            </div>
          </div>

          
          <div class="p-8">
            <div class="flex justify-between items-start mb-6">
              <h2 class="text-3xl font-bold text-orange-800">
                {{$listing->room}}
              </h2>
              <span class="text-3xl font-bold text-green-600">
                {{$listing->price}}
              </span>
            </div>

            
            <div class="mb-8">
              <x-listing-tags :tagsCsv="$listing->tags" />
            </div>

            <div class="grid grid-cols-2 gap-6 mb-8">
              <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                <label class="block text-purple-700 mb-2">ADULTS:</label>
                <i class="fas fa-male text-red-600 w-6 text-xl"></i>
                <span class="text-red-700 font-medium">{{$listing->accommodations}}</span>
              </div>
              <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                <label class="block text-purple-700 mb-2">CHILDREN:</label>
                <i class="fas fa-child text-red-600 w-6 text-xl"></i>
                <span class="text-red-700 font-medium">{{$listing->members}}</span>
              </div>
              <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                <i class="fas fa-phone text-red-600 w-6 text-xl"></i>
              <span class="text-red-700 ml-4 font-medium">{{$listing->phonenumber}}</span>
              </div>
              <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                <i class="fas fa-map-marker-alt text-red-600 w-6 text-xl"></i>
              <span class="text-red-700 ml-4 font-medium">{{$listing->location}}</span>
              </div>
              <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                <i class="fas fa-user-alt text-red-600 w-6 text-xl"></i>
              <span class="text-red-700 ml-4 font-medium">{{$listing->fullname}}</span>
              </div>
              <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                <i class="fas fa-envelope text-red-600 w-6 text-xl"></i>
              <span class="text-red-700 ml-4 font-medium">{{$listing->email}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="lg:col-span-5">
        <div class="bg-white rounded-xl shadow-2xl p-8 backdrop-blur-lg bg-white/90">
          <h2 class="text-2xl font-bold text-gray-800 mb-6">Our Location</h2>
          
          <div class="rounded-xl overflow-hidden mb-8 shadow-lg">
            <iframe
              class="w-full h-[400px]"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.9351445324545!2d-122.42337704879235!3d37.7749292797599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809cbb1f5d91%3A0xa0e9f2825e4c2ae4!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1634899011970!5m2!1sen!2sus"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>

          <div class="space-y-3">
            <div class="flex items-center p-4 bg-gray-50 rounded-lg">
              <i class="fas fa-user-alt text-red-600 w-6 text-xl"></i>
              <span class="text-red-700 ml-4 font-medium">{{$listing->name}}</span>
            </div>
            <div class="flex items-center p-4 bg-gray-50 rounded-lg">
              <i class="fas fa-map-marker-alt text-red-600 w-6 text-xl"></i>
              <span class="text-red-700 ml-4 font-medium">{{$listing->address}}</span>
            </div>
            <div class="flex items-center p-4 bg-gray-50 rounded-lg">
              <i class="fas fa-phone text-red-600 w-6 text-xl"></i>
              <span class="text-red-700 ml-4 font-medium">{{$listing->contactnumber}}</span>
            </div>
            <div class="flex items-center p-4 bg-gray-50 rounded-lg">
              <i class="fas fa-envelope text-red-600 w-6 text-xl"></i>
              <span class="text-red-700 ml-4 font-medium">{{$listing->youremail}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-16">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="bg-white rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 overflow-hidden group">
          <div class="relative">

            <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-600 opacity-90"></div>
            <div class="relative p-8">
              <div class="flex items-center space-x-4 mb-6">
                <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-white">Location</h3>
              </div>
              <div class="space-y-4">
                <p class="text-white/90 break-words text-lg">{{$listing->address}}</p>
                <div class="pt-2">
                  <span class="inline-block bg-white/20 backdrop-blur-sm text-white text-sm px-4 py-2 rounded-full font-medium">
                    Visit Us
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="bg-white rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 overflow-hidden group">
          <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-500 to-orange-600 opacity-90"></div>
            <div class="relative p-8">
              <div class="flex items-center space-x-4 mb-6">
                <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-phone text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-white">Phone</h3>
              </div>
              <div class="space-y-4">
                <p class="text-white/90 break-words text-lg">{{$listing->contactnumber}}</p>
                <div class="pt-2">
                  <span class="inline-block bg-white/20 backdrop-blur-sm text-white text-sm px-4 py-2 rounded-full font-medium">
                    24/7 Support
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 overflow-hidden group">
          <div class="relative">
            <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 opacity-90"></div>
            <div class="relative p-8">
              <div class="flex items-center space-x-4 mb-6">
                <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-envelope text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-white">Email</h3>
              </div>
              <div class="space-y-4">
                <p class="text-white/90 break-words text-lg">{{$listing->youremail}}</p>
                <div class="pt-2">
                  <span class="inline-block bg-white/20 backdrop-blur-sm text-white text-sm px-4 py-2 rounded-full font-medium">
                    Quick Response
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>