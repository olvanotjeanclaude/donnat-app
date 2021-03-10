<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DNA Webhosting</title>
    @include('includes.head')
</head>
<body>

   @include('header')
   <div class="container-fluid p-0">
       {{-- @include('menu-toggle') --}}
       <div id="fullpage">
           @include('homepage')
           @include('about-us')
           @include('our-service')
           @include('contact')
        </div>
    </div>
  
   
   @include('includes.script')
</body>
</html>