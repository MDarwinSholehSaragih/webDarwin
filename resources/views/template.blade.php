<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>


    <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-3" href="#">Fabel Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" aria-current="page" href="{{route('beranda')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{route('produk')}}">Data Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{route('karyawan')}}">Data Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{route('supplier')}}">Data Supplier</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST" id="logout-form" style="display: none">
                            @csrf
                        </form>
                        <a class="nav-link fw-semibold text-danger" href="#" onClick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="footer w-auto text-center bg-black mt-5 text-light">
        <p class="p-2 fw-semibold fs-5">&copy; Copyright : Store Terpercaya Fabel</p>
    </div>

    <script>
        feather.replace();
      </script>

</body>
</html>
