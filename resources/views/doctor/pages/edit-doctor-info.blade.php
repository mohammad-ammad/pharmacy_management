@extends('doctor.layout')

@section('content')
    <h1>Edit Appointment Status</h1>
    
<form method="post" action="{{ route('doctor.info.update', ['id' => $doctorInfo->id]) }}">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="name">Doctor Name:</label>
        <input type="text" name="name" value="{{ $doctorInfo->name }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="license_number">License Number:</label>
        <input type="text" name="license_number" value="{{ $doctorInfo->license_number }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update Profile</button>
</form>
    @endsection