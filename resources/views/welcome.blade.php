
    
    


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
   
    <!-- Header with Login  -->
    <body class="antialiased bg-white">

    
 <header>
<div class="mt-0">

</div>  

 

 </header>
       
    
        <div> 

       
            <div>
            
            </div>
            
            <div>
                @include('includes.home_header')
            
                @include('includes.slide_img') 
                @include('includes.component_1')  
                @include('includes.view-1') 
              
               
            </div>
            
            <div>
               @include('includes.view-2')
            </div>
         </div>

    {{-- <x-general.footer></x-general.footer> --}}

    <footer>
    @include('includes.footer')
    </footer>
    </body>
</html>