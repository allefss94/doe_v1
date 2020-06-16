@extends('layout')

@section('content')
    <section id="list">
        <div class="row justify-content-center text-center">
            <div class="col-md-7 mb-4">
                <div class="card">
                    <div class="card-header">Filtre por:</div>
                    <div class="card-body">
                        <form action="/list" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                  <label for="city">Cidade</label>
                                  <input type="text" class="form-control" name="city" id="" aria-describedby="helpId" placeholder="Pesquise por cidade">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="blood">Tipo Sanguíneo:</label>
                                    <select name="blood" class="form-control">
                                        <option value="">Selecione seu tipo</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Filtar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive table-striped table-condensed">
                            <thead>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Numero</th>
                                <th scope="col">Tipo Sanguíneo</th>
                            </thead>
                            <tbody>
                                @foreach ($donors as $donor)
                                    <tr>
                                        <td scope="row">{{$donor->name}}</td>
                                        <td>{{$donor->email}}</td>
                                        <td>{{$donor->city}}</td>
                                        <td>{{$donor->number}}</td>
                                        <td>{{$donor->blood}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">{{$donors->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        </div>
    </section>
@endsection

