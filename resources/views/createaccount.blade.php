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

            <form method="POST" action="{{route('createaccount.create')}}" style='width: 50%; margin: auto;'>
            @csrf
                <div class="mb-3" style="width: 50%; text-align: center; margin: auto;">
                    <label for="password" class="form-label">Select your bank</label>
                    <br />
                    <select name="bank" id="bank">
                        @foreach ($banks as $bank)
                            <option value="{{ $bank->id }}">{{$bank->libelle}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3" style="width: 50%; text-align: center; margin: auto;">
                    <label for="balance" class="form-label">Select amount of your account</label>
                    <input type="text" name="balance" class="form-control" id="balance" rows="3" placeholder="65230">
                </div>

                
                <div class="mb-3" style="width: 50%; text-align: center; margin: auto; margin-top: 4vh;">
                    <button style="margin: auto;" type="submit" class="btn btn-primary mb-3">Create account</button>
                </div>

            </form>







    </body>

</html>






