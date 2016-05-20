{include 'Overall/header.tpl'}

<body>

{include 'Overall/nav.tpl'}     

      
<div class="container" style="margin-top: 100px;">
  	<div class="jumbotron">
	    <h1>Bienvenido al curso!</h1>
	    <p class="lead">Plantilla de ejemplo para iniciar el curso de php avanzado.</p>
	    <p><a class="btn btn-lg btn-success" href="http://www.prinick.com" role="button">Comenzar!</a></p>
	    
	    <!-- DELETE / BORRAR botón de donar-->
	    <p>
	    <center>
		    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="KVHH8KYREXUFS">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
			</form>
		</center>
	    <center>También podrías ayudarme con una donación por el curso gratuito ;)</center>
	    </p>
	</div>
</div>
{include 'Overall/footer.tpl'}
</body>
</html>
