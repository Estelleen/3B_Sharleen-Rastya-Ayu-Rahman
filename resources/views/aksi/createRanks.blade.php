@extends('layout.templateAdmin')
@section('content')

    <div style="text-align: center; margin-bottom: 50px">
        <h2>Add New Ranks</h2>   
    </div>
    <div class="mt-4">
        <form action="{{ route('aksi.storeRanks') }}"method="POST">
            <div class="mb-3">
                <label class="form-label fw-bold">Ranks Name</label>
                @csrf<input type="text" name="nama_ranks" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Ranks Description</label>
                <input type="text" name="deskripsi" class="form-control">
            </div>
            <div>
                <a href="{{ route('aksi.createRanks') }}">
                    <button style="background-color: #553862; color: white; border: none; padding: 5px 10px; border-radius: 5px; mb-1;">Add</button>
                </a>
                <a href="http://127.0.0.1:8001/ranks">
                    <button style="background-color: #553862; color: white; border: none; padding: 5px 10px; border-radius: 5px; mb-1;">Back</button>
                </a>

            </div>
        </form>
    </div>
@endsection