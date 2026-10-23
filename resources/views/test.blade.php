@vite('resources/css/app.css')
<div>
    <div class="flex justify-between items-center px-15 border-b border-gray-200">
    <a href="{{ url('/') }}">
        <img src="{{ asset("logo.jpeg") }}" alt=""
        class="w-25 h-25">
    </a>
    <nav class="flex gap-10 font-sans">
        <a href="/" 
            class="text-xl font-medium
            hover:text-black hover:-translate-y-1 transition ease-out duration-500 cursor-pointer">
            Home</a>
        <a href="{{ url('/project') }}" 
            class="rounded text-xl font-medium
            hover:text-black hover:-translate-y-1 transition ease-out duration-500 cursor-pointer">
            Project</a>
        <a href="{{ url('/about') }}" 
            class="rounded text-xl font-medium
            hover:text-black hover:-translate-y-1 transition ease-out duration-500 cursor-pointer">
            About</a>
        <a href="{{ url('/contact') }}" 
            class="rounded text-xl font-medium
            hover:text-black hover:-translate-y-1 transition ease-out duration-500 cursor-pointer">
            Contact Us</a>
    </nav>
</div>
</div> 