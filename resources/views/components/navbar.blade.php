<!-- section navbar-->
<section id="navbar" class="position-relative">
    <div class="sticky-nav">
      <div class="navbar align-items-center py-4 w-100">
        <div class="logo">
          <h5 class="mt-2">BetX</h5>
        </div>
        <div class="navigation-bar ">
          <div class="link  py-2 mt-2 mr-1">
            <h6>
              <a href="{{route('home')}}" class="text-uppercase text-white {{(request()->segment(1)=='')?'active':''}}">Home</a>
            </h6>
          </div>
          <div class="link  py-2 mt-2 mr-1">
            <h6>
              <a href="{{route('our_games')}}" class="text-uppercase text-white {{(request()->segment(1)=='games')?'active':''}}">Games</a>
            </h6>
          </div>
          <div class="link  py-2 mt-2 mr-1">
            <h6>
              <a href="{{route('about')}}" class="text-uppercase text-white {{(request()->segment(1)=='about')?'active':''}}">About</a>
            </h6>
          </div>
          <div class="link  py-2 mt-2 mr-5">
            <h6>
              <a href="#" class="text-uppercase text-white">FAQ</a>
            </h6>
          </div>
          <div class="end-info d-flex justify-content-around align-items-center">
            <div class="contact-btn mt-1 rounded">
              <button class="text-white mr-5">CONTACT US</button>
            </div>
            <div class="join-btn mt-1 rounded">
              <button>JOIN BETX</button>
            </div>
          </div>
        </div>
        <div class="bars mt-2 ml-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </div>
      </div>
    </div>
  </section>
  <!-- section navbar-->
 <!-- section sidebar -->
 <section id="sidebar">
    <div class="sidebar box-shadow text-center">
      <div class="top-header mt-5">
        <div class="logo">
          <h5 class="mt-2">BetX</h5>
        </div>
      </div>
      <div class="side-nav">
        <div class="side-bar">
          <div class="link px-4 py-2 mt-4">
            <h6>
              <a href="{{route('home')}}" class="text-uppercase home {{(request()->segment(1)=='')?'active':''}}">Home</a>
            </h6>
          </div>
          <div class="link px-4 py-2 mt-4">
            <h6>
              <a href="{{route('our_games')}}" class="text-uppercase {{(request()->segment(1)=='games')?'active':''}}">Games</a>
            </h6>
          </div>
          <div class="link px-4 py-2 mt-4">
            <h6>
              <a href="{{route('about')}}" class="text-uppercase {{(request()->segment(1)=='about')?'active':''}}">About</a>
            </h6>
          </div>
          <div class="link px-4 py-2 mt-4">
            <h6>
              <a href="#" class="text-uppercase">FAQ</a>
            </h6>
          </div>
          <div class="link px-4 py-2 mt-4">
            <h6>
              <a href="#" class="text-uppercase contact">Contact us</a>
            </h6>
          </div>
          <div class="link px-4 py-2 mt-4">
            <h6>
              <a href="#" class="text-uppercase join">JOIN BETX</a>
            </h6>
          </div>
        </div>
      </div>
      <div class="social-links position-absolute">
        <p class="text-center text-uppercase text-white">Socialize with Betx</p>
        <div class="icons">
          <a href="#" class="mr-2"><i class="lab la-facebook-f"></i></a>
          <a href="#" class="mr-2"><i class="lab la-instagram"></i></a>
          <a href="#"><i class="lab la-twitter"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- section sidebar -->
