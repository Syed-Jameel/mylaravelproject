@extends('index')
@section('content')
          <div>
            <form class="register-box mx-auto border border-2 border-secondary rounded rounded-3 p-4">
              @csrf
              <div class="btn btn-info w-100 text-light mb-4"><h4>Please Register</h4><i class="bi bi-arrow-down-circle-fill" style="font-size: 40px"></i></div>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" >
              </div>
                <div class="mb-3">
                  @csrf
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-info w-100 text-light">Register</button>
                {{-- <a href="login" class="text-light" style="text-decoration: none">Register</a> --}}
            </form>
          </div>
@endsection