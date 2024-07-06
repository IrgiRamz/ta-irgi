@extends('landingpage.index')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center text-dark my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating mb-3 text-muted">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
                                <label for="email">Email address</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 text-muted">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                <label for="password">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                <button type="submit" class="btn btn-primary btn">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> <br>
<hr>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if(Session::has('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Login Gagal',
        text: 'Email dan Password Salah atau Akun Dinonaktifkan',
    });
</script>
@endif
@endsection