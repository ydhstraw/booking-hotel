@extends('layouts.admin',[
    'user' => $user,
    'pages' => $pages
])

@section('admin')

{{-- Tables --}}
<link href="{{ asset('admin/css/table-style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('admin/css/basictable.css') }}" rel='stylesheet' type='text/css' />
<script src="{{ asset('admin/js/jquery.basictable.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#table').basictable();
        $('#table-breakpoint').basictable({
            breakpoint: 768
        });
        $('#table-swap-axis').basictable({
            swapAxis: true
        });
        $('#table-force-off').basictable({
            forceResponsive: false
        });
        $('#table-no-resize').basictable({
            noResize: true
        });
        $('#table-two-axis').basictable();
        $('#table-max-height').basictable({
            tableWrapper: true
        });
    });

</script>

<div class="agile-grids">
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Manage Bookings</h2>
            @if ($flash)
            <div class="alert alert-info"><strong>{{ $flash }}</strong></div>    
            @endif
            <table id="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Room</th>
                        <th>Price (IDR)</th>
                        <th>check_in</th>
                        <th>check_out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone_number }}</td>
                        <td>{{ $row->room }}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->check_in }}</td>
                        <td>{{ $row->check_out }}</td>
                        {{-- <td>
                            <a href="/admin/action/{{ $row->id }}" class="btn btn-warning btn-block">Action</a>
                            <a href="/admin/details/{{ $row->id }}" class="btn btn-primary btn-block">View Details</a>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
