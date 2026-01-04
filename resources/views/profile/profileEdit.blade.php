@extends('layout.templateAdmin') 
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Profil Saya</div>
        <div class="card-body text-center">
            <i class="fas fa-user-circle" style="font-size: 100px; color: #553862;"></i>
            
            <h3 class="mt-3">{{ $user->name }}</h3>
            <p class="text-muted">{{ $user->email }}</p>
            
            <hr>
            
            <div class="row text-left">
                <div class="col-md-6">
                    <strong>Role:</strong> 
                    <span class="badge badge-primary">{{ strtoupper($user->role) }}</span>
                </div>
                <div class="col-md-6">
                    <strong>Status Akun:</strong> 
                    <span class="text-success">{{ ucfirst($user->status) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection