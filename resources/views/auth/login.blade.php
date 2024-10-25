

    <style>
        .main {
            height: 100vh;
            box-sizing: border-box;
            background-image: url(background.jpg);
            -webkit-background-size: cover;
            background-size: cover;
        }
    </style>
    
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-5">


            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <img src="logo-uwp1-removebg-preview.png" class="rounded mx-auto d-block" alt="..." width="100" height="100">



                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                <form action="/login" method="POST">
                    @csrf

                    <div class="form-floating">
                        <label for="email"><i class='bx bxs-envelope'></i>Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" autofocus required
                            value="{{ old('email') }}"><br>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="password"><i class='bx bxs-lock-alt'></i>Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                            
                    </div><br>

                    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>

                </form>
                <small class="d-block text-center mt-3">belum punya akun yaa? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
    
