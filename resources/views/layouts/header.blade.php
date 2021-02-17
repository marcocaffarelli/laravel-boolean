<body>
    <header>
        <nav>
            <a href="{{ route('home') }}" class="{{Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
            <a href="{{ route('blog') }}" class="{{Route::currentRouteName() === 'blog' ? 'active' : '' }}">BLOG</a>
            <a href="{{ route('about') }}" class="{{Route::currentRouteName() === 'about' ? 'active' : '' }}">ABOUT</a>
        </nav>
    </header>
</body>
</html>