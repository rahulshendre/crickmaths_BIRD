<!-- <style>
        .navbar-brand img {
            height: 40px; /* Adjust size of the image */
        }

        .btn-cricket {
            background-color: #4CAF50; /* green background */
            color: white;
        }

        .btn-cricket:hover {
            background-color: #45a049;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?php echo e(config('app.baseURL')); ?>/assets/img/image002.png" alt="CricMaths Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">The Pavilion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cricket Lingo Land</a>
                </li>
            </ul>

            <a href="<?php echo e(config('app.baseURL')); ?>/after-start" class="btn btn-cricket">Play Cricket</a>
        </div>
    </div>
</nav> -->


    <style>
       

        /* Navigation bar styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            display: flex;
            align-items: center;

        }

        .navbar .logo img {
            max-height: 50px;
             /*margin-left: 60%;*/
           margin-left: 15%;

        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar ul li {
            margin: 0 20px;
            font-size: 16px;
        }

        .navbar ul li a {
            

            font-family: Signika;
font-size: 20px;
font-weight: 400;
line-height: 34.5px;
text-align: left;
color: #000000;

        }

        .navbar ul li a:hover {
            color: #4CAF50;
        }

        .play-cricket{
background: #459F01;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
/*            margin-right: 10%;
*/        }

        .play-btn:hover {
            background-color: #45a049;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar ul {
                flex-direction: column;
                width: 100%;
                display: none;
            }

            .navbar ul li {
                margin: 10px 0;
            }

            .navbar .menu-toggle {
                display: block;
                font-size: 24px;
                cursor: pointer;
                margin-left: auto;
            }

            .navbar.active ul {
                display: flex;
            }

            .play-btn {
                width: 100%;
                text-align: center;
                margin-top: 10px;
            }
        }

        /* Menu toggle button for mobile */
        .menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }


        @media (max-width: 768px) {

            .navbar .logo img {
    max-height: 50px;
    margin-left: 5%;
}

.navbar .menu-toggle {
        display: block;
        font-size: 50px;
        cursor: pointer;
        margin-left: auto;
        margin-right: 2%;
    }


        }

    @media (min-width: 810px) and (max-width: 1025px) {

        .navbar ul li {
    margin: 0 19px;
    font-size: 16px;
}

.navbar .logo img {
    max-height: 30px;
    margin-left: 0%;
}

.navbar ul li a {
    font-family: Signika;
    font-size: 15px;
    font-weight: 400;
    line-height: 34.5px;
    text-align: left;
    color: #000000;
}

.play-cricket {
    background: #459F01;
    color: white;
    padding: 7px 10px;
    border: none;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
    font-size: 15px;
     margin-right: 0%; 
}




    }
    </style>
</head>
<body>

    <nav class="navbar">
        <!-- Logo Section -->
        <div class="logo">
            <a href="<?php echo e(config('app.baseURL')); ?>/"><img src="<?php echo e(config('app.baseURL')); ?>/assets/img/image002.png" alt="CricMaths Logo"></a>
        </div>

        <!-- Menu Toggle Button for Mobile -->
        <span class="menu-toggle" onclick="toggleMenu()">&#9776;</span>

        <!-- Menu Items -->
        <ul>
            <li><a href="<?php echo e(config('app.baseURL')); ?>/">Home</a></li>
            <li><a href="<?php echo e(config('app.baseURL')); ?>/howzzat">Howzzat</a></li>
            <li><a href="<?php echo e(config('app.baseURL')); ?>/pavilion">About Us</a></li>
            <li><a href="<?php echo e(config('app.baseURL')); ?>/gallery">Gallery</a></li>
            <li><a href="<?php echo e(config('app.baseURL')); ?>/cricketlingo">Cricket Lingo</a></li>
        </ul>

        <!-- Play Button -->
        <a href="<?php echo e(config('app.baseURL')); ?>/after-start" class="play-cricket">Play Cricket</a>

        <a href="<?php echo e(config('app.baseURL')); ?>/user-dashboard"><img src="<?php echo e(config('app.baseURL')); ?>/assets/images/av2.png" alt="" class="img-fluid rounded-circle" style="width: 50px; height: 50px; object-fit: cover;"></a>

          <div id="custom_translate">
          <select id="languageSwitcher" onchange="translatePage()">
        <option value="">Select Language</option>
        <option value="en">English</option>
        <option value="hi">Hindi</option>
        <option value="mr">Marathi</option>
    </select>
</div> 
    </nav>

    <script>
        // Function to toggle the mobile menu
        function toggleMenu() {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('active');
        }
    </script>




<?php /**PATH /Users/rahulshendre/Desktop/Coding/PlanetRead/Crickmath/cricmaths_web/resources/views/layouts/header.blade.php ENDPATH**/ ?>