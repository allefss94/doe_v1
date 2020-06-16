@extends('layout')

@section('content')
<section id="login">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1>Login</h1>
                    <hr>
                    <form action="list" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="user">Usuário</label>
                          <input type="text"class="form-control" name="user" aplaceholder="">
                        </div>
                        <div class="form-group">
                            <label for="pass">Usuário</label>
                            <input type="password"class="form-control" name="pass" aplaceholder="">
                          </div>
                          <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection