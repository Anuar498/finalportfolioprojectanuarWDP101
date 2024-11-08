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
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
                  <i class="fa-solid fa-hotel text-lg text-lg"></i>
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
                  <span>REGISTER</span>
                </a>
              </li>
        
              <!-- Login -->
              <li>
                <a href="/login" 
                   class="flex items-center space-x-2 text-white-600 hover:text-blue-600 transition-colors duration-200"
                >
                  <i class="fa-solid fa-door-open text-lg"></i>
                  <span>LOG-IN</span>
                </a>
              </li>
            @endauth
          </ul>
          
        </div>
      </div>
    </nav>

    <main>
        {{$slot}}
      </main>

    <!-- Footer -->
    <footer
      class="bg-cover bg-center text-white"
      style="background-image: url('/images/boat.png')"
    >
      <div class="bg-black bg-opacity-70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
              <h5 class="text-xl font-bold mb-4">About Us</h5>
              <p class="text-gray-300">
                In the serene mountains/by the pristine coastline amidst lush
                tropical gardens, offers a luxurious escape where tranquility
                meets adventure. Located at near a famous landmark, in a
                picturesque setting, our resort promises an unforgettable
                retreat for families, couples, and adventurers alike.
              </p>
            </div>
            <div>
              <h5 class="text-xl font-bold mb-4">Contact Us</h5>
              <ul class="space-y-2 text-gray-300">
                <li>#40 Teachers Village Brgy.Subusub, Rosario, La Union</li>
                <li>+63 969 458 1284</li>
                <li>anuarcabugatan9@gmail.com</li>
              </ul>
            </div>
            <div>
              <h5 class="text-xl font-bold mb-4">Follow Us</h5>
              <ul class="space-y-2">
                <li>
                  <a
                    href="https://www.facebook.com/"
                    class="text-gray-300 hover:text-orange-500 transition-colors duration-300"
                  >
                    <i class="fab fa-facebook mr-2"></i>Facebook
                  </a>
                </li>
                <li>
                  <a
                    href="https://x.com/?lang=en"
                    class="text-gray-300 hover:text-orange-500 transition-colors duration-300"
                  >
                    <i class="fab fa-twitter mr-2"></i>Twitter
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/"
                    class="text-gray-300 hover:text-orange-500 transition-colors duration-300"
                  >
                    <i class="fab fa-instagram mr-2"></i>Instagram
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <x-flash-message />
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
