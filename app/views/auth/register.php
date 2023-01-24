<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container bg=#fff my-5">
            <br>
            <form>

            <div class="form-outline mb-4">
                <input type="fname" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">First name</label>
            </div>

            <div class="form-outline mb-4">
                <input type="lname" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Last name</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <div class="form-outline mb-4">
                <input type="address" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Address</label>
            </div>

            <div class="form-outline mb-4">
                <input type="contactnum" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Contact Number</label>
            </div>
            
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
                </div>

                <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            

            <!-- Register buttons -->
            <div class="text-center">
                <button type="button" class="btn btn-primary btn-block mb-4 center">Sign in</button>
                <p>Not a member? <a href="#!">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
                </button>
            </div>
            </form>

        </div>
    </body>
</html>