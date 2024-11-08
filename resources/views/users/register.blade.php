<x-layout>
    <div class="flex flex-col justify-center font-[sans-serif] p-4">
        <div class="max-w-md w-full mx-auto shadow-[0_2px_10px_-2px_rgba(195,169,50,0.5)] p-8 relative mt-12">
          <div class="bg-white w-24 h-24 border-[10px] p-1.5 absolute left-0 right-0 mx-auto -top-12 rounded-full overflow-hidden">
            <a href="javascript:void(0)">
              <img src="/images/coconut.jpg" alt="logo" class='w-full inline-block' />
            </a>
          </div>
      
          <form method="POST" action="/users" class="mt-12">
            @csrf
            <h3 class="text-xl font-bold text-orange-500 mb-8 text-center">Create free account</h3>
            <div class="space-y-4">
              <div class="mb-6">
                <input type="text" 
                 class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-4 focus:bg-transparent outline-orange-300 transition-all" 
                 placeholder="Enter name" 
                 name="name" 
                 value="{{old('name')}}" 
                 />
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-6">
                <input type="email" 
                 class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-4 focus:bg-transparent outline-orange-300 transition-all" 
                 placeholder="Enter email"
                 name="email" 
                 value="{{old('email')}}" 
                 />
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-6">
                <input type="password" 
                 class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-4 focus:bg-transparent outline-orange-300 transition-all" 
                 placeholder="Enter password" 
                 name="password"
                 />
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-6">
                <input type="password"   
                 class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-4 focus:bg-transparent outline-orange-300 transition-all" 
                 placeholder="Enter confirm password"
                 name="password_confirmation"
                 />
                 @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-6">
                <button type="submit" class="w-full py-4 px-8 text-sm tracking-wide font-semibold text-white bg-orange-500 hover:bg-orange-600 focus:outline-none">
                  Create an account
                </button>
              </div>
              <p class="text-sm mt-8 text-center text-gray-800">Already have an account? <a href="/login" class="text-orange-500 font-semibold hover:underline ml-1">Login here</a></p>
            </div>
          </form>
        </div>
      </div>
      
</x-layout>