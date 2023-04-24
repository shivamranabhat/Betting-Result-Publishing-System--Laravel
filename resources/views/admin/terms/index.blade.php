<x-layout>
    <x-labels>
        <a class="active" href="#">Terms & Conditions</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Terms & Conditions</h3>
            <div class="action-icons">
               <a href="{{route('add-terms')}}"><i class='bx bxs-plus-circle'></i></a>
            </div>
        </div>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @if ($terms->count()==0)
           <tr>
            <td>
                No data found
            </td>
            </tr>
           @else
          @foreach ($terms as $term)
          <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                {{$term->title}}
            </td>

            <td>
                {{$term->created_at}}
            </td>
            <td>
                {{$term->updated_at}}
            </td>
            <td>
                <div class="action-icons">
                    <a href="{{route('edit-terms',$term->id)}}" class="mr-4"><i class='bx bxs-edit'></i></a>
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
                {{ $terms->links('vendor.pagination.simple-tailwind') }}
            </li>
        </ul>
    </div>
</x-layout>
