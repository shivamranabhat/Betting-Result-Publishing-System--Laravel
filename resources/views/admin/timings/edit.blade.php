<x-layout>
    <x-labels>
        <a class="active" href="#">Games</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Edit</h3>
            <div class="action-icons">
                <a href="{{ route('timing') }}"> <i class='bx bxs-left-arrow-circle'></i></a>
            </div>
        </div>
        <div class="form-container pr-5">
            <form method="POST" action="{{route('update-time',$time->id)}}">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="time" class="form-control" name="time" id="time"
                                value="{{$time->time}}">
                            @error('time')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="submit-btn mt-2">
                    <input type="submit" value="Submit" class="button mt-2">
                </div>
            </form>
        </div>
    </x-table>
</x-layout>
