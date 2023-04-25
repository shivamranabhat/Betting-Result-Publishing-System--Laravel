<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/admin.css">
	<title>BetX</title>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<span class="text logo"><img src="http://127.0.0.1:8000/images/admin-logo.png" alt=""></span>
		</a>
		<ul class="side-menu top">
			<li class="{{(request()->segment(2)=='home') ? 'active' : ''}}">
				<a href="{{route('index')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
            <li>
				<a href="#">
					<i class='bx bxs-user' ></i>
					<span class="text">Users</span>
				</a>
			</li>
			<li class="{{(request()->segment(2)=='games')?'active':''}}">
				<a href="{{route('games')}}">
					<i class='bx bxs-game' ></i>
					<span class="text">Games</span>
				</a>
			</li>
			<li class="{{(request()->segment(2)=='time')?'active':''}}">
				<a href="{{route('timing')}}">
					<i class='bx bxs-time' ></i>
					<span class="text">Time</span>
				</a>
			</li>
			<li class="{{(request()->segment(2)=='result')?'active':''}}">
				<a href="{{route('results')}}">
					<i class='bx bxs-report'></i>
					<span class="text">Results</span>
				</a>
			</li>
            <li>
				<a href="#">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Message</span>
				</a>
			</li>
            <li class="{{(request()->segment(2)=='privacy')?'active':''}}">
				<a href="{{route('privacy')}}">
					<i class='bx bxs-lock-alt'></i>
					<span class="text">Privacy Policy</span>
				</a>
			</li>
            <li class="{{(request()->segment(2)=='terms')?'active':''}}">
				<a href="{{route('terms')}}">
					<i class='bx bxs-report'></i>
					<span class="text">Terms & Conditions</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li class="logout">
                <form action="/logout" method="post">
                    @csrf
                        <button type="submit" class="btn log-btn mt-2 d-flex text-danger align-items-center"><i class='bx bxs-log-out-circle'></i>
                            <span type="submit" class="text">Logout</span>
                        </button>
                </form>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
	<!-- CONTENT -->
	<section id="content">

		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Admin</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			{{-- <a href="#" class="profile">
				<img src="img/people.png">
			</a> --}}
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
             {{-- Flash message --}}
            @if (session()->has('message'))
                <div class="flash-message text-center" id="flash">
                <h5> {{ session('message') }}</h5>
                </div>
            @endif
                {{$slot}}
            </main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="http://127.0.0.1:8000/js/admin.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.5.1.min.js"></script>
    {{-- script to hide flash message --}}
    <script>
        $(document).ready(function() {
        var flash= $('#flash');

        // hide the div after 5 seconds
        setTimeout(function() {
            flash.hide();
        }, 2000);
        });
    </script>
    {{-- script to display selected image --}}
    <script>
        $(document).ready(function() {
            $('#image').change(function() {
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imageResult').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    $('#imageResult').attr('src', 'http://127.0.0.1:8000/images/preview.png');
                }
            });
        });
    </script>

</body>
</html>
