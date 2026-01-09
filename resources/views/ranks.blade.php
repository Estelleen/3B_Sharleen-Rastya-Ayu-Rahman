@extends('layout.templateAdmin')
@section('content')
    <div style="text-align: center; margin-bottom: 50px">
        <h2>Ranks Classification</h2>   
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
        <a href="{{ route('aksi.createRanks') }}">
            <button style="background-color: #dad72dff; color: white; border: none; padding: 5px 10px; border-radius: 5px; mb-1;">
                <i class="fas fa-plus fa-sm"></i>
                Add
            </button>
        </a>
    </div>
    <div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr style="background: linear-gradient(45deg, #553862, #313b64, #dad72dff); color: white; text-align: center;">
                    <th>Ranks</th>
                    <th>Description</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        @foreach ($ranks as $rank)
        <tr>
            <td>{{ $rank -> nama_ranks }}</td>
            <td>{{ $rank -> deskripsi }}</td>
            <td>
                <a href="{{ route('aksi.editRanks', ['id' => $rank->id]) }}">
                    <button style="background-color: #343f7eff; 
                    color: white; border: none; padding: 5px 10px;
                     border-radius: 5px; margin-bottom: 15px;">
                    <i class="fas fa-edit"></i>
                    Edit
                    </button>
                </a>
                <form action="{{ route('aksi.deleteRanks', $rank->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE') 
                    <button type="submit" 
                        style="background-color: #c14242ff; color: white; border: none; padding: 5px 10px; border-radius: 5px;" 
                        onclick="return confirm('Are you sure you want to delete this rank?')">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach   
        </table>
    </div>
@endsection 