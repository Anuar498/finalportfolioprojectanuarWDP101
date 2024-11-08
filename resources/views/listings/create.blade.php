<x-layout>
<section id="booking" class="relative py-20">
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-black/50"></div> 
    <img 
        src="/images/snow.png" 
        alt="Luxury Hotel Background" 
        class="w-full h-full object-cover"
    />
</div>
    <div class="container relative z-10 mx-auto px-6">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-5xl font-bold text-center text-white mb-8">
          Book Your Dream Stay
      </h2>
      <p class="text-center text-gray-200 mb-12 text-lg">
          Experience luxury and comfort in our premium accommodations
      </p>
        <form method="POST" action="/listings" class="bg-white rounded-lg shadow-lg p-8" enctype="multipart/form-data">
            @csrf
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
            <label class="block text-gray-700 mb-2">Room Type</label>
            <input type="radio" id="room" name="room" value="familyroom01">
            <label for="room">FamilyRoom01</label><br>
            <input type="radio" id="room" name="room" value="familyroom02">
            <label for="room">FamilyRoom02</label><br>
            <input type="radio" id="room" name="room" value="familyroom03">
            <label for="room">FamilyRoom03</label><br>
            <input type="radio" id="room" name="room" value="deluxeroom01">
            <label for="room">DeluxeRoom01</label><br>
            <input type="radio" id="room" name="room" value="deluxeroom02">
            <label for="room">DeluxeRoom02</label><br>
            <input type="radio" id="room" name="room" value="deluxeroom03">
            <label for="room">DeluxeRoom03</label><br>
            <input type="radio" id="room" name="room" value="suitesroom01">
            <label for="room">SuitesRoom01</label><br>
            <input type="radio" id="room" name="room" value="suitesroom02">
            <label for="room">SuitesRoom02</label><br>
            <input type="radio" id="room" name="room" value="suitesroom03">
            <label for="room">SuitesRoom03</label>
              @error('room')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Check-in Date</label>
              <input
                type="date"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
                name="checkin"
                id="checkin"
                value="{{old('checkin')}}"
              />
              @error('checkin')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Check-out Date</label>
              <input
                type="date"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
                name="checkout"
                id="checkout"
                value="{{old('checkout')}}"
              />
              @error('checkout')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Price</label>
              <input
                type="text"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
                name="price"
                id="price"
                 value="{{old('price')}}"
              />
              @error('price')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Example Type: Spa & Wellness, Fine Dining, Concierge Services</label>
              <label class="block text-gray-700 mb-2">Example Type: Spa & Wellness, Fine Dining</label>
              <label class="block text-gray-700 mb-2">Example Type: Spa & Wellness</label>
              <input
                type="text"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
                name="tags"
                id="tags"
                placeholder="See and Click Services Page"
                value="{{old('tags')}}"
              />
              @error('tags')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Adults</label>
              <input
                type="number"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
                name="accommodations"
                id="accommodations"
                min="0"
                max="100"
                value="{{old('accommodations')}}"
              />
              @error('accommodations')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Childs</label>
              <input
                type="number"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
                name="members"
                id="members"
                min="0"
                max="100"
                value="{{old('members')}}"
              />
              @error('members')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Email</label>
              <input
                type="email"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
                name="email"
                id="email"
                value="{{old('email')}}"
              />
              @error('email')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Guardian Email</label>
              <input
                type="email"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
                name="youremail"
                id="youremail"
                value="{{old('youremail')}}"
              />
              @error('youremail')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
          <div>
            <label class="block text-gray-700 mb-2">Name</label>
            <input
              type="text"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
              name="fullname"
              id="fullname"
              value="{{old('fullname')}}"
            />
            @error('fullname')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Guardian Name</label>
            <input
              type="text"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
              name="name"
              id="name"
              value="{{old('name')}}"
            />
            @error('name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div>
            <label class="block text-gray-700 mb-2">PhoneNumber</label>
            <input
              type="tel"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
              name="phonenumber"
              id="phonenumber"
              value="{{old('phonenumber')}}"
            />
            @error('phonenumber')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Guardian PhoneNumber</label>
            <input
              type="tel"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
              name="contactnumber"
              id="contactnumber"
              value="{{old('contactnumber')}}"
            />
            @error('contactnumber')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Address</label>
            <input
              type="text"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
              name="location"
              id="location"
              value="{{old('location')}}"
            />
            @error('location')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <div>
            <label class="block text-gray-700 mb-2">Guardian Address</label>
            <input
              type="text"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
              name="address"
              value="{{old('address')}}"
            />
            @error('address')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
        <div>
            <label for="logo" class="block text-gray-700 mb-2"> Room Logo</label>
            <input
              type="file"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500"
              name="logo"
            />
            @error('logo')
            <p class="text-red-500 text-xs mt-1">{{$logo}}</p>
          @enderror
          </div>
        </div>
          <button
            class="w-full bg-red-500 text-white py-3 rounded-lg mt-6 hover:bg-green-600 transition-colors"
          >
            Book Now
          </button>
        </form>
      </div>
      </div>
  </section>
</x-layout>
