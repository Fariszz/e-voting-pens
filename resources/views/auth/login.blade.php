<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- My Css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Font Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Web Icon -->
    <link rel="icon" href="/storage/images/web-icon.png">
    <title>e-Voting</title>
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand d-lg-none" href="#">
                    <img src="assets/img/nav-logo.png" alt="" width="40" height="40"
                        class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav gap-4">
                        <li class="nav-item">
                            <a class="nav-link active nav-text" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-text active" href="/candidate">Candidate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-text active" href="/announcement">Announcement</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}">
                                <button type="button" class="btn btn-primary nav-text">Login</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="container-fluid body-text p-t-125 m-b-200">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 d-none d-lg-block">
                    <img src="/storage/images/hero-login.png" alt="landing" class="img-fluid m-l-50">
                </div>
                <div class="col-lg-5 p-t-30 m-l-125 mx-auto">
                    <form class="validate-form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <span class="login100-form-title">
                            Login to
                            <h3 class="secondary-text m-t-20">e-Voting Polinema</h3>
                        </span>
                        <div class="p-b-40">
                            <div class="wrap-input100 validate-input" data-validate="Valid ID is required">
                                <input class="input100 @error('nim') is-invalid @enderror" type="text" name="nim" id="nim" type="text" placeholder="Student NIM" value="{{ old('nim') }}" required autofocus>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="p-b-20">
                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end p-t-12">
                            <span class="txt1">
                                Forgot
                            </span>
                            <a class="txt2" href="#">
                                Password?
                            </a>
                        </div>
                        <div class="d-grid gap-2 col-12 mx-auto p-t-20">
                            <button class="btn-primary btn btn-lg" type="submit">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-footer d-flex justify-content-center">
        <div class="container body-text">
            <footer class="row row-cols-5 py-5 my-5 border-top">
                <div class="col">
                    <h2 class="text-white">Mother's Pray</h2>
                </div>
                <div class="col col-2">
                </div>
                <div class="col text-white">
                    <h5 class="text-decoration-underline m-b-10">Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.html" class="text-white nav-link p-0">Home</a></li>
                        <li class="nav-item mb-2"><a href="login.html" class="text-white nav-link p-0">Login</a></li>
                        <li class="nav-item mb-2"><a href="vote.html" class="text-white nav-link p-0">Voting</a></li>
                        <li class="nav-item mb-2"><a href="candidate.html" class="text-white nav-link p-0">Candidate</a>
                        </li>
                        <li class="nav-item mb-2"><a href="announcement.html"
                                class="text-white nav-link p-0">Announcement</a></li>
                    </ul>
                </div>

                <div class="col text-white">
                    <h5 class="text-decoration-underline m-b-10">Others</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="text-white nav-link p-0">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col text-white">
                    <h5 class="text-decoration-underline m-b-10">Address</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="text-white nav-link p-0 disabled">State Polytechnic
                                of Malang</a></li>
                        <li class="nav-item mb-2"><a href="#" class="text-white nav-link p-0 disabled">(Politeknik
                                Negeri Malang)</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>
