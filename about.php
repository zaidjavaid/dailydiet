<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <style>
        /* Reset some default styles to start fresh */
        body,
        h1,
        p {
            margin: 0;
            padding: 0;
        }

        /* Style the about section container */
        .about-section {
            display: flex;
            flex-wrap: wrap;
            /* Allow content to wrap on smaller screens */
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
            background-color: bisque;
        }

        /* Style the about content */
        .about-content {
            flex: 1;
            padding-right: 20px;
            margin-bottom: 40px;
            /* Add some space between content sections */
        }

        .about-content h3 {
            font-size: 24px;
            /* Adjust the font size for consistency */
            margin-bottom: 10px;
        }

        .about-content p {
            font-size: 16px;
            /* Adjust the font size for consistency */
            line-height: 1.5;
            margin-bottom: 15px;
            /* Increase spacing between paragraphs */
        }

        /* Style the side image */
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
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="about-section">
        <!-- Repeat the pattern of about-content and side-image for each section -->
        <div class="about-content">
            <h1>About Us</h1>
            <p>
                Welcome to our Diet Management System. We are passionate about helping
                you achieve your health and fitness goals through proper diet planning
                and management.
            </p>
            <p>
                Our team of nutrition experts and fitness enthusiasts are dedicated to
                providing you with personalized diet plans, informative articles, and
                valuable tips to support your journey towards a healthier lifestyle.
            </p>
            <p>
                Whether you want to lose weight, gain muscle, or simply maintain a
                balanced diet, we've got you covered.
            </p>
            <p>Join us today and start your path to a healthier you!</p>
        </div>
        <div class="side-image">
            <img src="https://s3-us-west-2.amazonaws.com/beachbody-blog/uploads/2017/12/Pre-Workout-Meals-for-80-Day-Obsession-Meal-7.jpg" alt="Image description" srcset="">
        </div>
        <!-- Repeat the above pattern for each section -->

    </div>
    <div class="about-section">
        <h3>About Our Calorie Tracker and Progress Monitoring System</h3>

        <p>Welcome to our innovative platform designed to help you achieve your health and fitness goals with precision and efficiency. Our comprehensive system combines cutting-edge technology with expert insights to provide you with personalized calorie recommendations based on your Basal Metabolic Rate (BMR) and Total Daily Energy Expenditure (TDEE). Additionally, we offer seamless progress tracking to keep you motivated and accountable on your fitness journey.</p>
        <h3>*Understanding the Basics: BMR and TDEE</h3>
        <p>Your Basal Metabolic Rate (BMR) represents the number of calories your body needs to maintain essential functions while at rest. It's the foundation upon which we build your personalized calorie recommendations. We take into account factors such as age, gender, height, weight, and activity level to calculate your BMR accurately.

            Total Daily Energy Expenditure (TDEE) goes a step further by factoring in your daily physical activity level. This includes everything from workouts to daily tasks. By understanding both your BMR and TDEE, we can provide you with a clear estimate of the calories you need to consume to maintain your current weight and energy levels.</p>

        <div class="side-image">
            <img src="https://fitnessvolt.com/wp-content/uploads/2019/05/TDEE-Calculator-1-750x422.jpg" alt="prework out" srcset="">

        </div>
    </div>


    <div class="about-section">
        <!-- Repeat the pattern of about-content and side-image for each section -->
        <div class="about-content">
            <h3>Tailored Calorie Recommendations</h3>
            <p>
                Our platform doesn't believe in one-size-fits-all solutions. We provide you with precise calorie recommendations that align with your goals, whether it's weight loss, maintenance, or muscle gain. By creating a calorie deficit or surplus that is appropriate for your objectives, you can achieve your desired results without compromising your overall well-being.</p>
            <h3>
                Real-Time Progress Tracking</h3>
            <p>Monitoring your progress is a crucial aspect of achieving any fitness goal. Our platform offers an intuitive and user-friendly interface that allows you to log your daily food intake and physical activities effortlessly. As you input your meals, snacks, and exercises, our system automatically calculates and compares your actual caloric intake and expenditure against your personalized recommendations.</p>
            <h3>Staying Accountable and Motivated</h3>
            <p>Accountability is key to maintaining consistency in your fitness journey. Our platform provides visual representations of your progress, including charts and graphs that showcase your calorie consumption, expenditure, and weight changes over time. Celebrate your victories, learn from your challenges, and stay motivated by witnessing your efforts translate into tangible results.</p>
            <h3>Expert Guidance and Support</h3>
            <p>We understand that navigating the world of nutrition and fitness can be overwhelming. Our platform offers access to expert resources, educational content, and even personalized guidance from certified professionals if desired. We're committed to providing you with the tools you need to make informed decisions about your health.</p>
            <h3>Your Journey, Your Success</h3>
            <p>At our core, we believe that your fitness journey should be as unique as you are. Our calorie tracker and progress monitoring system empower you to take control of your health, make informed choices, and celebrate your achievements along the way. Whether you're just starting or well on your way, our platform is here to support you every step of the way. Together, we'll turn your aspirations into achievements.</p>
        </div>
        <div class="side-image">
            <img src="https://healthyeater.com/wp-content/uploads/2022/02/TDEE-New.jpg" alt="prework out" srcset="">
            <!-- <img src="https://feastgood.com/wp-content/uploads/2022/06/Are-there-risks-with-eating-under-your-bmr-of-1400-calories.jpg" alt="prework out" srcset=""> -->
        </div>

    </div>

    <div class="side-image">
        <img style="margin: 10px;" src="https://cdn.squats.in/kc_articles/3a241ed96f297ec4a6aa1ba24b9a1164.webp" alt="prework out" srcset="">
    </div>





    <?php include "footer.php"; ?>
</body>

</html>