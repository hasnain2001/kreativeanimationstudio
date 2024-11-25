<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (for eye icon) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Background styling */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('assets/img/details-4.png') no-repeat center center fixed;
            background-size: cover;
            filter: blur(5px);
            z-index: -1;
        }

        /* Content container styling */
        .content-container {
            position: relative;
            z-index: 1;
        }

        .text-danger {
            color: red;
        }

        .fa-eye {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="background"></div>

    <div class="container content-container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/register">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" class="form-control" type="text" name="name" required autofocus>
                                <!-- Display error -->
                                <div class="text-danger mt-2" id="name-error"></div>
                            </div>

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" class="form-control" type="email" name="email" required>
                                <!-- Display error -->
                                <div class="text-danger mt-2" id="email-error"></div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3 position-relative">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" class="form-control" type="password" name="password" required>
                                <button type="button" class="btn btn-sm btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2" onclick="togglePassword('password')">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <!-- Display error -->
                                <div class="text-danger mt-2" id="password-error"></div>
                            </div>

                            <!-- Confirm Password -->
                           <!-- Confirm Password -->
                           <div class="mb-3 position-relative">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                            <button type="button" class="btn btn-sm btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2" onclick="togglePassword('password_confirmation')">
                                <i class="fa fa-eye"></i>
                            </button>
                            <!-- Display error -->
                            <div class="text-danger mt-2" id="password-confirmation-error"></div>
                        </div>
                        
                            <!-- Already Registered -->
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="text-primary text-decoration-none" href="/login">
                                    Already registered?
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
  function togglePassword(id) {
    const input = document.getElementById(id);
    const type = input.type === "password" ? "text" : "password";
    input.type = type;

    // Update the icon dynamically
    const icon = input.nextElementSibling.querySelector('i');
    icon.classList.toggle('fa-eye');
    icon.classList.toggle('fa-eye-slash');
}


    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
