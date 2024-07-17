<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split Screen Layout</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 half-screen colored-half d-flex align-items-center justify-content-center">
                <div class="content">
                    <h1 class="text-white">Selamat Datang</h1>
                    <p class="text-white">Selamat Pagi! Pagi! Pagi! Pagi!</p>
                    <img src="image/illus_login.png" class="img_login" alt="Colored half illustration">
                </div>
                <svg class="top-left-curve" viewBox="0 0 400 400" preserveAspectRatio="none">
                    <path d="M0,100 Q90,50 100,0" stroke="white" stroke-opacity="0.5" stroke-width="4" fill="none" />
                </svg>
                <svg class="bottom-right-curve" viewBox="0 -10 50 100" preserveAspectRatio="none">
                    <path d="M20,120 Q30,30 100,100" stroke="white" stroke-width="1" fill="none" />
                </svg>
            </div>
            <div class="col-md-6 half-screen white-half d-flex align-items-center justify-content-center">
                <div class="login-form">
                    <h2>Masuk Akun</h2>
                    <p>Masukan email serta kata sandi anda !</p>
                    <form>
                        <div class="form-group mt-4">
                            <label for="email">Email<span style="color: red">*</span></label>
                            <input type="email" class="form-control" id="email" placeholder="Tulis email anda">
                        </div>
                        <div class="form-group">
                            <label for="password">Password<span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Tulis kata sandi anda">
                        </div>
                        <div class="form-group d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            <a href="#" class="forgot-password-link">Forgot Password?</a>
                        </div>
                        <button class="btn btn-login text-white mt-2">
                            <a href="admin" class="text-white text-decoration-none">
                                Masuk
                            </a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
