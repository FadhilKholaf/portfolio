<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kreon" />
    <link href="https://fonts.cdnfonts.com/css/kreon" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>fadhilkholaf</title>
    <style>
        @import url('https://fonts.cdnfonts.com/css/kreon');
        *{
            font-family: 'Kreon', sans-serif;
        }
        nav{
            box-shadow: 0px 10px 30px 0px rgba(125, 224, 234, 0.30);
        }
        body{
            background-image: url(assets/bg-img.svg);
        }
        hr{
            width: 80%; 
            height: 4px; 
            color: #000000; 
            background-color: #000000;
        }
        .contact-card{
            border-radius: 1.5rem;
            background: linear-gradient(231deg, #583FBC -89.43%, #7DE0EA 93.34%);
            box-shadow: 40px 40px 59px 20px rgba(125, 224, 234, 0.50);
        }
        .primary-text{
            font-size: 4rem;
        }
        .text{
            font-size: 2.5rem;
        }
        .sub-text{
            font-size: 2rem;
        }
        .hidden{
            opacity: 0;
            transform: translatey(20%);
            filter: blur(5px);
            transition: all 1s;
        }
        .show{
            opacity: 1;
            transform: translatey(0);
            filter: blur(0);
        }
        .custom-btn{
            border-radius: 1.25rem; 
            width: 7.5rem; 
            background-color: #583FBC; 
            height: 3rem;
        }
        .profile-img{
            border-radius: 22.5rem; 
            box-shadow: 0px -40px 100px 0px rgba(255, 255, 255, 0.50) inset, 0px 20px 100px 0px rgba(255, 255, 255, 0.50);
        }
        .icon-img{
            width: 2.5rem;
        }
        .icon-img-about{
            height: 5.75rem;
        }
        .delay{
            transition-delay: 250ms;
        }
        .primary-delay:nth-child(1){
            transition-delay: 150ms;
        }
        .primary-delay:nth-child(2){
            transition-delay: 250ms;
        }
        .primary-delay:nth-child(3){
            transition-delay: 350ms;
        }
        .primary-delay:nth-child(4){
            transition-delay: 450ms;
        }
        @media screen and (max-width:768px) {
            .text{
                font-size: 1.5rem;
            }
            .sub-text{
                font-size: 1rem;
            }
            .primary-text{
                font-size: 2.5rem;
            }
            .custom-btn{
                width: 5.5rem; 
                height: 2.5rem;
            }
            .profile-img{
                width: 80%;
            }
            .img-fluid{
                height: 100%;
            }
        }
    </style>
</head>
<body class="overflow-x-hidden bg-light">
    <nav class="navbar navbar-expand-md bg-body-tertiary px-lg-5 fixed-top w-100">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text" href="#">Fadhil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="ms-3 collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav grid gap-5 row-gap-1">
                <li class="nav-item text">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item text">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item text">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item text">
                    <a href="component/on-working.php" class="custom-btn btn btn-primary fs-4" role="button">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="home" class="vh-100 d-flex align-items-center pt-5">
        <div class="container pt-5">
            <span class="w-auto mx-auto col-lg-6 float-lg-end mb-3 ms-lg-3 d-flex justify-content-center">
                <img class="profile-img hidden img-fluid" src="assets/bg-profile-img.svg" alt="profil">
            </span>
            <p class="mb-5">
                <span class="primary-delay hidden primary-text">HEY!     </span>
                <span class="primary-delay hidden primary-text fw-bold">I'm Fadhil,</span><br>
                <span class="primary-delay hidden primary-text fw-bold">WEB     </span>
                <span class="primary-delay hidden primary-text">Developer</span><br>
                <span class="hidden delay sub-text">Vocational School Student</span>
            </p>
            <a href="https://www.instagram.com/tlg69.fadhil/"><img class="icon-img img-fluid mb-3 me-3" src="assets/instagram-logo.png" alt="instagram"></a>
            <a href="https://github.com/FadhilKholaf"><img class="icon-img img-fluid mb-3 me-3" src="assets/github-logo.png" alt="github"></a>
            <img class="icon-img img-fluid mb-3 me-3" src="assets/linkedin-logo.png" alt="linkedin">
            <div>
                <a href="component/on-working.php" class="custom-btn btn btn-primary fs-4" role="button">CV</a>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center">
        <hr>
    </div>
    <section id="about" class="vh-100 d-flex align-items-center">
        <div class="container">
            <p class="primary-text fw-bold">About</p>
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col col-9 order-last d-flex justify-content-end">
                            <p class="text-end">
                                <span class="text hidden">Name</span><br>
                                <span class="sub-text hidden delay">Muhammad Fadhil Kholaf</span>
                            </p>
                        </div>
                        <div class="col col-3 align-self-center">
                            <img class="icon-img-about img-fluid" src="assets/name-icon-flaticon.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-9">
                            <p>
                                <span class="text hidden">Experience</span><br>
                                <span class="sub-text hidden delay">Software engineering student</span>
                            </p>
                        </div>
                        <div class="col col-3 align-self-center d-flex justify-content-end">
                            <img class="icon-img-about img-fluid" src="assets/experience-icon-flaticon.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-9 order-last d-flex justify-content-end">
                            <p class="text-end">
                                <span class="text hidden">Hobby</span><br>
                                <span class="sub-text hidden delay">Programming, listening music, and designing</span>
                            </p>
                        </div>
                        <div class="col col-3 align-self-center">
                            <img class="icon-img-about img-fluid" src="assets/hobby-icon-flaticon.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-9">
                            <p>
                                <span class="text hidden">Certificates</span><br>
                                <div>
                                    <a href="component/on-working.php" class="custom-btn btn btn-primary fs-4 hidden delay" role="button">View</a>
                                </div>
                            </p>
                        </div>
                        <div class="col col-3 align-self-center d-flex justify-content-end">
                            <img class="icon-img-about img-fluid" src="assets/certificate-icon-flaticon.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-9 order-last d-flex justify-content-end">
                            <p class="text-end">
                                <span class="text hidden">Project</span><br>
                                <a href="component/on-working.php" class="custom-btn btn btn-primary fs-4 hidden delay" role="button">View</a>
                            </p>
                        </div>
                        <div class="col col-3 align-self-center">
                            <img class="icon-img-about img-fluid" src="assets/project-icon-fad.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="d-flex justify-content-center">
        <hr>
    </div>
    <section id="contact" class="vh-100 d-flex align-items-center">
        <div class="container">
            <p class="primary-text fw-bold">Contact</p>
            <div class="card contact-card">
                <form action="server/server.php" method="post">
                    <div class="container text-light">
                        <div>
                            <label class="mt-2 mb-1 text" for="">Name</label><br>
                            <input name="nama" class="border-0 w-100 rounded" type="text" autocomplete="off" placeholder="Your Name">
                        </div>
                        <div>
                            <label class="mb-1 text" for="">Email</label><br>
                            <input name="email" class="border-0 w-100 rounded" type="email" placeholder="youremail@email.com">
                        </div>
                        <div>
                            <label class="mb-1 text" for="">Message</label><br>
                            <textarea name="message" class="border-0 w-100 rounded" rows="3" type="text" autocomplete="off" placeholder="Text message here"></textarea>
                        </div>
                        <div class="container">
                            <div class="row">
                            <div class="col">
                                <img class="icon-img-about" src="assets/message-icon-flaticon.png" alt="">
                            </div>
                            <div class="col align-self-center d-flex justify-content-end">
                                <input class="custom-btn text-light border-0" type="submit" value="Submit">
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.log(entry)
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }else{
                    entry.target.classList.remove('show');
                }
            });
        });
        const animate = document.querySelectorAll('.hidden');
        animate.forEach((el) => observer.observe(el));
    </script>
</body>
</html>