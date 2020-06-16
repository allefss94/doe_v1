<!doctype html>
<html lang="pt-br">
  <head>
    <title>Anjos da Débora</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            background-color: #e9e9e9;
        }
        header h3{
            margin-top: 75px;
            font-size: 35px;
            margin-bottom: -10px;
            margin-left: 100px;
            color: #FA3737;
            font-family: 'Bangers', cursive;
            text-shadow: 0px 1px 1px grey;
        }
        header h1{
            font-size: 90px;
            color: #FA3737;
            font-family: 'Bangers', cursive;
            text-shadow: 0px 1px 1px grey;
        }
        button{
            background-color: #427AA1; 
        }
        #infos p {
            color: #666;
            font-size: 20px;
            font-family: 'Roboto', sans-serif;
        }
        #buttons{
            margin-top: 20px;
            margin-bottom: 94px;
        }
        #form{
            margin-top: 50px;
            margin-bottom: 100px;
        }
        #form .card{
            box-shadow: 0px 1px 3px grey
        }

        #obrigado{
            margin-top: 120px;
            margin-bottom: 260px;
        }

        .footer{
            color: #e9e9e9;
            height: 70px;
            background-color: #427AA1;
            float: unset;
        }
        .footer p {
            margin-top: 10px;
            margin-bottom: -5px
        }
        .footer a{
            font-family: 'Dancing Script', cursive;
            letter-spacing: 4px;
            text-decoration: none;
            color: #e9e9e9
        }

        #login{
            margin-top: 76px;
            margin-bottom: 102px;
        }
        #login .card{
            box-shadow: 0px 1px 3px grey
        }

        #list{
            margin-top: 50px;
            margin-bottom: 100px;

        }
    </style>
</head>
  <body>
      <nav>
          <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #FFA7A7">
              <a class="navbar-brand" href="/">Anjos da Débora</a>
              <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapse" aria-controls="collapse"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapse">
                  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                          <a class="nav-link" href="/login">ADM <span class="sr-only">(current)</span></a>
                      </li>                      
              </div>
          </nav>
      </nav>
      
      <div class="container">
          @yield('content')
      </div>
    
      <footer>
          <div class="container-fluid position-relative">
              <div class="row footer justify-content-between text-center">
                  <div class="col-xs-6 ml-4">
                        <p>Fale conosco:</p>
                        <small>email@email.com</small> 
                  </div>
                  <div class="col-xs-6 mr-4">
                      <p>Desenvolvido por:</p>
                      <a href="#">Allef Sousa</a>
                  </div>
              </div>
          </div>
      </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>