@extends('components.homelayout')
@section('title', 'Home')
@section('page')
    <!-- section body -->
    <section id="body">
        <div class="body position-relative">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6 left-section">
                    <div class="left-content">
                        <h1><span class="span-text">Dive</span> Into The Depths</h1>
                        <h1>of <span class="span-text">Betting</span> <span class="span-end">Games</span></h1>
                        <p>Unleash the winner in you - join the BetX community today and take your betting game to the next
                            level. Join now and win big!</p>
                        <div class="join-btn">
                            <button class="text-uppercase">Join Us Now</button>
                            <img src="images/arrow-small-right.png" alt="arrow">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 right-image">
                    <img src="images/index-bg.png" class="w-100" alt="side-image">
                </div>
                <div class="mobile-content mb-4">
                    <p class="px-2">Unleash the winner in you - join the BetX community today and take your betting game
                        to the next level. Join now and win big!</p>
                    <div class="join-btn">
                        <button class="text-uppercase">Join Us Now</button>
                        <img src="images/arrow-small-right.png" alt="arrow">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section body -->
    <x-introduction>
    </x-introduction>
    <!-- winners section -->
    <section id="winners">
        <div class="winners">
            <div class="heading text-center mb-5">
                <h1>Results</h1>
                <p class="my-3">Get your results easily online and know your luck</p>
            </div>
            <div class="winner-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active mx-3" data-toggle="tab" href="#all">All</a>
                    </li>
                    @foreach ($timings as $time)
                        <li class="nav-item">
                            <a class="nav-link mr-3" href="#tab-{{ $time->id }}"
                                data-toggle="tab">{{ \Carbon\Carbon::createFromFormat('H:i', $time->time)->format('g:i A') }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="container">
                    <div class="tab-content">
                        <div id="all" class="tab-pane fade show active">
                            @foreach ($results as $result)
                                <div class="result-content position-relative rounded mb-5">
                                    <div class="number d-flex align-items-center position-absolute">
                                        <h5>{{ $result->rank }}</h5>
                                    </div>
                                    <div class="content d-flex pl-4 py-3">
                                        <div class="image mx-3">
                                            <img src="{{ asset('storage/' . $result->game->image) }}" alt="game"
                                                width="70" height="70" class="rounded">
                                        </div>
                                        <div class="result-info mt-2">
                                            <h5>{{ $result->name }}</h5>
                                            <h6>Bet No: {{ $result->bet_number }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        @foreach ($timings as $time)
                            <div id="tab-{{ $time->id }}" class="tab-pane fade">
                                @php
                                    $timewiseResult = App\Models\Result::where('time_id', $time->id)
                                        ->orderBy('id', 'desc')
                                        ->get();
                                @endphp
                                @if ($timewiseResult->count() == 0)
                                    <div class="result-content mb-5 rounded">
                                        <div class="content p-5 rounded">
                                            <div class="result-info mt-2 p-5">
                                                <h5 class="text-center">No Data found</h5>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    @foreach ($timewiseResult as $result)
                                        <div class="result-content position-relative rounded mb-5">
                                            <div class="number d-flex align-items-center position-absolute">
                                                <h5>{{ $result->rank }}</h5>
                                            </div>
                                            <div class="content d-flex pl-4 py-3">
                                                <div class="image mx-3">
                                                    <img src="{{ asset('storage/' . $result->game->image) }}" alt="game"
                                                        width="70" height="70" class="rounded">
                                                </div>
                                                <div class="result-info mt-2">
                                                    <h5>{{ $result->name }}</h5>
                                                    <h6>Bet No: {{ $result->bet_number }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- winners section -->
    <x-how-it-works>
    </x-how-it-works>
    <!-- our games section -->
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
    <!-- our games section -->
    <x-chooseus>
    </x-chooseus>
@endsection
