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

            <nav class="navbar navbar-expand-lg bg-body-tertiary"style='background-color: lightgray'>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bank</a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('createaccount')}}">Create account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <p style='text-align: center; margin-top: 4vh;'>
                {{__('Hello '). Auth::user()->first_name . __(' '). Auth::user()->last_name}}, below are your bank accounts.
                You can always create one by accessing the "Create account" page
            </p>



    </body>

</html>






