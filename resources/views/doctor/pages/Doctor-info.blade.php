@extends('doctor.layout')

@section('content')
    <h1>Edit Appointment Status</h1>
    <form action="{{route('doctor.info.store')}}" method="post">
        @csrf
        @method('POST');
        <div class="form-group">
            <label for="doctor_reg_id">Doctor Registration ID:</label>
            <input type="text" name="doctor_reg_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="licence">Licence:</label>
            <input type="text" name="licence" class="form-control" required>
        </div>
        <div class="form-group">
            <!-- You can add more fields for other information -->
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
    @endsection