<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="{{ asset('css/destroy.css') }}">  
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
</head>
<body>
    {{-- @if(session('success'))
    <div class="alert alert-success">
               {{ session('success') }}
       </div> 
    @endif  --}}
    <br>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Excellent travail !</h4>
        <p>Félicitations ! Vous avez supprimé avec succès l'utilisateur. </p>
        <hr>
        <p class="mb-0">Nous avons également supprimé toutes les données associées à cet utilisateur. </p>
    </div>

    
        {{-- <a  class="btn btn-primary" id='btnn' href="{{ route('affichageEmp') }}">Retourner a la liste des Employés</a> --}}
		
            {{-- <button  class="btn btn-primary"><a class="text-white" href="{{ route('affichageEmp') }}">Retourner a la liste des Employés</a></button>  --}}
          


            <div class="container" id="container">
                <div class="form-container sign-in-container">
            
                    <form action="#">
                  <div class="title">
                                  <h2> Bonjour Administrateur !</h2>
                  </div>
                      <!-- Button #1 -->
                  <div class="box-1">
                      <div class="btn btn-one">
                        {{-- <input type="button" value="Administration" class="btn" id="btn-one"> --}}
                        <a  class="btn btn-primary" id='btn-one' href="{{ route('affichageEmp') }}">Retourner a la liste des Employés</a>
                       </div>
                  </div>
             
                  
            
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-right">
                            <h1>SCHIELE MAROC </h1>
                        
                        </div>
                    </div>
                </div>
            </div>
            
            







        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ asset('js/script.js') }}"></script> 
</body>
</html>