<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">


    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: left;
            max-width: 500px;
            width: 300px;
            margin-top: 20px;
            /* background-color:solid red; */
        }

        h1 {
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
            justify-content: center;
            align-items: center;

        }

        .form-group {
            margin-bottom: 15px;

        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;

        }

        input[type="text"],
        input[type="password"] {
            width: 93%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        input[type="text"]:hover {
            background-color: lightblue;
        }

        input[type="password"]:hover {
            background-color: lightblue;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;

        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .jammu {
            background-color: white;
            padding: 70px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 350px;
            width: 100%;
            margin: 100px;
        }

        .form-group {
            position: relative;
            width: 100%;
            margin-bottom: 15px;
        }

        .password-container {
            position: relative;
            width: 97%;
        }

        #password {
            width: calc(100% - 40px);
            padding-right: 40px;
            padding-left: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-toggle-password {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 3px;
            border: none;
            background: none;
            cursor: pointer;
            z-index: 1;
        }

        .btn-toggle-password i {
            font-size: 16px;
        }

        .dropdown {
    position: absolute;
    top: 20px;
    right: 20px;
}

.dropbtn {
    background-color: #007bff;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.show {
    display: block;
}


    </style>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="text-center">
        <div class="text-center">
            <h1>{{ __('lang.jammu_university') }}</h1>
        </div>
        <div class="login-container ml-100" style="margin=left:0px">
            <div class ="show-alert">
                @if (session('error'))
                    <div class="alert alert-danger"
                        style="background-color: #f8d7da; color: #721c24; border-color: #f5c6cb; padding: 0.75rem 1.25rem; border-radius: 0.25rem; margin-bottom: 1rem;">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <h1>{{ __('lang.login_cont') }}</h1>
            <form method="GET" action="/check/login">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('lang.email_') }}:</label>
                    <input type="text" id="email" name="email" required>
                    @error('email')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ __('lang.password_') }}:</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" required>
                        <button class="btn-toggle-password" type="button" onclick="togglePasswordVisibility()">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>


                <div class="form-group">
                    <input type="submit" value="{{ __('lang.Login_') }}">

                </div>
                <div class="forgot-password">
                    <a style="text-decoration:none;"href="/forget-password">{{ __('lang.Forgot_Password') }}?</a>
                </div>
            </form>
        </div>
    </div>
    <!-- Language selection -->
<nav class="navbar">
    <div class="dropdown">
        <button onclick="toggleDropdown()" class="dropbtn">Select Language <i class="fas fa-caret-down"></i></button>
        <div id="languageDropdown" class="dropdown-content">
            <a href="{{ route('changeLanguage', ['lang' => 'en']) }}">English</a>
            <a href="{{ route('changeLanguage', ['lang' => 'hi']) }}">Hindi</a>
            <a href="{{ route('changeLanguage', ['lang' => 'spa']) }}">Spanish</a>
            <a href="{{ route('changeLanguage', ['lang' => 'arab']) }}">Arabic</a>
        </div>
    </div>
</nav>



</body>
</html>
<script>
function togglePasswordVisibility() {
    var passwordField = document.getElementById('password');
    var btnToggle = document.querySelector('.btn-toggle-password');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        btnToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        passwordField.type = 'password';
        btnToggle.innerHTML = '<i class="fas fa-eye"></i>';
    }
}

function toggleDropdown() {
    var dropdown = document.getElementById("languageDropdown");
    dropdown.classList.toggle("show");
}

function setLanguage(languageCode) {
    // Perform actions to set language (e.g., change labels, content, etc.)
    // For example:
    if (languageCode === 'en') {
        // Change language to English
        // Update labels, placeholders, etc. with English translations
    } else if (languageCode === 'es') {
        // Change language to Spanish
        // Update labels, placeholders, etc. with Spanish translations
    }

    // Close the dropdown after language selection
    var dropdown = document.getElementById("languageDropdown");
    dropdown.classList.remove("show");
}

</script>
