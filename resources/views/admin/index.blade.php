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
            <h3> Recent Results</h3>

        </div>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Type</th>
                <th>Game</th>
                <th>Fees</th>
            </tr>
        </thead>
        <tbody>
           <tr>
            <td colspan="4">
                No data found
            </td>
            </tr>
        </tbody>
    </x-table>
    {{-- <div class="pagination d-flex justify-content-end mt-5">
        <ul class="pagination">
            <li class="page-item">
                {{ $tournaments->links('vendor.pagination.simple-tailwind') }}
            </li>
        </ul>
    </div> --}}
</x-layout>
