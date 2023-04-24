@extends('components.homelayout')
@section('title', 'Privacy Policy')
@section('page')
<x-banner>
</x-banner>
<section id="privacy">
    <div class="privacy">
        <div class="container">
            <div class="heading text-center mb-5">
                <h1>Our Privacy Policy</h1>
                <p class="my-3">Bet with confidence, your privacy matters. Learn about our commitment to protecting your personal information with our comprehensive privacy policy</p>
            </div>
           <div class="privacy-contents">
                @foreach ( $privacy as $privacy)
                <h3 class="mb-3">{{$privacy->title}}</h3>
                <p class="mb-5">{{$privacy->description}}</p>
                @endforeach
           </div>
        </div>
    </div>
</section>
@endsection
