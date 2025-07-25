<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Forum') }}
        </h2>
        <html>
           <style>       
        .bg-gray-100 { background-color: #f7fafc; }
        .dark .dark\:bg-gray-900 { background-color: #1a202c; }
        .text-gray-800 { color: #2d3748; }
        .dark .dark\:text-gray-200 { color: #edf2f7; }
    </style>
       @include($login)
      <x-button type='button' variant='primary' class="ml-4">
        <a href="{{ route('login') }}">Login</a>
      </x-button>
      @else($logout)
      <x-button type='button' variant='primary' class="ml-4">
        <a href="{{ route('logout') }}">Logout</a>
      </x-button>
        @endif
      @include($register)
      <x-button type='button' variant='primary' class="ml-4">
        <a href="{{ route('register') }}">Register</a>
      </x-button>
      @endif
      @include('partials.navbar')
        @endif
        </html>
    </x-slot>
    <style>
        .topnav{
            overflow: hidden;
            background-color: #f7fafc;
        }
        </style>
    <div class='topnav'>
        <input type="text" placeholder="search">
        @include('searchbar')
    </div>
    @include('auth.verify-email')

    

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Welcome to the Forum</h1>
        <p class="mb-6">This is a place to discuss various topics and share knowledge.</p>

        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 mb-10">
            @include('partials.posts', ['posts' => $posts])
        </div>

        <h2 class="text-2xl font-bold mb-4">Start a Discussion</h2>
        <p class="mb-6">Feel free to share your thoughts and don’t feel apprehensive about it.</p>

        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            @include('add.post', ['createPost' => $createPost])
        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Recent Posts</h2>
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            @include('partials.recent-posts', ['recentPosts' => $recentPosts])
        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Recent Comments</h2>
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            @include('partials.recent-comments', ['recentComments' => $recentComments])
        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
      <x-navbar />
      <h2 class="text-2xl font-bold mb-4">About Us</h2>
              <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
     <p class="mb-6">This forum is a test project that will never see the light of day. Well maybe who knows. But it's still a forum so I guess it's not really all that useful to anyone. :)</p>
    </div>
</x-app-layout>
