<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/aff2.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
</head>
<body >
      <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"> Listes des Employés</h2>
				</div>
			
			</div>
			<hr>
			@if(session('success'))
    					<div class="alert alert-success">
      							 {{ session('success') }}
   						</div> 
  			@endif  

			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<a href="{{ route('Employe.create') }}">Create</a>
						<table class="table table-striped"  >
							<thead >
								<tr>
									{{-- <th>	#			</th> --}}
									<th>	Identifiant		</th>
									<th>	Mot de passe 	</th>
									<th>	Type			</th>
									<th>	Modifier			</th>
									<th>	Supprimer			</th>
								</tr>
							</thead>
                             <tbody> 
                                 @foreach($utilisateurs as $utilisateur)
                                <tr>
									{{-- <td>{{ $utilisateur->id  }}</td> --}}
                                    <td>{{ $utilisateur->identifiant }}</td>
                                    <td>{{  $utilisateur->password }}</td>
                                    <td>{{ $utilisateur->type  }}</td>
									<td><button><a href="/Employe/{{$utilisateur->id}}/edit ">Edit</a></button></td>

									 <td><button onclick="return confirm('Are Youe Sure')">
									<a href='/Employe/{{$utilisateur->id}}/destroy'>Delete</a></button></td> 

									
								</tr>
                                @endforeach 
							
                            </tbody> 
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>  
	
	  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
  </body>
</html>