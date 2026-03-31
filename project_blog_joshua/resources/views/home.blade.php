 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
        <title>Home</title>
</head>
<body>
    @include('header')
    <section id="home">
        <div class="welcome_banner">
            <h1>PERSONAL BLOG</h1>
            <h2>Welcome to My Blog</h2>
            <p class="description">Hi! I'm Joshua S. Rosario. Thank you for visiting my blog page. This site 
                is all about showcasing my skills, services, and
                my experience as an IT student.
            </p>
            <div class="author_profile">
                <img  src="{{ asset('images/profile.jpg') }}" alt="Logo">
                <div class="author_desc">
                    <h3 >Joshua S. Rosario</h3>
                    <p>CUTE LANG   •   IT STUDENT</p>
                </div>
            </div>
            
            <div class="blog_container">
            <a href="{{ route('blog') }}">Read My Blogs</a>
            </div>
        </div>
</section>
</body>
</html>