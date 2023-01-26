<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container bg=#fff my-5">
            <br>
            <form action="http://localhost/CReservation/Main/saveuserdata"  method="POST">

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="emailadd" name="emailadd" class="form-control" placeholder="user@company.com" required />
                <label class="form-label" for="form2Example1">Email address <span class="text-danger">*</span></label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="pass" name="pass" class="form-control" required />
                <label class="form-label" for="form2Example2">Password <span class="text-danger">*</span></label>
            </div>            

            <div class="form-outline mb-4">
                <input type="text" id="fname" name="fname" class="form-control" />
                <label class="form-label" for="form2Example1">First name</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="lname" name="lname" class="form-control" />
                <label class="form-label" for="form2Example1">Last name</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="add" name="add" class="form-control"/>
                <label class="form-label" for="form2Example2">Address</label>
            </div>

            <div class="form-outline mb-4">
                <input type="contactnum" id="contactnum" name="contactnum" class="form-control" />
                <label class="form-label" for="form2Example2">Contact Number</label>
            </div>
            
            
             <!-- Register buttons -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block mb-4 center">Register</button>
            </div>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Already a member? <a href="http://localhost/CReservation/Main/login">Sign in</a></p>
                
            </div>

            </form>

        </div>
    </body>
</html>