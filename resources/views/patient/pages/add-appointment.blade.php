@extends('patient.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Appointment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('patient.patient.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Add Appointment</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Appointment</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('patient.add.new.appointment')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="doctor_id">Select Doctor:</label>
                            <select name="doctor_id" id="doctor_id" class="form-control">
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
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
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="status">Status:</label>
                            <input type="text" id="status" name="status" class="form-control" value="Pending" readonly>
                            <input type="hidden" name="status" value="pending">
                        </div>

                        <div class="form-group">
                            <label for="appointment_date">Appointment Date:</label>
                            <input type="date" name="appointment_date" id="appointment_date" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Appointment</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
