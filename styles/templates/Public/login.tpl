{include 'Overall/header.tpl'}

<body>

{include 'Overall/nav.tpl'}     

      
<div class="container" style="margin-top: 100px;">
    <center>
    <div style="width: 400px;">
        <div id="ajax"></div>
        <h2 class="form-signin-heading">Iniciar Sesión</h2>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="email" id="user" class="form-control" placeholder="Usuario" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="pass" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" id="session"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="button" id="send">Iniciar Sesión</button>
    </div>
    </center>
</div>

{include 'Overall/footer.tpl'}
<script type="text/javascript">
    window.onload= function(){
        document.getElementById('send').onclick = function(){

            var connect, user, pass, session, form, result;

            user = document.getElementById('user').value;
            pass = document.getElementById('pass').value;
            session = document.getElementById('session').checked ? true: false;

            if (user !='' && pass !='') {

                form = 'user='+user+'&pass='+pass+'&session='+session;

                connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP'); 

                connect.onreadystatechange = function(){
                    if (connect.readyState == 4 && connect.status == 200) {
                        if (parseInt(connect.responseText) == 1) {

                            result = '<div class="alert alert-dismissible alert-danger">';
                            result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                            result +='<strong>Conectado</strong> <a href="#" class="alert-link">Bienvenidos.</div>';
                            location.href='?view=index';
                            document.getElementById('ajax').innerHTML = result;

                        }else{
                            //error de espacios
                            result = '<div class="alert alert-dismissible alert-danger">';
                            result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                            result +='<strong>Oh snap!</strong> <a href="#" class="alert-link">Credenciales incorrectas.</div>';

                            document.getElementById('ajax').innerHTML = result;
                        }
                    }else if(connect.readyState !=4){
                        //error de espacios
                        result = '<div class="alert alert-dismissible alert-warning">';
                        result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                        result +='Procesando.....</div>';

                        document.getElementById('ajax').innerHTML = result;
                    }
                }

                connect.open('POST','?view=login', true);
                connect.send(form);
            }else{
                //error de espacios
                result = '<div class="alert alert-dismissible alert-danger">';
                result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
                result +='<strong>Oh snap!</strong> <a href="#" class="alert-link">Error!.</div>';

                document.getElementById('ajax').innerHTML = result;
            }
            
        }
        
   }

</script>
</body>
</html>