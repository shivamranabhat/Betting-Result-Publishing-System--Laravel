<x-layout>
    <x-labels>
        <a class="active" href="#">Home</a>
    </x-labels>
    <ul class="box-info">
        <li>
            <i class='bx bxs-book-content' ></i>
            <span class="text">
                <h3>3</h3>
                <p>Results</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group' ></i>
            <span class="text">
                <h3>3</h3>
                <p>Users</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-calendar-check' ></i>
            <span class="text">
                <h3>3</h3>
                <p>Bookings</p>
            </span>
        </li>
    </ul>
    <x-table>
        <div class="head">
            <h3>Recent Results</h3>
        </div>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Bet Number</th>
                <th>Game</th>
                <th>Time</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @if ($results->count()==0)
           <tr>
            <td colspan="4">
                No data found
            </td>
            </tr>
           @else
          @foreach ($results as $result)
          <tr>
            <td>
                {{$result->rank}}
            </td>
            <td>
                {{$result->name}}
            </td>
            <td>
                {{$result->bet_number}}
            </td>
            <td>
                {{$result->game->name}}
            </td>

            <td>
                {{ \Carbon\Carbon::createFromFormat('H:i', $result->time->time)->format('g:i A') }}
            </td>
            <td>
                {{$result->created_at }}
            </td>
            <td>
                {{$result->updated_at }}

            </td>
            <td>
                <div class="action-icons">
                    <a href="{{route('edit-result',$result->id)}}" class="mr-4"><i class='bx bxs-edit'></i></a>
                   <a href="#" data-toggle="modal"
                   data-target="#delete_team"> <i class='bx bxs-trash-alt'></i></a>
                </div>
            </td>
            </tr>
            @endforeach
           @endif
        </tbody>
    </x-table>
    <div class="pagination d-flex justify-content-end mt-5">
        <ul class="pagination">
            <li class="page-item">
                {{ $results->links('vendor.pagination.simple-tailwind') }}
            </li>
        </ul>
    </div>
</x-layout>
