@extends('layout.templateTutor')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">My Teaching Schedule</h1>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Sessions</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mySchedules->count() }} Sessions</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Weekly Timetable</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background: linear-gradient(45deg, #4e73df, #224abe); color: white; text-align: center;">
                            <th>Day</th>
                            <th>Time</th>
                            <th>Student Name</th>
                            <th>Rank</th>
                            <th>Subject</th>
                            <th>Place / Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($mySchedules as $schedule)
                        <tr>
                            <td class="align-middle text-center">
                                <span>
                                    {{ $schedule->day }}
                                </span>
                            </td>
                            <td class="align-middle text-center">
                                {{ date('H:i', strtotime($schedule->start_time)) }} - {{ date('H:i', strtotime($schedule->end_time)) }}
                            </td>
                            <td class="align-middle">
                                <strong>{{ $schedule->student->nama_students }}</strong><br>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge badge-info">
                                    <i class="fas fa-medal"></i> {{ $schedule->student->rank->nama_ranks ?? 'General' }}
                                </span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-primary font-weight-bold">{{ $schedule->subject ?? 'General Review' }}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary">
                                    <i class="fas fa-map-marker-alt fa-sm"></i> {{ $schedule->place ?? 'TBA' }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <img src="https://illustrations.popsy.co/white/data-analysis.svg" style="width: 180px" class="mb-3"><br>
                                <h5 class="text-gray-500">Your schedule is still empty.</h5>
                                <p class="text-muted">New assignments from Admin will appear here.</p>
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