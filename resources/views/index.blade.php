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

   @include('navigation.header')
   
    {{-- @include('menu-toggle') --}}
    <div id="fullpage">
        @include('homepage')
        @include('about-us')
        @include('service.our_service')
        @include('contacts.contact')
    </div>
   
   @include('includes.script')

</body>
</html>