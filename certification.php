<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifications</title>
    <style>
        .certifications-container {
            padding: 20px;
            background-color: #ffffff;
            border: 2px solid #d1d1d1;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .certification {
            flex: 1;
            margin: 10px;
            text-align: center;
        }
        .certification img {
            width: 90%;
            height: auto;
            max-width: 50vw; /* Image takes up half the viewport width */
            border-radius: 10px;
            border: 3px solid #4caf50;
            margin-bottom: 10px;
        }
        .certification h3 {
            font-size: 24px;
            margin-bottom: 5px;
            color: #333;
        }
        .certification p {
            margin: 0;
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="certifications-container">
        <!-- First Row -->
        <div class="row">
            <div class="certification">
                <img src="assets/java-iitk.jpg" alt="Certification 1">
                <h3>Java  Certification At IITK</h3>

                <!-- <p>Details about Certification 1</p> -->
            </div>
            <div class="certification">
                <img src="assets/nec-fest.jpeg" alt="Certification 2">
                <h3>Won 1st Prize In Projest Expo At NEC College</h3>
                <!-- <p>at Narasaraopet Engineering College Fest</p> -->
            </div>
        </div>

        <!-- Second Row -->
        <div class="row">
            <div class="certification">
                <img src="assets/php-intern-iitk.jpg" alt="Certification 3">
                <h3>Completed PHP FULL STACK Certification At IITK</h3>
                <!-- <p>Details about Certification 3</p> -->
            </div>
            <div class="certification">
                <!-- <img src="assets/offer-letter.jpg" alt="Certification 3"style="width:60%;height:100%;"> -->
                                 <img src="assets/offer-letter.jpg" alt="Certification 3">

                <h3>INTERNSHIP Offer Letter From FLYMAX MULTI SERVICES <!--s--> PVT LTD</h3>
                <!-- <p>Details about Certification 3</p> -->
            </div>
        </div>

        <div class="row">
        <div class="certification">
                <img src="assets/php-course.jpg" alt="Certification 4">
                <h3>Completed Internship  At IITK On The Domain Of PHP FULL STACK</h3>
                <!-- <p>Details about Certification 4</p> -->
            </div>
            <!-- <div class="certification">
                <img src="assets/php-course.jpg" alt="Certification 4">
                <h3>Completed Internship  At IITK On The Domain Of PHP FULL STACK</h3>
                 <p>Details about Certification 4</p> 
            </div> -->
        </div>
    </div>
</body>
</html>
