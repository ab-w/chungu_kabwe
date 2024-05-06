<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex">
        <div class="w-1/2 p-4 flex flex-col justify-center items-center" style="background:  background: linear-gradient(0deg, rgba(9,40,5,1) 7%, rgba(54,131,45,0.1153054971988795) 71%, rgba(164,159,3,0) 90%);">
            <h2 class="text-gray-800 text-center text-lg" style="font-size: 1.75rem;">Dormitory Security:</h2>
            <p class="text-gray-800 text-center text-lg">Keep your dorm room locked when you're not there.</p>
            <p class="text-gray-800 text-center text-lg">Be mindful of who you give access to your room.</p>
        </div>

        <div class="w-1/2 flex flex-wrap">
            <div class="w-1/2 p-2">
                <img src="{{asset('assets/img/profiles/picc-1.png')}}" alt="Image 1" class="w-full">
            </div>
            <div class="w-1/2 p-2">
                <img src="../assets/img/profiles/picc-4.png" alt="Image 2" class="w-full">
            </div>
            <div class="w-1/2 p-2">
                <img src="../assets/img/profiles/picc-2.png" alt="Image 3" class="w-full">
            </div>
            <div class="w-1/2 p-2">
                <img src="../assets/img/profiles/picc-3.png" alt="Image 4" class="w-full">
            </div>
        </div>
    </div>
</body>
</html>
