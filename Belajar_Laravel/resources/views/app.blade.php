<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Belajar Laravel</title>
    <style>
        .jumbotron {
            padding: 1px;
            background-color: #ffd700;
            opacity: 0.5;
        }

        section {
            padding-top: 4rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#ffd700; opacity: 0.5;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#article">Article</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#portofolio">Portofolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center" style="margin-top: 56px;">
        <img src="image/profile.png" width="140" height="140" class="rounded-circle img-thumbnail" alt="">
        <h1 class="display-4 text-light">Muhammad Fadil</h1>
        <p class="lead text-light">a Programmer</p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffd700" fill-opacity="0.5"
            d="M0,64L0,224L72,224L72,96L144,96L144,192L216,192L216,128L288,128L288,224L360,224L360,192L432,192L432,96L504,96L504,32L576,32L576,256L648,256L648,288L720,288L720,128L792,128L792,224L864,224L864,32L936,32L936,64L1008,64L1008,32L1080,32L1080,192L1152,192L1152,256L1224,256L1224,288L1296,288L1296,96L1368,96L1368,256L1440,256L1440,0L1368,0L1368,0L1296,0L1296,0L1224,0L1224,0L1152,0L1152,0L1080,0L1080,0L1008,0L1008,0L936,0L936,0L864,0L864,0L792,0L792,0L720,0L720,0L648,0L648,0L576,0L576,0L504,0L504,0L432,0L432,0L360,0L360,0L288,0L288,0L216,0L216,0L144,0L144,0L72,0L72,0L0,0L0,0Z">
        </path>
    </svg>
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3 mt-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4 mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, nesciunt earum? Tenetur hic
                        doloribus reprehenderit maiores aut pariatur perferendis quaerat.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, nesciunt earum? Tenetur hic
                        doloribus reprehenderit maiores aut pariatur perferendis quaerat.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffd700" fill-opacity="0.5"
                d="M0,64L0,224L72,224L72,96L144,96L144,192L216,192L216,128L288,128L288,224L360,224L360,192L432,192L432,96L504,96L504,32L576,32L576,256L648,256L648,288L720,288L720,128L792,128L792,224L864,224L864,32L936,32L936,64L1008,64L1008,32L1080,32L1080,192L1152,192L1152,256L1224,256L1224,288L1296,288L1296,96L1368,96L1368,256L1440,256L1440,320L1368,320L1368,320L1296,320L1296,320L1224,320L1224,320L1152,320L1152,320L1080,320L1080,320L1008,320L1008,320L936,320L936,320L864,320L864,320L792,320L792,320L720,320L720,320L648,320L648,320L576,320L576,320L504,320L504,320L432,320L432,320L360,320L360,320L288,320L288,320L216,320L216,320L144,320L144,320L72,320L72,320L0,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="article">
        <div class="container mt-5">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>My Article</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="public/Image/keyboard3.jpg" alt="Profile" class="card-img-top">
                        <div class="card-cody">
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
                                recusandae molestias voluptate adipisci blanditiis. Enim nobis accusamus quia cumque
                                accusantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="public/Image/profile.png" alt="Profile" class="card-img-top">
                        <div class="card-cody">
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
                                recusandae molestias voluptate adipisci blanditiis. Enim nobis accusamus quia cumque
                                accusantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="public/Image/profile.png" alt="Profile" class="card-img-top">
                        <div class="card-cody">
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
                                recusandae molestias voluptate adipisci blanditiis. Enim nobis accusamus quia cumque
                                accusantium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffd700" fill-opacity="0.5"
                d="M0,64L0,224L72,224L72,96L144,96L144,192L216,192L216,128L288,128L288,224L360,224L360,192L432,192L432,96L504,96L504,32L576,32L576,256L648,256L648,288L720,288L720,128L792,128L792,224L864,224L864,32L936,32L936,64L1008,64L1008,32L1080,32L1080,192L1152,192L1152,256L1224,256L1224,288L1296,288L1296,96L1368,96L1368,256L1440,256L1440,320L1368,320L1368,320L1296,320L1296,320L1224,320L1224,320L1152,320L1152,320L1080,320L1080,320L1008,320L1008,320L936,320L936,320L864,320L864,320L792,320L792,320L720,320L720,320L648,320L648,320L576,320L576,320L504,320L504,320L432,320L432,320L360,320L360,320L288,320L288,320L216,320L216,320L144,320L144,320L72,320L72,320L0,320L0,320Z">
            </path>
        </svg>
    </section>
    </di>
    <section id="portofolio">
        <div class="container mt-5">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Portofolio</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/600x400" alt="Profile" class="card-img-top">
                        <div class="card-cody">
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
                                recusandae molestias voluptate adipisci blanditiis. Enim nobis accusamus quia cumque
                                accusantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/600x400" alt="Profile" class="card-img-top">
                        <div class="card-cody">
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
                                recusandae molestias voluptate adipisci blanditiis. Enim nobis accusamus quia cumque
                                accusantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <img src="https://source.unsplash.com/600x400" alt="Profile" class="card-img-top">
                    <div class="card">
                        <div class="card-cody">
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
                                recusandae molestias voluptate adipisci blanditiis. Enim nobis accusamus quia cumque
                                accusantium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffd700" fill-opacity="0.5"
                d="M0,64L0,224L72,224L72,96L144,96L144,192L216,192L216,128L288,128L288,224L360,224L360,192L432,192L432,96L504,96L504,32L576,32L576,256L648,256L648,288L720,288L720,128L792,128L792,224L864,224L864,32L936,32L936,64L1008,64L1008,32L1080,32L1080,192L1152,192L1152,256L1224,256L1224,288L1296,288L1296,96L1368,96L1368,256L1440,256L1440,320L1368,320L1368,320L1296,320L1296,320L1224,320L1224,320L1152,320L1152,320L1080,320L1080,320L1008,320L1008,320L936,320L936,320L864,320L864,320L792,320L792,320L720,320L720,320L648,320L648,320L576,320L576,320L504,320L504,320L432,320L432,320L360,320L360,320L288,320L288,320L216,320L216,320L144,320L144,320L72,320L72,320L0,320L0,320Z">
            </path>
        </svg>
    </section>
    </div>

    <footer class="text-white text-center pb-5" style="background-color: #ffd700; opacity:0.5">
        <p>created with <i class="bi bi-heart-fill text-danger"></i>by
            <a href="Sassan20.github.io" class="text-white fw-bold">Muhammad Fadil</a>
        </p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>