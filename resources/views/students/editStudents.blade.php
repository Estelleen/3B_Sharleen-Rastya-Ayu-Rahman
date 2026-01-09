@extends('layout.templateAdmin')
@section('content')

<div style="text-align: center; margin-bottom: 50px">
    <h2>Update Students Profile</h2>   
</div>

<div class="mt-4 card shadow p-4">
    <form action="{{ route('students.updateStudents', $student->id) }}" method="POST">
        @csrf
        @method('PATCH') 

        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <input type="text" name="nama_students" value="{{ $student->nama_students }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">NO HP</label>
            <input type="text" name="no_hp" value="{{ $student->no_hp }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Goals</label>
            <input type="text" name="goals" value="{{ $student->goals }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Preferred Schedule</label>
            <input type="text" name="preferred_schedule" value="{{ $student->preferred_schedule }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Update Rank</label>
            <select name="rank_id" class="form-control">
                @foreach($ranks as $rank)
                    <option value="{{ $rank->id }}" {{ $student->rank_id == $rank->id ? 'selected' : '' }}>
                        {{ $rank->nama_ranks }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Assign Tutor</label>
            <select name="tutor_id" class="form-control">
                <option value="">Choose Tutor...</option>
                @foreach($tutors as $tutor)
                    <option value="{{ $tutor->id }}" {{ $student->tutor_id == $tutor->id ? 'selected' : '' }}>
                        {{ $tutor->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mt-4">
            <button type="submit" style="background-color: #553862; color: white; border: none; padding: 10px 20px; border-radius: 5px;">
                Done (Save Changes)
            </button>
            <a href="{{ url('/students') }}" class="btn btn-secondary" style="padding: 10px 20px; margin-left: 10px;">
                Back
            </a>
        </div>
    </form>
</div>
@endsection