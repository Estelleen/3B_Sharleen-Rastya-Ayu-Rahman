<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Student Registration | Asteria Star Talk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css3/studentRegister.css') }}" />
</head>
<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            @if (session('failed'))
                <div class="alert alert-danger">{{ session('failed') }}</div>
            @endif

            <form action="{{ route('students.storeRegister') }}" method="POST">
                @csrf
                <h1>Ready for Liftoff?</h1>
                <p style="margin-bottom: 20px;">Enter your coordinates to start your journey.</p>
                
                <div class="name-wrapper has-validation w-100">
                    <input type="text" name="nama_students" placeholder="Full Name" value="{{ old('nama_students') }}" required />
                    @error('nama_students')
                        <small class="text-danger d-block text-start">{{ $message }}</small>
                    @enderror
                </div>

                <div class="noHp-wrapper has-validation w-100">
                    <input type="number" name="no_hp" placeholder="Phone Number" value="{{ old('no_hp') }}" required />
                </div>

                <div class="goals-wrapper has-validation w-100">
                    <input type="text" name="goals" placeholder="What is your learning goal?" required />
                </div>

                <div class="schedule-wrapper has-validation w-100">
                    <input type="text" name="preferred_schedule" placeholder="Preferred Schedule (e.g. Weekend/Evening)" required />
                </div>

                <div class="ranks-wrapper has-validation w-100">
                    <select name="rank_id" class="form-select mb-3" required style="border-radius: 8px; padding: 12px; background-color: #eee; border: none;">
                        <option value="" selected disabled>-- Choose Your Starting Orbit --</option>
                        @foreach ($ranks as $rank)
                            <option value="{{ $rank->id }}">{{ $rank->nama_ranks }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="remember-row w-100 text-start">
                    <div class="icheck-primary">
                        <input type="checkbox" id="invalidCheck" required>
                        <label for="invalidCheck">Agree to Terms & Galactic Laws</label>
                    </div>
                </div>

                <button type="submit" style="margin-top: 10px;">Launch Mission</button>
                <a href="{{ url('/') }}" class="mt-2 text-muted" style="text-decoration: none; font-size: 13px;"> <i class="fas fa-arrow-left"></i> Back to Home</a>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1 style="color:white;">Greetings, Stargazer!</h1>
                    <p style="color:white;">
                        Welcome to the starting point of your cosmic journey. Here, we don't just learn English—we evolve from a silent Nebula into a brilliant Supernova!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js2/login.js') }}"></script>
</body>
</html>