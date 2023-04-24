@extends('components.homelayout')
@section('title', 'Terms & Conditions')
@section('page')
<x-banner>
</x-banner>
<section id="terms">
    <div class="terms">
        <div class="container">
            <div class="heading text-center mb-5">
                <h1>Terms & Conditions</h1>
                <p class="my-3">Play by the rules and win big. Read our terms and conditions to understand the guidelines and regulations that govern our betting website</p>
            </div>
           <div class="terms-contents">
                @foreach ( $terms as $term)
                <h3 class="mb-3">{{$term->title}}</h3>
                <p class="mb-5">{{$term->description}}</p>
                @endforeach
           </div>
        </div>
    </div>
</section>
@endsection
