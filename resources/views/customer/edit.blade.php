@extends('layout.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h3>Edit Customer</h3>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            <div class="card">

                <!-- Card header -->
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <a href="{{ route('customers.index') }}" class="btn btn-back">
                                <i class="fas fa-chevron-left me-1"></i> Back
                            </a>
                        </div>
                        <div class="col-md-6 text-end">
                            <span
                                style="font-size:0.75rem; color:rgba(255,255,255,0.35); letter-spacing:0.08em; text-transform:uppercase">
                                New Customer
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Card body -->
                <div class="card-body">
                    <form action="{{ route('customers.update', $customer->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <!-- Photo -->
                            <div class="col-md-12 mb-1">
                                <img src="{{ asset($customer->image) }}" alt="" width="200px">
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>

                            <!-- Personal -->
                            <div class="col-md-12 mb-1">
                                <div class="section-divider">Personal Info</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="First name"
                                        value="{{ $customer->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last name"
                                        value="{{ $customer->last_name }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="email@example.com" value="{{ $customer->email }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="+880 171 000 0000" value="{{ $customer->phone }}">
                                </div>
                            </div>

                            <!-- Bank -->
                            <div class="col-md-12 mb-1">
                                <div class="section-divider">Bank Details</div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label>Bank Account Number</label>
                                    <input type="text" class="form-control" name="bank_account_number"
                                        placeholder="e.g. 4002-0012-4567" value="{{ $customer->bank_account_number }}">
                                </div>
                            </div>

                            <!-- About -->
                            <div class="col-md-12 mb-1">
                                <div class="section-divider">Additional Info</div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label>About</label>
                                    <textarea class="form-control" name="about" placeholder="Short note about this customer…">{{ $customer->about }}</textarea>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="col-md-12 mb-1">
                                <div class="d-flex align-items-center gap-2">
                                    <button type="submit" class="btn btn-dark">
                                        <i class="fas fa-save me-1"></i> Update
                                    </button>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
