@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Edit Investment Package</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">

                <div class="block-content">
                    <form action="{{ route('admin.package.update', $package->id) }}" method="POST" enctype="multipart/form-data" >
                       @method('PATCH')
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Basic Elements -->
                        <div class="row push">
                            <div class="col-lg-8 offset-lg-2">

                                <div class="row">
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-text-input">Name</label>
                                        <input type="text" class="form-control" id="example-text-input" name="name" value="{{ old('name', optional($package)->name) }}">
                                    </div>
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-password-input">Term Days</label>
                                        <input type="number" class="form-control" id="example-password-input" name="term_days" value="{{ old('term_days', optional($package)->term_days) }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-email-input">Min Deposit</label>
                                        <input type="number" class="form-control" id="example-email-input" name="min_deposit" value="{{ old('min_deposit', optional($package)->min_deposit) }}">
                                    </div>
                                    <div class="mb-4 col-lg-6">
                                        <label class="form-label" for="example-password-input">Max Deposit</label>
                                        <input type="number" class="form-control" id="example-password-input" name="max_deposit" value="{{ old('max_deposit', optional($package)->max_deposit) }}">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-secondary">Update</button>

                            </div>

                        </div>
                </div>

                <!-- END Basic Elements -->

                </form>
            </div>
        </div>
        <!-- END Elements -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
