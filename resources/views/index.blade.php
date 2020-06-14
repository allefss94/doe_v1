@extends('layout')

@section('content')
<header>
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <h3>Seja um</h3>
            <h1>Héroi</h1>
        </div>
    </div>
</header>
<main>
      <section id="infos">
          <div class="row justify-content-center text-center">
              <div class="col-md-8">
                    <p>A doação de sangue é um gesto solidário de doar uma pequena quantidade do próprio 
                    sangue para salvar a vida de pessoas que se submetem a tratamentos e intervenções
                    médicas de grande porte e complexidade, como transfusões, transplantes, procedimentos
                    oncológicos e cirurgias.
                    </p>
              </div>
          </div>
      </section>
      <div id="app">
      <section id="buttons">
          <div class="row justify-content-center">
                <div class="col-xs-10">
                <a href="/create" class="btn btn-outline-success mr-4">Cadastre-se</a>
                  <button class="btn btn-outline-danger ml-4">Saiba Mais</button>
                </div> 
          </div>
      </section>
        
      </div>
</main>
@endsection