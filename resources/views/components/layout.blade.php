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
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
              </svg>
			<span class="text logo">BetX</span>
		</a>
		<ul class="side-menu top">
			<li class="{{(request()->segment(2)=='admin') ? 'active' : ''}}">
				<a href="{{route('index')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			{{-- <li class="{{(request()->segment(2)=='users') ? 'active' : ''}}"> --}}
            <li>
				<a href="#">
					<i class='bx bxs-user' ></i>
					<span class="text">Users</span>
				</a>
			</li>
			{{-- <li class="{{(request()->segment(2)=='games')?'active':''}}"> --}}
            <li>
				<a href="#">
					<i class='bx bxs-game' ></i>
					<span class="text">Games</span>
				</a>
			</li>
			<li class="#">
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Teams</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-image-add'></i>
					<span class="text">Avatars</span>
				</a>
			</li>
            <li>
				<a href="#">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Message</span>
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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $('#upload').on('change', function () {
                readURL(input);
            });
        });

        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );

        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
          var input = event.srcElement;
          var fileName = input.files[0].name;
          infoArea.textContent = 'File name: ' + fileName;
        }
   </script>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="http://127.0.0.1:8000/js/admin.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
        var flash= $('#flash');

        // hide the div after 5 seconds
        setTimeout(function() {
            flash.hide();
        }, 2000);
        });
    </script>
</body>
</html>
