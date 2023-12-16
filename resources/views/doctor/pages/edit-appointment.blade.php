@extends('doctor.layout')

@section('content')
    <h1>Edit Appointment Status</h1>
    <form method="post" action="{{ route('doctor.appointments.update.status', ['id' => $appointment->id]) }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="doctor_id">Selected Doctor:</label>
            <select name="doctor_id" id="doctor_id" class="form-control" disabled>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ $doctor->id === $appointment->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="patient_id">Patient Name:</label>
            <input type="text" name="patient_name" id="patient_name" value="{{ auth()->user()->name }}" disabled class="form-control">
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" readonly>{{ $appointment->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="appointment_date">Appointment Date:</label>
            <input type="date" value="{{$appointment->appointment_date}}" name="appointment_date" id="appointment_date" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="pending" {{ $appointment->status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="accepted" {{ $appointment->status === 'accepted' ? 'selected' : '' }}>Accepted</option>
                <option value="rejected" {{ $appointment->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection