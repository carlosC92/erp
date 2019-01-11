
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My ERP</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="app" class="container-fluid">
            <div class="col-xs-12 loginBox">
                <form v-on:submit.prevent="onSubmit" action="{{route('login')}}" >
                    <h2>Login</h2>
                    <label>
                        <input v-model="user" class="inputLogin" type="text" name="user" required>
                        <div class="label-text">Usuario</div>
                    </label>
                    <label>
                        <input v-model="password" class="inputLogin" type="password" name="password" required>
                        <div class="label-text">Contraseña</div>
                    </label>
                    <button>Submit</button>
                </form>  
            </div>
        <div class="col-xs-8 col-xs-offset-2">
            <p v-if="errorMessage.length">
                <b>Please correct the following error(s):</b>
                <ul>
                    <li class="alert alert-warning" v-for="error in errorMessage">@{{ error }}</li>
                </ul>
            </p>
        </div>
           
            
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
