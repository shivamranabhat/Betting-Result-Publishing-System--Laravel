 <!-- footer section -->
 <section id="footer">
    <div class="footer p-5">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-6 col-lg-3 margin line" id="brand">
            <a href="/"><img src="http://127.0.0.1:8000/images/logo.png" alt="logo"></a>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 margin line" id="menus">
          <p class="footer-head">Quick Links</p>
          <div class="links">
            <a href="{{route('home')}}" class="d-block {{(request()->segment(1)=='')?'active':''}}">
              Home
            </a>
            <a href="{{route('our_games')}}" class="d-block {{(request()->segment(1)=='games')?'active':''}}">
              Games
            </a>
            <a href="{{route('about')}}" class="d-block {{(request()->segment(1)=='about')?'active':''}}">
              About
            </a>
            <a href="#" class="d-block">
              FAQ
            </a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 line" id="links">
          <p class="footer-head">Important Links</p>
          <div class="links">
            <a href="{{route('privacy_policy')}}" class="d-block {{(request()->segment(1)=='privacy policy')?'active':''}}">
              Privacy Policy
            </a>
            <a href="{{route('user_terms')}}" class="d-block {{(request()->segment(1)=='terms & conditions')?'active':''}}">
              Terms & Conditions
            </a>
            <a href="#" class="d-block">
              Contact
            </a>
            <a href="#" class="d-block">
              Join BETX
            </a>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="social-links">
            <p>Socialize with BETX</p>
            <div class="icons">
              <a href="#" class="mr-2"><i class="lab la-facebook-f"></i></a>
              <a href="#" class="mr-2"><i class="lab la-instagram"></i></a>
              <a href="#"><i class="lab la-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="rights">
        <p class="text-center">2023 © BETX- A Betting PLATFORM - ALL RIGHTS RESERVED </p>
      </div>
    </div>
  </section>
  <!-- footer section -->
