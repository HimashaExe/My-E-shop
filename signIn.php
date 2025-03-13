<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-bookstore</title>
    <link rel="icon" href="resources/logo.jpg">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="w-100 m-auto">
                <div class="row">

                    <div class="offset-4 col-12 col-lg-4 mt-5 boder border-dark rounded d-block" id="signInBox">
                        <div class="row">

                            <div class="col-12 mt-auto mb-3">
                                <div class="logo"></div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email">
                                    <label for="email">Email Address</label>
                                </div>

                                <div class="form-floating mt-3 mb-3">
                                    <input type="password" class="form-control" id="pw">
                                    <label for="pw">Password</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="rm">
                                    <label class="from-check-lable" for="rm">Remember Me</label>
                                </div>

                                <label class="form-lable mb-3">
                                    <b>Forgotten Password</b>
                                    <a class="link-primary text-decoration-none" href="#">Click here</a>
                                </label>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-primary">Sign In</button>
                                    </div>

                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-dark" onclick="changeView();">Register Now</button>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="offset-4 col-12 col-lg-4 mt-3 boder border-dark rounded d-none op-2" id="signUpBox">
                        <div class="row">

                            <div class="col-12 mt-auto mb-3">
                                <div class="logo"></div>
                            </div>

                            <div class="col-12">
                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="fname">
                                            <label for="fname">First Nmae</label>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="lname">
                                            <label for="lname">Last Nmae</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email2">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="mobile">
                                            <label for="email">Mobile Number</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="pw1">
                                            <label for="email">New Password</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="pw2">
                                            <label for="email">Re-type Password</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6 d-grid mt-3">
                                        <button class="btn btn-primary" onclick="registerNow();">Register Now</button>
                                    </div>

                                    <div class="col-12 col-lg-6 d-grid mt-3">
                                        <button class="btn btn-dark" onclick="backToSignIn();">Back to Sign In</button>
                                    </div>

                                    <div class="divider d-flex align-items-center my-4">
                                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                                    </div>

                                    <div class="col-12 d-grid">
                                        <a href="#" class="btn btn-primary" style="background-color: #3b5998;">
                                        <i class="bi bi-facebook me-2"></i>Continue with Facebook
                                        </a>
                                    </div>

                                    <div class="col-12 d-grid mt-3">
                                        <a href="#" class="btn btn-light" style="background-color:#747775;">
                                        <i class="bi bi-google me-2 h4"></i>Continue with Google
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

<script src="js/script.js"></script>
</body>

</html>