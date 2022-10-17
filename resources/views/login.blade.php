@extends('index')
@section('content')
          <div>
            <form action="login" method="POST" class="login-box mx-auto border border-2 border-secondary rounded rounded-3 p-4">
              <button class="btn btn-primary w-100 text-light mb-4"><h4>Please login</h4><i class="bi bi-arrow-down-circle-fill" style="font-size: 40px"></i></button>
                <div class="mb-3">
                  @csrf
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary w-100 text-light">Register</button>
            </form>
            </form>
          </div>
@endsection

