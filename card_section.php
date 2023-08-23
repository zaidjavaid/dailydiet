<!DOCTYPE html>
<html>

<head>
    <title>Card Section</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            border: none;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
            display: flex;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            background-color: #ff6700;
            color: white;
        }

        .card-img-top {
            max-height: 220px;
            object-fit: cover;
        }

        .card-title {
            margin: 15px 0;
        }

        .card-text {
            margin-bottom: 15px;
            /* height: auto; */
            flex: 1;
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        body {
            background-color: #f4f4f4;
            padding: 20px;
        }

        #btn {
            display: inline-block;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .green-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: transform 0.3s;
        }

        .green-button:hover {
            background-color: darkorchid;
            transform: scale(1.2);
            color: white;

        }

        /* Style the side image */
        .content {
            flex: 1;
            padding-right: 20px;
            margin-bottom: 40px;
            /* Add some space between content sections */
        }

        .side-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .side-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contain {
            display: flex;
            flex-wrap: wrap;
            /* Allow content to wrap on smaller screens */
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;

        }

        #btn1 {
            background-color: #3eb448;
            padding: 12px;
            margin: 10px;
            border-radius: 4px;
            color: white;
        }

        #btn1:hover {
            background-color: #3498db;
        }
    </style>

</head>

<body>
    <div class="contain">
        <div class=" content">
            <h4 style="color: green;"> YOUR DAILY ASSISTANT</h4>
            <h2>A step-by-step guide through the process of creating your diet</h2>

            <p>Our team has developed a simple and easy to use diet diary builder.

                It is powered by a constantly expanding range of new and proven products.</p>

            <a href="user/signup.php" id="btn1" type="button">Get Started</a>

        </div>
        <div class="side-image">
            <img src="images/sideimage.jpg" alt="prework out" srcset="">
        </div>
    </div>

    <div class="container ">
        <span>
            <h5 style="color: green;">A HANDFUL OF INFORMATION</h5>
        </span>
        <h2>Tips & Tricks</h2>
        <p>There are some useful articles in this section that provide lots of helpful information. This is not only information on building a diet, but also information on the characteristics of individual products, their use, practical tips and many other interesting tips.</p>
        <div class="row card-section">


            <div class="col-md-4">
                <div class="card">
                    <img src="image/pizza-card.jpg" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h4 class="card-title">Pizza doesn't have to be unhealthy</h4>
                        <p class="card-text">In a home-made, healthy and nutritious pizza, vegetables should prevail. The more so that according to the latest dietary recommendations, they should constitute nearly ¾ of the food consumed during the day.The only limitation in the amount of vegetables is size of dough or pizza crust.</p>
                        <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/postworkout_card.jpg" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h4 class="card-title">Post-workout meal</h4>
                        <p class="card-text">The post-workout meal should contain 2 basic ingredients: carbohydrates and proteins. The latter play a particularly large role in the meal after strength training, as they allow the muscles to be rebuilt. If we train in the evening, we should also eat a properly composed meal - even if we are on a reduction.</p>
                        <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/preworkout_card.jpg" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h4 class="card-title">Pre-workout meal</h4>
                        <p class="card-text">Carbohydrates are the basic fuel for intensively working muscles. Therefore, it is worth taking care of the source of this macronutrient, including meals. Easily digested sources such as white rice, white bread, small groats, dried and fresh fruit and jams will work well. Have a low volume and be easily digestible.</p>
                        <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/nuts-card.jpg" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h4 class="card-title">How to neutralize phytic acid in cereals and nuts?</h4>
                        <p class="card-text">Phytic acid is a natural component of cereal grains, nuts and legumes. It is essential in the process of plant growth, but for humans it is an anti-nutrient substance, as it inhibits the absorption of minerals from food into the bloodstream. Which products contain the most phytic acid and how to neutralize it?</p>
                        <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/lemon-juice-card.jpg" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h4 class="card-title">Hydration is essential</h4>
                        <p class="card-text">Water has many important functions in the human body. It is the environment for all life processes and is the most important solvent for substances in the human body. In addition, water is responsible for the transport of nutrients and metabolic products. It also takes part in thermoregulation as well as digestion and absorption of nutrients.</p>
                        <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/yerba-card.jpg" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h4 class="card-title">Yerba mate and its slimming properties</h4>
                        <p class="card-text">Yerba mate is a drink that positively affects almost everything. However, not everyone is aware of the powerful impact it can have on slimming. Yerba supports slimming mainly by feeling full, and also by inhibiting the activity of the digestive enzyme (pancreatic lipase)</p>
                        <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                    </div>
                </div>
            </div>
            <!-- <a href="/user_panel.php"></a> -->
            <button id="btn" class="green-button">Get Started</button>
        </div>
    </div>

</body>

</html>
<?php


?>