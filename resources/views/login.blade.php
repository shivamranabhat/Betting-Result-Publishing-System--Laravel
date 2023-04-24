<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom css link -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/login.css">
    <!-- Fontawosome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <section id="login">
        <div class="login-container">
            <div id="log-form" class="position-relative">
                <div class="container forms">
                    <div class="form login">
                        <a href="/" class="text-secondary float-right right-btn"><i class="fa-regular fa-circle-left"></i></span></a>
                        <div class="form-content">
                            <header>Login</header>
                            <form method="POST" action="/users/authenticate">
                                @csrf
                                <div class="field input-field">
                                    <input type="email" placeholder="Email" class="input" id="email" name="email">
                                </div>
                                @error('email')
                                  <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                @enderror
                                <div class="field input-field">
                                    <input type="password" placeholder="Password" class="password" id="password" name="password">
                                    <i class='bx bx-hide eye-icon'></i>
                                    @error('password')
                                        <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-link d-flex justify-content-end">
                                    <a href="#" class="forgot-link">Forgot password?</a>
                                </div>

                                <div class="field button-field">
                                    <button type="submit">Login</button>
                                </div>
                            </form>

                            <div class="form-link">
                                <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="media-options d-flex justify-content-center">
                            <a href="#" target="_blank" class="mr-3">
                                <i class="fa-brands fa-facebook-square"></i>
                            </a>
                            <a href="#" target="_blank" class="mr-3">
                                <i class="fa-brands fa-twitter-square"></i>
                            </a>
                            <a href="#" target="_blank" class="mr-3">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
