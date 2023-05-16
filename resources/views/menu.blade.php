<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}"> 
  
</head>
<body>

  <nav class="navbar navbar-light bg-light" >
    <a class="navbar-brand"href="{{ route('menu') }}">
      <img src="images/logo2.png" id="logo" class="d-inline-block align-top" alt="">
      
    </a>
  </nav>

<div class="container" id="container">
	<div class="form-container sign-in-container">

		<form action="#">
      <div class="title">
		 	         <h2> Bonjour Administrateur !</h2>
      </div>
          <!-- Button #1 -->
      {{-- <div class="box-1">
          <div class="btn btn-one">
            <input type="button" value="Administration"   class="btn" id="btn-one">
           </div>
      </div> --}}

      <div class="box-1">
          <a  class="btn btn-primary"  href="{{ route('affichageEmp') }}" class="btn" id="btn-one">Administration</a>
      </div>
 
        <!-- Button #2 -->
        {{-- <div class="box-2">
          <div class="btn btn-two">
            <input type="button" value="Consultation du Stock" class="btn" id="btn-two">
          </div>
        </div> --}}
        <div class="box-1">
          
            <a  class="btn btn-primary"  href="{{ route('affichageEmp') }}" class="btn" id="btn-one">Consultation du Stock </a>
         
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


</body>
</html>