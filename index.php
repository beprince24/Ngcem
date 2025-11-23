<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Event Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background: linear-gradient(to right, black,black);
        }

        .carousel-item img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .footer {
            background: #333;
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            padding: 20px;
        }
        @media (min-width:521px) and (max-width:1200px) {
            .carousel-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            }
        }
        @media (max-width:520px) {
            .carousel-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Kaamadhenu Arts and Science College</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="eventsDropdown" role="button" data-bs-toggle="dropdown">
                            LOGIN
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./ad_login.php">ADMIN</a></li>
                            <li><a class="dropdown-item" href="./faculty_login.php">FACULTY</a></li>
                            <li><a class="dropdown-item" href="./student_login.php">STUDENT</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="./student_reg.php">REGISTER</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.html">About US</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="eventCarousel" class="carousel slide" data-bs-ride="carousel"data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://media.licdn.com/dms/image/C561BAQEcwx7nO-7DEg/company-background_10000/0/1589529957987/kascsathy_cover?e=2147483647&v=beta&t=xIQs0k_T6PwoqS0-MHAQm_cgEjya2QIS0pk3ViMLNfY" alt="Campus">
                <hgroup>
            <h2></h2>
        </hgroup>
      
    </div>    
            <div class="carousel-item">
                <img src="https://kascsathy.ac.in/images/background/bg1.jpg" alt="College Building">
            </div>
            <div class="carousel-item">
                <img src="https://www.kascsathy.ac.in/images/facilities/green/02.jpg" alt="Green Campus">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    

    
    <div class="container my-5">
        <h2 class="text-center mb-4">Upcoming Events</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card event-card">
                    <img src="./quiz.jpg" class="card-img-top"
                        alt="Quiz Event" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Quiz Competition</h5>
                        <p class="card-text">Test your knowledge and compete with the best minds.</p>
                        <a href="./student_login.php" class="btn btn-primary"><i class="fa-solid fa-arrow-right"></i> Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card">
                    <img src="./Paper-Presentation.jpg" class="card-img-top"
                        alt="Paper Presentation" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Paper Presentation</h5>
                        <p class="card-text">Showcase your research and ideas in front of experts.</p>
                        <a href="./student_login.php" class="btn btn-primary"><i class="fa-solid fa-arrow-right"></i> Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card">
                    <img src="./work.jpg" class="card-img-top"
                        alt="Workshop" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Technical Workshop</h5>
                        <p class="card-text">Enhance your skills with hands-on workshops conducted by experts.</p>
                        <a href="./student_login.php" class="btn btn-primary"><i class="fa-solid fa-arrow-right"></i> Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 NGCEM </p>
        <p>Developed By - VISHNU VIGHAS, BSC CS, 2022 - 2025</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>