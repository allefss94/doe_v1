@extends('layout')

@section('content')
<section id="form">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>Preencha com seus dados</h4>
                    <hr>
                    <form action="/store" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" name="name" placeholder="João Santos">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" placeholder="joao@seuMelhorEmail.com">
                        </div>
                        <div class="form-group">
                            <label for="city">Cidade:</label>
                            <input type="text" class="form-control" name="city" placeholder="Parauapebas">
                        </div>
                        <div class="form-group">
                            <label for="number">Telefone para Contato:</label>
                            <input type="text" class="form-control" name="number" placeholder="94 98877-6655">
                        </div>
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
                        <button type="submit" class="btn btn-primary btn-block mt-4">Cadastrar</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
  </section>
@endsection


