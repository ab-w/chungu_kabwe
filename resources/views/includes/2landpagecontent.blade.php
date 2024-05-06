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
        <div class="w-1/2 p-4 flex flex-col justify-center items-center mb-4 mr-3 mt-4 ml-4"
            style="background: rgb(9,40,5);
            background: linear-gradient(20deg, rgba(9,40,5,0.7399553571428572) 0%, rgba(17,75,11,1) 0%, rgba(223,139,11,0.8463979341736695) 79%, rgba(17,75,11,0.09289653361344541) 100%);">
            <h2 id="typewriter-h2" class="text-white text-center text-lg" style="font-size: 1.75rem;">Don't Leave
                your valuable unattended to whenever you leave the Libery
            </h2>
            <p id="typewriter-p" class="text-white text-center text-lg"></p>
        </div>

        <div class="w-1/2 p-2 flex flex-wrap">
            <div class="w-1/2 p-2">
                <img src="../assets/img/banner/stu.png" alt="Image 1" class="w-full">
            </div>
            <div class="w-1/2 p-2">
                <img src="../assets/img/banner/stu-1.png" alt="Image 2" class="w-full">
            </div>
            <div class="w-1/2 p-2">
                <img src="../assets/img/banner/stu-2.png" alt="Image 3" class="w-full">
            </div>
            <div class="w-1/2 p-2">
                <img src="../assets/img/banner/stu-3.png" alt="Image 4" class="w-full">
            </div>
        </div>
    </div>

    <script>
    const textArray = [
        "Keep your dorm room locked when you're not there.",
        "Be mindful of who you give access to your room.",
        "Report any suspicious activity to campus security.",
        "Don't leave valuable items unattended in common areas.",
        "This feature is so dope guys "
    ];

    let textIndex = 0;
    let charIndex = 0;
    let typingSpeed = 100;
    let forwardType = true;

    function typeWriter() {
        const currentText = textArray[textIndex];
        if (forwardType) {
            document.getElementById("typewriter-p").textContent = currentText.substring(0, charIndex + 1);
            charIndex++;
        }

        if (charIndex === currentText.length) {
            forwardType = false;
            typingSpeed = 2000; // Delay before typing the next line
        }

        if (!forwardType) {
            charIndex = 0;
            textIndex = (textIndex + 1) % textArray.length;
            forwardType = true;
            typingSpeed = 100;
        }
        setTimeout(typeWriter, typingSpeed);
    }

    window.onload = typeWriter;
    </script>
</body>

</html>