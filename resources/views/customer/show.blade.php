@extends('layout.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h3 class="fw-semibold mb-3">Customer Details</h3>
            <div class="card border rounded-1 shadow-sm">

                {{-- Back bar --}}
                <div class="card-header bg-light border-bottom py-2 px-3">
                    <a href="{{ route('customers.index') }}" class="text-decoration-none text-muted small">
                        <i class="fas fa-chevron-left me-1"></i> Back
                    </a>
                </div>

                {{-- Profile Header --}}
                <div class="card-body border-bottom pb-4 pt-4">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ asset($customer->image) }}" alt="Profile" width="80" height="80"
                            class="rounded-circle border object-fit-cover">
                        <div>

                            <div class="d-flex">
                                <h5 class="mb-0 fw-semibold">{{ $customer->first_name }}</h5>
                                <h5 class="mb-0 fw-semibold">{{ $customer->last_name }}</h5>
                            </div>
                            <span class="text-muted small">{{ $customer->email }}</span>
                        </div>
                    </div>
                </div>

                {{-- Personal Info --}}
                <div class="card-body border-bottom pb-4">
                    <p class="text-muted fw-semibold small mb-3">Personal Info</p>
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr class="align-middle">
                                <td class="text-muted small fw-semibold" style="width: 220px;">First Name</td>
                                <td class="small">{{ $customer->first_name }}</td>
                            </tr>
                            <tr class="align-middle">
                                <td class="text-muted small fw-semibold">Last Name</td>
                                <td class="small">{{ $customer->last_name }}</td>
                            </tr>
                            <tr class="align-middle">
                                <td class="text-muted small fw-semibold">Email</td>
                                <td class="small">{{ $customer->email }}</td>
                            </tr>
                            <tr class="align-middle">
                                <td class="text-muted small fw-semibold">Phone</td>
                                <td class="small">{{ $customer->phone }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Bank Details --}}
                <div class="card-body border-bottom pb-4">
                    <p class="text-muted fw-semibold small mb-3">Bank Details</p>
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr class="align-middle">
                                <td class="text-muted small fw-semibold" style="width: 220px;">Bank Account Number</td>
                                <td class="small">{{ $customer->bank_account_number }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Additional Info --}}
                <div class="card-body border-bottom pb-4">
                    <p class="text-muted fw-semibold small mb-3">Additional Info</p>
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr class="align-middle">
                                <td class="text-muted small fw-semibold" style="width: 220px;">About</td>
                                <td class="small">{{ $customer->about }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
