<!-- CSS only -->

<link rel="stylesheet" href="{{ asset('syle.css') }}">
<div class="wrapper">
    <div class="logo"> <img
            src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png"
            alt="">
    </div>
    <div class="text-center mt-4 name"> Sig Up </div>
    <form action="/registeruser" method="post" class="p-3 mt-3">
        @csrf
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text"
                name="name" placeholder="Masukkan Nama" required value="{{ old('name') }}"> </div>
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
            <input type="email" name="email" placeholder="Masukkan Email" required value="{{ old('email') }}">
        </div>
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
            <input type="hidden" name="role" placeholder="role" required value="user">
        </div>
        @error('email')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Masukkan Password" required>
        </div>

        @error('password')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <button class="btn mt-3">Sig Up</button>
    </form>
    <div class="text-center fs-6"> <a href="/login">Login</a> </div>
</div>




<!-- JavaScript Bundle with Popper -->
