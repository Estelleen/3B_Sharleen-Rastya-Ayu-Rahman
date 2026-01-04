@extends('layout.templateAdmin')
@section('content')
    <div style="text-align: center; margin-bottom: 50px">
        <h2>Stargazers</h2>   
    </div>
    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
         <div class="input-group" style="width: 300px">
            <input type="text" class="form-control bg-secondary-subtle border-1 small"
                placeholder="Search for rank..." 
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
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr style="background: linear-gradient(45deg, #553862, #313b64, #dad72dff); color: white; text-align: center;">
                    <th>ID</th>
                    <th>Name</th>
                    <th>No HP</th>
                    <th>Goals</th>
                    <th>Preferred Schedule</th>
                    <th>Rank</th>
                </tr>
            </thead>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student -> id }}</td>
            <td>{{ $student -> nama_students }}</td>
            <td>{{ $student -> no_hp }}</td>
            <td>{{ $student -> goals }}</td>
            <td>{{ $student -> preferred_schedule }}</td>
            <td>{{ $student->rank->nama_ranks }}</td>
            </form>
            </td>
        </tr>
        @endforeach   
        </table>
    </div>
@endsection 