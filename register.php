<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>Clever Dashboard | Made by Ahmad Awan</title>
    <link rel="shortcut icon" href="./assets/img/logos/clever-primary.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/utilities.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/npm/bootstrap-icons-1.7.2/font/bootstrap-icons.css">
</head>

<body>

    <div class="px-5 py-5 p-lg-0 min-h-screen bg-surface-secondary d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="col-lg-5 col-xl-4 p-12 p-xl-20 position-fixed start-0 top-0 h-screen overflow-y-hidden bg-primary d-none d-lg-flex flex-column">
                <a class="d-block" href="#"><img src="./assets/img/logos/clever-light.svg" class="h-10" alt="..."></a>
                <div class="mt-32 mb-20">
                    <h1 class="ls-tight font-bolder display-6 text-white mb-5">Let’s build something amazing today.
                    </h1>
                    <p class="text-white text-opacity-80">Maybe some text here will help me see it better. Oh God.
                        Oke, let’s do it then.</p>
                </div>
                <div class="w-56 h-56 bg-orange-500 rounded-circle position-absolute bottom-0 end-20 transform translate-y-1/3">
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-7 offset-lg-5 border-left-lg min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
                <div class="row">
                    <div class="col-lg-10 col-md-9 col-xl-6 mx-auto ms-xl-0">
                        <div class="mt-10 mt-lg-5 mb-6">
                            <h1 class="ls-tight font-bolder h2">Create your account</h1>
                            <p class="mt-2">It's free and easy</p>
                        </div>
                        <form method="post" action="./signup.php">
                            <div class="mb-5"><label class="form-label" for="name">Name</label>
                                <input type="text" id="name" class="form-control" name="user" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your email address">
                            </div>
                            <div class="mb-5">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" class="form-control" name="pass" id="password" placeholder="Password" autocomplete="current-password" required>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" for="password1">Confirm Password</label>
                                <input type="password" class="form-control" name="pass1" id="password1" placeholder="Password" autocomplete="current-password" required>
                            </div>
                            <div class="mb-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="check_example" id="check-remind-me"> <label class="form-check-label font-semibold text-muted" for="check-remind-me">I agree to the Terms and Conditions, and our Privacy Policy</label>
                                </div>
                            </div>
                            <div>
                                <button type="submit" name="regmit" class="btn btn-primary w-full">Register</button>
                            </div>
                        </form>
                        <div class="py-5 text-center"><span class="text-xs text-uppercase font-semibold">or</span>
                        </div>
                        <div class="hstack gap-4 justify-content-center">
                            <a href="#" class="btn btn-lg btn-square btn-neutral">
                                <span class="icon icon-sm">
                                    <img alt="..." src="./assets/img/social/github.svg">
                                </span>
                            </a>
                            <a href="#" class="btn btn-lg btn-square btn-neutral">
                                <span class="icon icon-sm">
                                    <img alt="..." src="./assets/img/social/google.svg">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="position-lg-absolute bottom-0 end-0 my-8 mx-12 text-center text-lg-end">
                    <small>Already have an account?</small>
                    <a href="./index.php" class="text-warning text-sm font-semibold">Sign in</a>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./assets/js//myscript.js"></script>
</body>

</html>