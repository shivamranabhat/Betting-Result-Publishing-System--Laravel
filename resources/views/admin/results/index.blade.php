<x-layout>
    <x-labels>
        <a class="active" href="#">Results</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Results</h3>
            <div class="action-icons">
               <a href="{{route('add-result')}}">  <i class='bx bxs-plus-circle'></i></a>
            </div>
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
              {{-- <!-- Modal -->
              <div class="modal fade" id="delete_team" tabindex="-1" role="dialog"
              aria-labelledby="delete_teamTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">
                                  Delete Game</h5>
                              <button type="button" class="close"
                                  data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body text-dark">
                              Are you sure want to delete this?
                          </div>
                          <div class="modal-footer">
                              <button type="button"
                                  class="btn btn-secondary text-white"
                                  data-dismiss="modal">Close</button>
                              <form action="{{route('delete-game',$game->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"
                                      class="btn btn-danger text-white">Delete</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div> --}}
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
