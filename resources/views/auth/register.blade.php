{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    @if(session('registerError'))
        <p style="color: red">{{ session('registerError') }}</p>
    @endif
    <form action="/register" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html> --}}


    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-5"><br>

            <main class="form-registration w-100 m-auto">
                <img src="logo-uwp1-removebg-preview.png" class="rounded mx-auto d-block" alt="..." width="100" height="100">
                <h1 class="h3 mb-3 fw-normal text-center ">Registrasi</h1>
                <form action="/register" method="POST">
                    @csrf

                    <div class="form-floating">
                        <label for="name"><i class='bx bxs-user'></i>Name</label>
                        <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                            id="name" placeholder="name" required value="{{ old('name') }}"><br>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="alamat"><i class='bx bxs-home'></i>alamat</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                            id="alamat" placeholder="gresik,benjeng jln.ahmad yani" required required
                            value="{{ old('alamat') }}"><br>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="phone"><i class='bx bxs-phone'></i>phone</label>
                        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                            id="phone" placeholder="phone" required required value="{{ old('phone') }}"><br>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="email"><i class='bx bxs-envelope' ></i>Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required required value="{{ old('email') }}"><br>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="password"><i class='bx bxs-lock-alt' ></i>Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div><br>

                    <button class="btn btn-primary w-100 py-2" type="submit">Registrasi</button>

                </form>
                <small class="d-block text-center mt-3">sudah punya akun? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>

