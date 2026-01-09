@extends('layout.templateAdmin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Management</h1>
    </div>

    <div class="card shadow mb-2">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Ranks Classification</h6>
            <a href="{{ route('aksi.createRanks') }}" class="btn btn-sm shadow-sm text-white" style="background-color: #dad72dff; color: white">
                <i class="fas fa-plus fa-sm text-white-50"></i> Add Rank
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="ranksTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background: linear-gradient(45deg, #553862, #313b64, #dad72dff); color: white; text-align: center;">
                            <th>Ranks</th>
                            <th>Description</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ranks as $rank)
                        <tr>
                            <td class="align-middle">{{ $rank->nama_ranks }}</td>
                            <td class="align-middle">{{ $rank->deskripsi }}</td>
                            <td class="text-center align-middle">
                                <a href="{{ route('aksi.editRanks', ['id' => $rank->id]) }}" class="btn btn-sm mb-1" style="background-color: #343f7eff; color: white">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                
                                <form action="{{ route('aksi.deleteRanks', $rank->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm mb-1" style="background-color: #c14242ff; color: white" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tutors</h6>
        </div>
                <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tutorsTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background: linear-gradient(45deg, #553862, #313b64, #dad72dff); color: white; text-align: center;">
                            <th>ID</th>
                            <th>Tutor Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tutors as $tutor)
                        <tr>
                            <td class="text-center align-middle">{{ $tutor->id }}</td>
                            <td class="align-middle">{{ $tutor->name }}</td>
                            <td class="align-middle">{{ $tutor->email }}</td>
                            <td class="text-center align-middle">
                                <span class="badge badge-success">{{ $tutor->role }}</span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No tutors registered yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Stargazers</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="studentsTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background: linear-gradient(45deg, #553862, #313b64, #dad72dff); color: white; text-align: center;">
                            <th>ID</th>
                            <th>Name</th>
                            <th>No HP</th>
                            <th>Goals</th>
                            <th>Schedule</th>
                            <th>Rank</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td class="text-center align-middle">{{ $student->id }}</td>
                            <td class="align-middle">{{ $student->nama_students }}</td>
                            <td class="align-middle">{{ $student->no_hp }}</td>
                            <td class="align-middle">{{ $student->goals }}</td>
                            <td class="align-middle">{{ $student->preferred_schedule }}</td>
                            <td class="align-middle">
                                <span class="badge badge-info">{{ $student->rank->nama_ranks }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection