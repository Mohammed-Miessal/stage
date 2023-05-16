<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/ajouter.css') }}">   
    
    
</head>
<body>
     @if(session('success'))
     <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div> 
    @endif 

   

   

    <div class="container right-panel-active">

        <!--                      Adding        Form                     -->

        <div class="container__form container--signup">

                <form method="POST" action="{{ route('ajouterEmp') }}" class="form" id="form1">
                 @csrf
                <h2 class="form__title"> Ajouter un Utilisateur </h2>

                <input type="text" name="identifiant" placeholder="Identifiant" class="input" required />

                <div class="form-group" id="list">
                    
                    <select  name="type" id="type" class="form-control" required>
                        <option value="" disabled selected> Selectioner le type :</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Employer">Employer</option>
                        {{-- <option value="Admin">Admin</option>
                        <option value="Autre">Autre</option> --}}
                    </select>
                </div>
                
                <input type="password" name="password" placeholder="Mot de passe" class="input" required/>
                
                <button class="btn">Ajouter</button>
                
            </form>
        </div>
        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>