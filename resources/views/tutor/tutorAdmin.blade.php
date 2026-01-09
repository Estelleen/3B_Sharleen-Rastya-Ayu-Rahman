@extends('layout.templateAdmin')
@section('content')
    <div style="text-align: center; margin-bottom: 50px">
        <h2>Tutors</h2>   
    </div>
    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
         <div class="input-group" style="width: 300px">
            <input type="text" class="form-control bg-secondary-subtle border-1 small"
                placeholder="Search for tutor..." 
                aria-label="Search"
                aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn" style="background-color: #313b64;" type="button">
                         <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
        </div>
    </div>
    <div>
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
@endsection 