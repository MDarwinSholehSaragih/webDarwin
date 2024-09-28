<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}">

    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        .login{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 5rem;
        }
        a{
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>

    </div>
    <div class="login">
        <div class="card mt-5 border-0 shadow">
            <div class="card-body">
            <div class="p-3">
                <img src="{{asset('img/user-v-1.png')}}" alt="" srcset="" width="70"  class="rounded mx-auto d-block mb-3">

                <form action="{{route('simpan_register')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                      <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                      </div>
                    <button type="submit" class="btn btn-sm btn-primary">Register</button>
                    <a href="{{route('login')}}">Have Account?</a>
                  </form>
                 </div>
            </div>
        </div>
    </div>

    <script>
        feather.replace();
      </script>
</body>
</html>
