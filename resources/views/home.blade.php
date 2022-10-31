<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card text-primary">
                        <div class="card-header">
                            <div class="card-title">Home
                                <a class="text-danger offset-9" href="{{route('logout')}}">Logout</a>
                            </div>
                        </div>
                        <div class="card-body text-primary">
                            <h1>This is Home page</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
