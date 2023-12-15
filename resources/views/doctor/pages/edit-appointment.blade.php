@extends('doctor.layout')

@section('content')
    <h1>Edit Appointment Status</h1>
    <form method="post" action="{{ route('doctor.appointments.update-status', ['id' => $appointment->id]) }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="pending" {{ $appointment->status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="accepted" {{ $appointment->status === 'accepted' ? 'selected' : '' }}>Accepted</option>
                <option value="rejected" {{ $appointment->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Status</button>
    </form>
@endsection