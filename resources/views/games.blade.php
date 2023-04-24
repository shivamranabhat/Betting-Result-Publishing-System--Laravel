@extends('components.homelayout')
@section('title', 'Games')
@section('page')
<x-how-it-works>
</x-how-it-works>
<section id="games">
    <div class="games pb-5 px-5">
        <div class="heading text-center mb-5">
            <h1>Our Games</h1>
            <p class="my-3">Experience the thrill of the game at our Betting's games section</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($games as $game)
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="game-card">
                            <div class="card-image">
                                <img src="{{ asset('storage/' . $game->image) }}" alt="image">
                            </div>
                            <div class="card-content">
                                <h4 class="game-name">{{ $game->name }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<x-chooseus>
</x-chooseus>
@endsection
