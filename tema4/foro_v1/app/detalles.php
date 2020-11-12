  
<div class="detalles">
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:</td><td><?= strlen($_REQUEST['comentario']) ?></td></tr>
<tr><td>Nº de palabras:</td><td><?= contarPalabras($_REQUEST['comentario']) ?></td></tr>

</table>
</div>