<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Background styling with blur effect */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('images/2d-1.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            filter: blur(5px);
            z-index: -1;
        }

        /* Content styling */
        .content-container {
            position: relative;
            z-index: 1;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: gray;
        }

        .password-toggle:hover {
            color: black;
        }
    </style>
</head>
<body>
    <!-- Background Image -->
    <div class="background"></div>

    <!-- Content Container -->
    <div class="container mt-5 content-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card for styling -->
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email" required autofocus>
                                @if ($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="mb-3 position-relative">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password" class="form-control" placeholder="Enter your password" required>
                                <i class="bi bi-eye-slash-fill password-toggle" id="togglePassword"></i>
                                @if ($errors->has('password'))
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                @endif
                            </div>

                            <!-- Remember Me -->
                            <div class="mb-3 form-check">
                                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                <label for="remember_me" class="form-check-label">
                                    Remember me
                                </label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/forgot-password" class="text-decoration-none text-primary">
                                    Forgot your password?
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Log in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Password Toggle Script -->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordField = document.querySelector('#password');

        togglePassword.addEventListener('click', () => {
            // Toggle the password field type between 'password' and 'text'
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Toggle the eye icon
            togglePassword.classList.toggle('bi-eye-fill');
            togglePassword.classList.toggle('bi-eye-slash-fill');
        });
    </script>
</body>
</html>
