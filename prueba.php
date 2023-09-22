	<table class="catalis">
	<tr><td align="center">
		<h2>Impresion de Etiquetas</h2>
		<form onsubmit="return validForm(this)" action="etiquetas-procesar.php" method="post">
		<p>Seleccione la Base de datos de la cual quiere Imprimir etiquetas:<br> 
		<select name=base>
			<?php
				$basesxis = file_get_contents("https://campi-catalogacion.uns.edu.ar/catalis/cgi-bin/wxis?IsisScript=catalis/xis/herramientas/bases.xis&usuario=lv");
				$bases = explode(":",$basesxis);
				for($i=0;$i<count($bases)-1;$i++){
					echo "<option value=$bases[$i]>$bases[$i]</option>";
				}
			?>
		</select>
		</p>	
		<p>
		Ingrese los n&uacute;meros de inventario:<br>
		(Uno debajo del otro, al final no dejar espacios)<br>
		<textarea name="inventarios" rows="10">
		</textarea>
		</p>
	</td></tr>	
	<tr><td align="center">
	    <h3> Tama&#241o de la Etiqueta </h3>
	    <input type="radio" name="tamanio" value="chica"> 2,5 cm (alto) x 5 cm (ancho) <br>
	    <input type="radio" name="tamanio" value="grande" checked="checked"> 4,4 cm (alto) x 5,5 cm (ancho) <br>	
	    <p><input type="submit" value="   Generar  Etiquetas    "></p>
	</td></tr>	
	</form>
	
	</table> 

