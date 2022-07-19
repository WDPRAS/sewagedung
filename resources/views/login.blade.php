 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <link rel="stylesheet" href="{{ asset('syle.css') }}">
 <div class="wrapper">
     <div class="logo"> <img src="image/logo.png" alt=""> </div>
     <div class="text-center mt-4 name"> Login </div>
     @if ($message = Session::get('loginError'))
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
             {{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
     @endif
     <form action="/loginya" method="post" class="p-3 mt-3">
         @csrf
         <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span>
             <input type="email" name="email" placeholder="Masukkan Email" required value="{{ old('email') }}">
         </div>
         @error('email')
             <div class="alert alert-danger">
                 {{ $message }}
             </div>
         @enderror
         <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password"
                 name="password" id="pwd" placeholder="Masukkan Password" required> </div> <button
             class="btn mt-3">Login</button>
     </form>
     <div class="text-center fs-6"> <a href="/register">Sign up</a> </div>
 </div>
