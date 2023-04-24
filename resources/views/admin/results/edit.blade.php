<x-layout>
    <x-labels>
        <a class="active" href="#">Timing</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Edit</h3>
            <div class="action-icons">
                <a href="{{ route('results') }}"> <i class='bx bxs-left-arrow-circle'></i></a>
            </div>
        </div>
        <div class="form-container pr-5">
            <form method="POST" action="{{route('update-result',$result->id)}}">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ $result->name}}">
                            @error('name')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="bet_number">Bet Number</label>
                            <input type="number" class="form-control" name="bet_number" id="bet_number"
                                value="{{ $result->bet_number }}">
                            @error('bet_number')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="game_id">game</label>
                            <select class="form-control" id="game_id" name="game_id">
                                <option value="{{$result->game_id}}">{{$result->game->name}}</option>
                                @foreach ( $games as $game)
                                   <option value="{{$game->id}}">{{$game->name}}</option>
                                @endforeach
                            </select>
                            @error('game_id')
                            <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="time_id">Time</label>
                            <select class="form-control" id="time_id" name="time_id">
                                <option value="{{$result->time_id}}">{{$result->time->time}}</option>
                                @foreach ( $time as $timing)
                                <option value="{{$timing->id}}">{{ \Carbon\Carbon::createFromFormat('H:i', $timing->time)->format('g:i A') }}</option>
                                @endforeach
                            </select>
                            @error('time_id')
                            <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rank">Rank</label>
                    <input type="number" class="form-control" name="rank" id="rank"
                        value="{{ $result->rank}}">
                    @error('rank')
                        <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="submit-btn mt-2">
                    <input type="submit" value="Submit" class="button mt-2">
                </div>
            </form>
        </div>
    </x-table>
</x-layout>
