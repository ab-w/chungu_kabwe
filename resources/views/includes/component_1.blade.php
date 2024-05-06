<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Gallery</title>
  <style>

.bills h3 {
      margin-right: 60px; /* Adjust margin to move header slightly left */
      font-weight: bold; /* Make header text bold */
    }
    .image-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .image-container .image-box {
      flex: 1;
      text-align: left;
      margin-right: 40px;
      margin-left: 40px;
      margin-button: 10px; /* Adjust margin between image boxes */
    }

    .image-container img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .image-container h2 {
      margin-top: 0;
      margin-bottom: 5px; /* Adjust margin bottom */
      font-weight: bold; /* Make heading bold */
      transition: color 0.3s; /* Add transition effect for smooth hover */
      color: green;
    }


 
   .image-container h2:hover {
      color: orange; /* Change text color to green on hover */
    }

    .image-container p {
      margin-bottom: 0;
      text-align: justify; /* Justify text */
    }
  </style>

</head>
<body>


<div class="image-container  ">
    
  <div class="image-box ">
    <img src="../assets/img/banner/wen-4.png" alt="Image 1">
    <h2>Students' Peaceful Stay</h2>
    <p>We want all students to have a peaceful stay on campus. Our security measures are in place to create a safe environment conducive to learning and growth.</p>
  </div>
  <div class="image-box ">
    <img src="../assets/img/banner/wen-2.png" alt="Image 2">
    <h2>About Us</h2>
    <p>Welcome to the University of Zambia Security Department. We are committed to ensuring the safety and security of all students, staff, and visitors on campus.</p>
 </div>
 <div class="image-box ">
    <img src="../assets/img/banner/wen-3.png" alt="Image 3">
    <h2>Security Measures</h2>
    <p>Learn more about the security measures we have implemented to safeguard the University of Zambia community.</p>
   </div>
 
   
</div>

</body>
</html>
