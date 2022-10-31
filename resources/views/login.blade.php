<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <style>
        .mt-5 {
         margin-top: 9rem !important;
        
      } 
    </style>
</head>
<body>
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card text-primary">
                        <div class="card-header">
                            <div class="card-title">User Login</div>
                        </div>
                        <div class="card-body text-primary">
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                    </div>
                                @endif
                            <form class="pt-3" method="POST" action="{{route('userLogin')}}">
                                @csrf
                                <div class="class-form-group">
                                    <input type="email" name="email" id="" class="form-control" placeholder="Enter Email">
                                </div>
                                <br>
                                <div class="class-form-group">
                                    <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
                                </div>
                               
                                <button type="submit" class="btn btn-primary mt-2">Login</button>
                            
                                
                            </form>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
