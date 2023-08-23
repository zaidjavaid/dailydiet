<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatic Picture Carousel</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for the picture carousel */
        .carousel-item img {
            width: 100%;
            height: 400px;
            /* Adjust the height of the carousel images */
            object-fit: cover;
        }
    </style>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Picture Carousel Section -->
    <div id="pictureCarousel" class="carousel slide" data-ride="carousel">
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/carousel1.png" alt="Image 3">
            </div>
            <div class="carousel-item ">
                <img src="images/carousel2.png" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/carousel3.png" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/carousel4.png" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="images/carousel5.png" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="images/carousel6.png" alt="Image 4">
            </div>
            <div class="carousel-item">
                <img src="images/carousel7.png" alt="Image 5">
            </div>
            <div class="carousel-item">
                <img src="images/carousel8.png" alt="Image 6">
            </div>
            <div class="carousel-item">
                <img src="images/carousel9.png" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="images/carousel10.png" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="images/carousel11.png" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="images/plate1.jpg" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="images/plate2.jpg" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="images/plate3.jpg" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="images/plate4.jpg" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="images/plate5.jpg" alt="Image 7">
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#pictureCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#pictureCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for automatic carousel -->
    <script>
        // Function to move to the next slide every 3 seconds
        function autoCarousel() {
            $('#pictureCarousel').carousel('next');
        }

        // Call the function every 3 seconds
        setInterval(autoCarousel, 3000);
    </script>
</body>

</html>