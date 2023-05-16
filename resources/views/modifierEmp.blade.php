<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/ajouter.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">  --}}
</head>
<body>
    

   <div class="container right-panel-active">

       <!--                      Update        Form                     -->

       <div class="container__form container--signup">
                <form action="{{ route('Employer.update', ['id' => $utilisateur->id]) }}" method="POST" class="form" id="form1">
                @csrf
                
                <h2 class="form__title"> Modifier un Utilisateur </h2>

                <input type="text" name="identifiant" placeholder="Identifiant"  value="{{ $utilisateur->identifiant }}" class="input" required />

                <div class="form-group" id="list">

                    <select  name="type"  value="{{ $utilisateur->type }}" id="type" class="form-control" required>
                        <option value="" disabled > Selectioner le type :</option>
                        <option value="Employer">Employer</option>
                        <option value="Commercial">Commercial</option>
                        {{-- <option value="Admin">Admin</option>
                        <option value="Autre">Autre</option> --}}
                    </select>
                </div>

                <input type="password" name="password" value="{{ $utilisateur->password }}" placeholder="Mot de passe" class="input" required/>

                <button class="btn">Add</button>
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







     {{-- <form  action="{{ route('Employer.update'), ['id' => $utilisateur->id]  }}" method="POST" > --}}

    {{-- <h2 class="form__title"> Modifier l'Utilisateur </h2>

               <input type="text" name="identifiant" @error('identifiant') is-invalid @enderror
                            placeholder="Identifiant" class="input"   value="{{ $utilisateur->identifiant }}" />

                @error('identifiant')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

               <div class="form-group" id="list">

                   <select @error('type') is-invalid @enderror name="type" id="type"
                                             value="{{ $utilisateur->type }}"  class="form-control" >

                       <option value="" disabled > Selectioner le type :</option>
                       <option value="Commercial">Commercial</option>
                       <option value="Employer">Employer</option>
                       <option value="Admin">Admin</option>
                       <option value="Autre">Autre</option>
                   </select>
               </div>

               <input type="password" name="password" @error('password') is-invalid @enderror
                               placeholder="Mot de passe" class="input" value="{{ $utilisateur->password }}" />

               <button class="btn">Modifier</button> --}}