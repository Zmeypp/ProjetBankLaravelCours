<!DOCTYPE html>
<html>
    <head>
        <title>Banking</title>	
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <script src='js/jquery-3.2.1.min.js'></script>
        <script src='js/popper.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
    </head>
  
    <body>

        <form method="POST" action="{{route('register.create')}}">
            @csrf

            <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 40%; margin: auto; margin-top: 13vh;">

                <div class="mb-3" style="width: 50%; text-align: center; margin: auto;">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" row="3">
                </div>

                <div class="mb-3" style="width: 50%; text-align: center; margin: auto;">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" rows="3">
                </div>

                <div class="mb-3" style="width: 50%; text-align: center; margin: auto;">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" rows="3">
                </div>

                <div class="mb-3" style="width: 50%; text-align: center; margin: auto;">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" id="phone_number" rows="3">
                </div>
                
                <div class="mb-3" style="width: 50%; text-align: center; margin: auto;">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" rows="3">
                </div>

                <div class="mb-3" style="width: 50%; text-align: center; margin: auto;">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" rows="3">
                </div>

                <div class="mb-3" style="width: 50  %; text-align: center; margin: auto; margin-top: 4vh;">
                    <button style="margin: auto;" type="submit" class="btn btn-primary mb-3">Register</button>
                </div>

            </div>

        </form>

    </body>

</html>