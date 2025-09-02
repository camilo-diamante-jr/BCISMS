<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/import.css" />
    <link rel="stylesheet" href="/css/login.css" />
    <script src="/js/jquery-3.7.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>




</head>

<body class="">
    <main class="wrapper">
        <section class="content">
            <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
                <div class="w-100 col-md-5 m-auto">
                    <div class="card">
                        <form id="loginSubmitForm">
                            <div class="card-body">
                                <div class="header-text text-center mb-3">
                                    <figure>
                                        <img src="/assets/images/logo/pulao-logo.jpg" alt="Pulao Logo" class="img-fluid" width="100">
                                    </figure>

                                    <h2 class="text-center fw-bold my-0">Barangay Pulao</h2>
                                    <p class="text-center text-muted my-0">
                                        <i class="fa fa-address"></i> Dumangas, Iloilo
                                    </p>
                                    <p class="my-0 text-navy fw-bold mt-2" style="font-size: 13.5px;">Constituent Information & Services Management System</p>
                                    <p><small class="text-muted">Smarter, faster, and more connected barangay services</small></p>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required />
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleInputPassword1">Password</label> -->
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                        <label class="custom-control-label" for="exampleCheck1"> Rember me</label>
                                    </div>
                                </div>

                                <div class="text-center mt-3">
                                    <button type="submit" class="btn mb-3 bg-navy w-100">LOG IN</button>
                                    <a href="#" class="">Forgot password?</p>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="/js/modules/auth/login.js"></script>
</body>

</html>