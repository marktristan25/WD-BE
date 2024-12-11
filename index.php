<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/emtiLogo.png">
    <style>
        body {
            background-color: black;
            font-family: 'Poppins', sans-serif;
        }

        .navbar-brand {
            font-weight: bolder;
            font-size: 32px;
        }

        .navbar {
            background-color: transparent;
        }

        .nav-link {
            font-size: 18px;
            margin: 0 50px;
            transition: transform 0.3s, background 0.3s;
            padding: 10px;
            border-radius: 5px;
        }

        .nav-link:hover {
            transform: scale(1.05);
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: white;
        }

        .custom-button-2 {
            font-weight: bolder;
            font-size: 18px;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border: 1px solid #000;
            padding: 10px 20px;
            border-radius: 20px;
            color: rgb(43, 43, 43) !important;
            text-align: center;
        }

        .custom-button-2:hover {
            transform: scale(1.05);
        }

        .custom-button-1 {
            font-weight: bolder;
            font-size: 24px;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border: 1px solid #000;
            padding: 10px 20px;
            border-radius: 20px;
            color: rgb(43, 43, 43) !important;
            text-align: center;
            transition: transform 0.3s;
        }

        .custom-button-1:hover {
            transform: scale(1.05);
        }

        .nav-link-4 {
            font-weight: bolder;
            font-size: 24px;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border: 1px solid #000;
            padding: 10px 20px;
            border-radius: 20px;
            color: rgb(43, 43, 43) !important;
            text-align: center;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='1.5' d='M1.75 8h12.5M1.75 4h12.5M1.75 12h12.5'/%3E%3C/svg%3E");
        }

        .testing {
            margin-top: 150px;
        }

        .link3 {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .title {
            text-align: center;
            /* Centers the text within the container */
        }

        .card {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border: 1px solid #000;
            padding: 10px 20px;
            border-radius: 20px;
            color: rgb(43, 43, 43) !important;
            text-align: center;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .floating-logo {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-in, transform 1s ease-in;
        }

        .fade-in-active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="home">
        <div class="container">
            <a class="navbar-brand me-auto text-white" href="#"
                style="background: linear-gradient(to right, #ff7e5f, #feb47b); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                EMTI HP </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white me-5" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white me-5" aria-current="page" href="#aboutMe">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <a href="#contact" class="btn custom-button-2 fade-in">Get in touch</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <section>
        <div class="testing container fade-in">
            <div class="row">
                <div class="col-md-6 col-12 mb-4 MT-5">
                    <div class="title text-white">
                        <h1>Welcome to my HomePage!</h1>
                        <h1>By Mark Tristan C. Idanan</h1>
                    </div>
                    <div class="link3 fade-in justify-content-center">
                        <a href="#projects" class="btn custom-button-1">SEE PROJECTS</a>
                        <!-- <a href="#random" class="btn custom-button-1">RANDOM</a> -->
                    </div>
                </div>

                <div class="logo col-md-6 col-12 mb-5" style="margin-top: -8px;">
                    <img src="images/ROUTINE (20)rrrr.png" class="d-block w-100 floating-logo" alt="Logo">
                </div>
    </section>


    <div class="container text-white mb-5 fade-in" id="aboutMe">
        <p class="fs-5">
            Hello! I'm Mark Tristan C. Idanan, a passionate IT student pursuing a degree in Web Development.
        </p>
        <p class="fs-5">
            Currently, I'm developing my skills in front-end and back-end development with a focus on creating dynamic,
            user-friendly websites. As a student of Information Technology, I am learning not only the technical aspects
            of coding but also the art of building intuitive, responsive web experiences. I’m passionate about using my
            creativity to solve real world problems and build digital solutions that make an impact.
        </p>
        <p class="fs-5">
            This portfolio is a collection of my educational work as I continue to explore, learn, and grow in the world
            of web
            development.
        </p>
        <p class="fs-5">
            Through my journey, I aim to deepen my expertise, connect with like-minded professionals, and contribute to
            projects that push the boundaries of what’s possible on the web. I’m excited to showcase my projects here
            and share my development process as I work towards becoming a full-stack developer.
        </p>
    </div>

    <section>
        <div class="mt-5 project container d-flex flex-column justify-content-center align-items-center min-vh-70"
            id="projects">
            <div class="project-text col-sm-6 col-md-8 col-12 mb-4 text-center">
                <div class="title text-white fade-in">
                    <h1 style="font-weight: bold;">Built Websites!</h1>
                </div>
                <div class="row mt-5 fade-in d-flex justify-content-center">
                    <!-- Bootstrap grid to create columns -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center">
                        <div class="card">
                            <img src="images/IslandsOfPersonalityBG.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Project1</h5>
                                <a href="A08/home.php" class="btn btn-dark">Open</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container d-flex flex-column justify-content-center align-items-center mt-5" id="contact">
        <div class="project-text col-md-8 col-12 mb-4 text-center">
            <div class="text-white fade-in">
                <h1 style="font-weight: bold;">CONTACT</h1>
            </div>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner fade-in">
                            <div class="carousel-item active">
                                <img src="images/Idanan_front.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Idanan_back.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item2"><a href="#" class="nav-link2 px-2 text-white">Home</a></li>
        </ul>
        <p class="text-center text-white">© EMTI's HomePage</p>
    </footer>

    <script>
        const fadeInOnScroll = () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in-active'); // Add the fade-in-active class
                        observer.unobserve(entry.target); // Stop observing after it fades in
                    }
                });
            });

            // Select all elements you want to fade in
            const elementsToFade = document.querySelectorAll('.fade-in');
            elementsToFade.forEach(element => {
                observer.observe(element); // Observe each element
            });
        };

        // Call the function
        fadeInOnScroll();

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>