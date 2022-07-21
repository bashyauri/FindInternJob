<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    .navbar {
        background-color: #576F72;

    }

    .nav-link {
        color: #F0EBE3;
    }

    a {
        color: #E4DCCF;
    }

    a:hover {
        color: #E4DCCF;
    }

    .nav-link:hover {
        color: #E4DCCF;
    }

    span {
        color: #7D9D9C;
        font-weight: bold;
    }

    h3 {
        color: #576F72
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">internToYou</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('category.show', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach



                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-6 px-5">


        <div class="row mb-2">
            @foreach ($posts as $posting)
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0 mb-4">Company</h3>
                            <strong class="d-inline-block mb-2 text-success">{{ $posting->title }}</strong>

                            <div class="mb-1 text-muted">Address: {{ $posting->address }}</div>
                            <p class="card-text mb-auto"><span>Requirement:</span>
                                {{ $posting->requirements }}.</p>

                        </div>

                    </div>
                </div>
            @endforeach


        </div>
        {{ $posts->links() }}


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</body>

</html>
