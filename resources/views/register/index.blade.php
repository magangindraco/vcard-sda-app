{{-- 
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
    </div> --}}


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet"> <!-- Boxicons CDN -->
    <title>Register</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .main-container {
            display: flex;
            height: 100vh;
        }

        .left-side {
            width: 50%;
            background-image: url('images/OIP.jpeg');
            background-size: cover;
            background-position: center;
        }

        .right-side {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            color: #6c757d;
        }

        .form-control {
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .btn-primary {
            border-radius: 10px;
            background-color: #6c757d;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #495057;
        }

        .alert {
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .form-floating label {
            margin-bottom: 8px;
        }

        .form-container small {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Left side with background image -->
        <div class="left-side"></div>

        <!-- Right side with registration form -->
        <div class="right-side">
            <div class="form-container">
                <h1>Registrasi</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                               id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" placeholder="email" required value="{{ old('email') }}">
                        <label for="email">email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating position-relative">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                               id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        <i class="bx bxs-show eye-icon" id="togglePassword" 
                           style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Registrasi</button>
                </form>
                <small>Sudah punya akun? <a href="/login">Login</a></small>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const passwordField = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);

            // toggle the eye icon
            this.classList.toggle("bxs-show");
            this.classList.toggle("bxs-hide");
        });
    </script>
</body>

</html>
