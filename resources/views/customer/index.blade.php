@extends('layout.app')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <h3 class="fw-semibold mb-3">Customers</h3>
            <div class="card border rounded-1 shadow-sm">

                <div class="card-body border-bottom pb-3 pt-3">
                    <div class="row align-items-center g-2">
                        <div class="col-md-2">
                            <a href="{{ route('customers.create') }}" class="btn btn-dark rounded-1 w-100">
                                <i class="fas fa-plus me-1"></i> Create Customer
                            </a>
                        </div>
                        <div class="col-md-7">
                            <form action="{{ route('customers.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search anything..."
                                        aria-describedby="button-addon2" name="search" value="{{ request()->search }}">
                                    <button class="btn btn-outline-secondary" type="submit"
                                        id="button-addon2">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <form action="{{ route('customers.index') }}" method="GET" class="form-order">
                                <select class="form-select rounded-1 border" name="order"
                                    onchange="$('.form-order').submit()">
                                    <option @selected(request()->order == 'desc') value="desc">Newest to Old</option>
                                    <option @selected(request()->order == 'asc') value="asc">Old to Newest</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-md-1">
                            <a href="{{ route('customers.trash') }}" class="btn btn-outline-danger rounded-1 w-100">
                                <i class="fas fa-trash me-1"></i> Trashed
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Table --}}
                <div class="card-body p-0">
                    <table class="table table-bordered mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="text-muted fw-semibold small">#</th>
                                <th scope="col" class="text-muted fw-semibold small">First Name</th>
                                <th scope="col" class="text-muted fw-semibold small">Last Name</th>
                                <th scope="col" class="text-muted fw-semibold small">Phone Number</th>
                                <th scope="col" class="text-muted fw-semibold small">Email</th>
                                <th scope="col" class="text-muted fw-semibold small">BANK AC</th>
                                <th scope="col" class="text-muted fw-semibold small">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr class="align-middle">
                                    <th scope="row" class="text-muted small">{{ $loop->iteration }}</th>
                                    <td class="small">{{ $customer->first_name }}</td>
                                    <td class="small">{{ $customer->last_name }}</td>
                                    <td class="small">{{ $customer->phone }}</td>
                                    <td class="small">{{ $customer->email }}</td>
                                    <td class="text-muted small">{{ $customer->bank_account_number }}</td>
                                    <td>
                                        <a href="{{ route('customers.edit', $customer->id) }}" class="text-dark ms-1 me-1"
                                            title="Edit"><i class="far fa-edit"></i></a>
                                        <a href="{{ route('customers.show', $customer->id) }}" style="color: #2c2c2c;"
                                            class="ms-1 me-1"><i class="far fa-eye"></i></a>

                                        <a href="javascript:;"
                                            onclick="
                                            if(confirm('Are you sure you want to delete?')) $('.form-{{ $customer->id }}').submit()
                                            "style="color: #2c2c2c;"
                                            class="ms-1 me-1"><i class="fas fa-trash-alt"></i></a>

                                        <form class="form-{{ $customer->id }}"
                                            action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
@endsection
