@vite('resources/css/app.css')
<div>
    <div class="flex justify-center items-center p-10">
    <!-- <a href="{{ url('/') }}">
        <img src="{{ asset("logo.jpeg") }}" alt=""
        class="w-25 h-25">
    </a> -->
    <nav class="flex gap-10 font-sans">
        <a href="/" 
            class="text-2xl font-medium 
            hover:text-black hover:-translate-y-1 hover:underline transition ease-out duration-500">
            Home</a>
        <a href="{{ url('/gallery') }}" 
            class="rounded text-2xl font-medium
            hover:text-black hover:-translate-y-1 hover:underline transition ease-out duration-500">
            Gallery</a>
        <a href="{{ url('/about') }}" 
            class="rounded text-2xl font-medium
            hover:text-black hover:-translate-y-1 hover:underline transition ease-out duration-500">
            About</a>
        <a href="{{ url('/contact') }}" 
            class="rounded text-2xl font-medium
            hover:text-black hover:-translate-y-1 hover:underline transition ease-out duration-500">
            Contact Us</a>
    </nav>
</div>
</div>