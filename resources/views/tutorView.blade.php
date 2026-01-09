@extends('layout.templateTutor')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tutor Dashboard</h1>
        <span class="badge badge-primary p-2">Welcome, {{ auth()->user()->name }}</span>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total My Students</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $myStudents->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-astronaut fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">My Stargazers (Assigned Students)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background: linear-gradient(45deg, #1cc88a, #13855c); color: white; text-align: center;">
                            <th>Name</th>
                            <th>No HP</th>
                            <th>Goals</th>
                            <th>Schedule</th>
                            <th>Rank</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($myStudents as $student)
                        <tr>
                            <td class="align-middle"><strong>{{ $student->nama_students }}</strong></td>
                            <td class="align-middle text-center">{{ $student->no_hp }}</td>
                            <td class="align-middle">{{ $student->goals }}</td>
                            <td class="align-middle">{{ $student->preferred_schedule }}</td>
                            <td class="align-middle text-center">
                                <span class="badge badge-info">{{ $student->rank->nama_ranks ?? 'General' }}</span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                <img src="https://illustrations.popsy.co/white/waiting.svg" style="width: 150px" class="mb-3"><br>
                                <span class="text-muted">No students assigned to you yet. Please contact Admin.</span>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection