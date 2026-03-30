<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
</head>
<body>
      <div  class="header_container">
        <header>
            <h1>Prompt <span>Co.</span></h1>
                <nav>
                    <a href="#home" >Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#blog">Blog</a>
                    <a href="#contact">Contact</a>
                </nav>
        </header>
    </div>
    @include('home')
    @include('about')
   
    @include('services')
    @include('blog')
     @include('contact')
    
</body>
</html>