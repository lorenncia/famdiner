@extends('layouts.master')
@section('title', 'Profile')

@section('content')
    <form action="{{ route('profile.update', $profile->id) }}" method="POST" class="container">
        @csrf
        @method('put')
        <div class="d-flex align-items-center justify-content-center my-4 w-100">
            <h1>Edit Profile</h1>
        </div>

        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                @if (!empty($profile))
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $profile->name }}" required>
                                @else
                                    <input type="text" name="name" id="name" class="form-control">
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" aria-label="Default select example"
                                    class="form-select">
                                    <option value="" hidden></option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-3">
                            <div class="form-group">
                                <label for="place_of_birth" class="form-label">Place Of Birth</label>
                                <select name="place_of_birth" id="place_of_birth" aria-label="Default select example"
                                    class="form-select">
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-3">
                            <div class="form-group">
                                <label for="date_of_birth" class="form-label">Date Of Birth</label>
                                @if (!empty($profile->date_of_birth))
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                                        value="{{ $profile->date_of_birth }}">
                                @else
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                @if (!empty($profile->address))
                                    <textarea name="address" id="address" rows="3" class="form-control">{{ $profile->address }}</textarea>
                                @else
                                    <textarea name="address" id="address" rows="3" class="form-control"></textarea>
                                @endif
                            </div>
                        </div>

                        <div class="form-group text-end w-100 mt-3">
                            <button type="submit" class="btn btn-success position-relative px-4">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('js-extra')
    <script>
        $(document).ready(function() {
           $('#gender').find('option[value="{{ $profile->gender }}"]').prop('selected', 'selected').change();
           $('#place_of_birth').find('option[value="{{ $profile->city->id }}"]').prop('selected', 'selected').change();
        })
    </script>
@endsection
