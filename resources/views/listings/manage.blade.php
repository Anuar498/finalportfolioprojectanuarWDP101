<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resort Booking Site</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body class="bg-gray-100">
  
    <nav class="bg-gray-900 text-white">
      <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
          <a
            href="/"
            class="text-2xl font-bold hover:text-green-400 transition-colors"
            >Resort Booking Site</a
          >
          <div class="hidden md:flex space-x-8">
            <a href="{{ route('services') }}" class="hover:text-green-400 transition-colors"
              ><i class="fa fa-wrench text-lg"></i>
              <span>Services</span></a
            >
            <a href="{{ route('blog') }}" class="hover:text-green-400 transition-colors"
              ><i class="fa-solid fa-blog text-lg"></i>
              <span>Blog</span></a
            >
            <a href="{{ route('activities') }}" class="hover:text-green-400 transition-colors"
              ><i class="fas fa-tasks text-lg"></i>
              <span>Activities</span></a
            >
          </div>
          <ul class="flex items-center justify-end space-x-8 px-6 py-4">
            @auth
              <!-- Welcome Message -->
              <li class="flex items-center">
                <span class="text-white-800 font-bold uppercase tracking-wide">
                  WELCOME {{auth()->user()->name}}
                </span>
              </li>
        
              <!-- Manage Listings -->
              <li>
                <a href="/listings/manage" 
                   class="flex items-center space-x-2 text-white-600 hover:text-blue-600 transition-colors duration-200"
                >
                  <i class="fa-solid fa-hotel text-lg"></i>
                  <span>CHANGE YOUR BOOK</span>
                </a>
              </li>

              <!-- Logout -->
              <li>
                <form class="inline" method="POST" action="/logout">
                  @csrf
                  <button type="submit" 
                          class="flex items-center space-x-2 text-white-600 hover:text-red-600 transition-colors duration-200"
                  >
                    <i class="fa-solid fa-door-closed text-lg"></i>
                    <span>LOG-OUT</span>
                  </button>
                </form>
              </li>
        
            @else
              <!-- Register -->
              <li>
                <a href="/register" 
                   class="flex items-center space-x-2 text-white-600 hover:text-blue-600 transition-colors duration-200"
                >
                  <i class="fa-solid fa-user-plus text-lg"></i>
                  <span>Register</span>
                </a>
              </li>
        
              <!-- Login -->
              <li>
                <a href="/login" 
                   class="flex items-center space-x-2 text-white-600 hover:text-blue-600 transition-colors duration-200"
                >
                  <i class="fa-solid fa-arrow-right-to-bracket text-lg"></i>
                  <span>Login</span>
                </a>
              </li>
            @endauth
          </ul>
          
        </div>
      </div>
    </nav>


    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <header>
          <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Let's Book Now
          </h1>
        </header>
    
        <table class="w-full table-auto rounded-sm">
          <tbody>
            @unless($listings->isEmpty())
    
            @foreach($listings as $listing)
    
            <tr class="border-gray-300">
              <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <a
              href="/listings/{{$listing->id}}"
              class="inline-block bg-orange-500 text-white px-2 py-2 square-full hover:bg-green-600 transition-colors duration-300"
              >
              View Detail
              </a>
              </td>
              <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <a
                  href="/listings/{{$listing->id}}/edit"
                  class="text-blue-400 px-6 py-2 rounded-xl"
                  ><i class="fa-solid fa-pen-to-square"></i> EDIT</a
                >
              </td>
              <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <form method="POST" action="/listings/{{$listing->id}}">
                  @csrf
    
                  @method('DELETE')
                  <button class="text-red-500">
                    <i class="fa-solid fa-box-archive"></i>
                    CANCEL
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
    
            @else
            <tr class="border-gray-300">
              <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <p class="text-center">Book Your Stay Now</p>
              </td>
            </tr>
          @endunless 
          </tbody>
        </table>
      </div>
      <x-flash-message />
      
      <footer class="fixed bottom-0 left-0 w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white py-6 shadow-lg z-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                
                <div class="flex items-center mb-4 md:mb-0">
                    <span class="text-2xl mr-2">©</span>
                    <p class="text-sm md:text-base font-medium">
                        2024 Company Name. All rights reserved.
                    </p>
                </div>
                <div class="flex items-center space-x-6 mb-4 md:mb-0">
                    <a href="#" class="hover:text-gray-200 transition-colors duration-300">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-gray-200 transition-colors duration-300">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="/"
                    ><img
                      class="w-24"
                      src="{{asset('/images/coconut.jpg')}}"
                      alt=""
                      class="logo"
                  /></a>
                </div>
            </div>
        </div>
    </footer>
  </body>
  </html>

 