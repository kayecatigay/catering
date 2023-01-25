<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container bg=#fff my-5">
            <br>
            <form action="http://localhost/CReservation/Main/saveuserdata"  method="POST">

            <div class="form-outline mb-4">
                <input type="text" id="fname" name="fname" class="form-control" />
                <label class="form-label" for="form2Example1">First name</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="lname" name="lname" class="form-control" />
                <label class="form-label" for="form2Example1">Last name</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="pass" name="pass" class="form-control"/>
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="add" name="add" class="form-control"/>
                <label class="form-label" for="form2Example2">Address</label>
            </div>

            <div class="form-outline mb-4">
                <input type="contactnum" id="contactnum" name="contactnum" class="form-control" />
                <label class="form-label" for="form2Example2">Contact Number</label>
            </div>
            
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="emailadd" name="emailadd" class="form-control" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                
                

                <!-- <div class="col"> -->
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            

            <!-- Register buttons -->
            <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block mb-4 center">Sign in</button>
                
            </div>
            </form>

        </div>
    </body>
</html>