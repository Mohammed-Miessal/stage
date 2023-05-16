<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/loginpage.css') }}">  
    <title>Sign in  Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin">

          <!-- //                   Sign in                    //-->

          <form action=""  class="sign-in-form">
            <h2 class="title">Se connecter </h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Identifiant" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Mot de passe " />
            </div>
            
            <input type="submit" value="log in" name="submit" class="btn solid" />
           </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
               <img src="./images/main.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  </body>
</html>
