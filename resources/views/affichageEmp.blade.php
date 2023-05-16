<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/afficher.css') }}">  
	 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
</head>
<body>
	
	<section class="ftco-section">
		<div class="container">
			<nav class="navbar navbar-light" >
				<a class="navbar-brand" href="{{ route('menu') }}">
				  <img src="images/logo2.png" id="logo" class="d-inline-block align-top" alt="">
				  
				</a>
			  </nav>
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"> Listes des Employés</h2>
				</div>
			
			</div>
			<hr>
			{{-- <div class="row">
				<div class="col-md-3">
				  <input type="text" id="search" class="form-control" placeholder="Recherche...">
				</div>
				<div class="col-md-3">
				  <button type="button" class="btn btn-primary" id="search-btn">Chercher</button>
				</div>
			  </div> --}}

			  <div class="form-group row justify-content-end">
				<div class="col-sm-3">
				  <input type="text" class="search form-control form-control-sm mr-sm-2" placeholder=" Who are you looking for ?">
				</div>
			  </div>
			  
			  <span class="counter pull-right"></span>
			  
			  
			
			@if(session('success'))
    					<div class="alert alert-success">
      							 {{ session('success') }}
   						</div> 
  			@endif  
		
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						{{-- /////////////////////////////////////////////// --}}
						
						<div class="btn btn-one">
							<a  class="btn btn-primary" id='btn-one' href="{{ route('Employe.create') }}">Create</a>
						</div>
						{{-- ////////////////////////////////////////////////////// --}}
						<table class="table table-striped" id="myTable" >
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
									{{-- <td><button><a href="/Employe/{{$utilisateur->id}}/edit ">Edit</a></button></td>

									 <td><button onclick="return confirm('Are Youe Sure')">
									<a href='/Employe/{{$utilisateur->id}}/destroy'>Delete</a></button></td>  --}}
									<td>
										<div class="btn btn-one">
											<a  class="btn btn-primary" id='btn-one' href="/Employe/{{$utilisateur->id}}/edit " >Edit</a>
										   </div>
									</td>
									<td>
									
										<div class="btn btn-one">
											<a  class="btn btn-primary" id='btn-one' onclick="return confirm('Are Youe Sure')" href='/Employe/{{$utilisateur->id}}/destroy'>Delete</a>
										   </div>
									</td>
									
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

<script src="{{ asset('js/search.js') }}"></script>
</body>
</html>