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
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
<div class="relative h-screen">
    
    <div 
      class="absolute inset-0 bg-cover bg-center"
      style="background-image: url('/images/beautiful.png')"
    >
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>
  
    <div class="relative h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center h-full">

        <div class="space-y-6">
          <h1 class="text-4xl md:text-6xl font-bold text-coral font-georgia">
            Resort Booking Site
          </h1>
          <p class="text-2xl md:text-4xl text-coral font-georgia font-bold">
            Come Visit Us
          </p>
          <a
            href="/listings/create"
            class="inline-block bg-red-500 text-white px-8 py-3 rounded-full hover:bg-green-600 transition-colors duration-300"
          >
            Get Started
          </a>
        </div>
  
        <div class="hidden md:block">
          <div class="relative h-[400px] w-full">
            <img 
              src="/images/dining.png"
              alt="Resort Dining Area"
              class="absolute inset-0 w-full h-full object-cover rounded-lg shadow-xl"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="min-h-screen">
    <section id="about" class="relative py-20 bg-cover bg-center min-h-[600px]" style="background-image: url('/images/about.jpg');">
      <!-- Overlay -->
      <div class="absolute inset-0 bg-black/50"></div>
      
      <!-- Content Container -->
      <div class="container mx-auto px-6 relative">
        <div class="flex flex-col md:flex-row items-center gap-12">
          <!-- Text Content -->
          <div class="md:w-1/2 bg-white/90 backdrop-blur-sm rounded-xl p-8 shadow-xl">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">
              About Our Resort
            </h2>
            <p class="text-gray-700 mb-8 leading-relaxed">
              Imagine waking up in a lavish oceanfront suite, where panoramic
              views of turquoise waters greet you at dawn. Guests can indulge in
              world-class amenities, from rejuvenating spa treatments to
              exquisite dining experiences featuring locally sourced ingredients
              and international flavors.
            </p>
            <div class="space-y-4">
              <div class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-700 font-medium">Best Resort Award 2023</span>
              </div>
              <div class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-700 font-medium">Certified Eco-friendly</span>
              </div>
              <div class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                  <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-700 font-medium">5-Star Luxury Rating</span>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  </div>
  
  @include('partials._testimonials')
  
  <!-- Image Showcase with Carousel -->
  <section class="py-16 bg-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="carousel-container">
      <div class="carousel">
        <img
          src="https://picsum.photos/seed/auUb9763k9DCeLJIvmQxo/512"
          alt="Resort Image 1"
          class="w-full md:w-96 h-64 object-cover rounded-lg shadow-lg"
        />
        <img
          src="https://picsum.photos/seed/Jhk-ytYzEiJ7NTi-hxYeh/512"
          alt="Resort Image 2"
          class="w-full md:w-96 h-64 object-cover rounded-lg shadow-lg"
        />
        <img
          src="https://picsum.photos/seed/dP1VNA6t346SNJfJIC7_i/512"
          alt="Resort Image 3"
          class="w-full md:w-96 h-64 object-cover rounded-lg shadow-lg"
        />
      </div>
    </div>
  </div>
  </section>

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