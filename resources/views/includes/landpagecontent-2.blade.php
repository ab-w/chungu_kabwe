<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form with Image</title>
<style>




    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .form-group img {
        width: 100px; /* Adjust the width as needed */
        height: auto;
        margin-right: 20px;
    }
    .form-group label {
        width: 100px; /* Adjust the width as needed */
        margin: 0;
        padding: 0;
        text-align: right;
    }
    .form-group input[type="text"],
    .form-group textarea {
        flex: 1;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .form-group textarea {
        height: 100px; /* Adjust the height as needed */
    }
    .form-group button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
</head>
<body>
<!-- 
Componet with the female securiyt -->
<div class="flex items-center">
    
    <div class="flex items-center relative">
    <img class="mr-4 ml-5 mt-4" src="../assets/img/banner/officer-1.png" alt="Image" style="width: 500px; height: auto;">

    <div class="absolute top-0 left-0 w-full h-full" style="background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.1));"></div>

    <div class="relative z-10 mt-10">
        <p>Our campus security team is dedicated to ensuring your safety on campus.</p>
        <p>With round-the-clock surveillance and proactive measures, we strive to create a secure environment where you can focus on your studies and campus life without worry.</p>
    </div>
</div>



</body>
</html>
