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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eaque veritatis asperiores mollitia
              voluptatibus rem inventore commodi doloribus laboriosam sapiente?</p>
            <div class="join-btn">
              <button>JOIN US NOW</button>
              <img src="images/arrow-small-right.png" alt="arrow">
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 right-image">
          <img src="images/index-bg.png" class="w-100" alt="side-image">
        </div>
        <div class="mobile-content mb-4">
          <p class="px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eaque veritatis asperiores mollitia
            voluptatibus rem inventore commodi doloribus laboriosam sapiente?</p>
          <div class="join-btn">
            <button>JOIN US NOW</button>
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
                        <div class="table-responsive p-2">
                            <table class="table text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Game</th>
                                        <th scope="col">Bet No</th>
                                        <th scope="col">Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $result)
                                        <tr>
                                            <td>{{ $result->rank }}</td>
                                            <td>{{ $result->name }}</td>
                                            <td>{{ $result->game->name }}</td>
                                            <td>{{ $result->bet_number }}</td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('H:i', $result->time->time)->format('g:i A') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @foreach ($timings as $time)
                        <div id="tab-{{ $time->id }}" class="tab-pane fade">
                            <div class="table-responsive p-2">
                                <table class="table text-white">
                                    <thead>
                                        <tr>
                                            <th scope="col">Rank</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Game</th>
                                            <th scope="col">Bet No</th>
                                            <th scope="col">Time</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $timewiseResult = App\Models\Result::where('time_id', $time->id)
                                            ->orderBy('id', 'desc')
                                            ->get();
                                    @endphp
                                    @if ($timewiseResult->count() == 0)
                                        <tbody>
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    No Result found
                                                </td>
                                            </tr>
                                        </tbody>
                                    @else
                                        <tbody>
                                            @foreach ($timewiseResult as $result)
                                                <tr>
                                                    <td>{{ $result->rank }}</td>
                                                    <td>{{ $result->name }}</td>
                                                    <td>{{ $result->game->name }}</td>
                                                    <td>{{ $result->bet_number }}</td>
                                                    <td>{{ \Carbon\Carbon::createFromFormat('H:i', $result->time->time)->format('g:i A') }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    @endif
                                </table>
                            </div>
                        </div>
                    @endforeach
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
