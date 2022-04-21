<?php
$var = 0;
?>
<html>
    <body>
        <input type="button" value="Enviar variable" id="send"/>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $('#send').click( function() {

        var resultado = window.confirm('Estas seguro que desea eliminar?');
          if (resultado == true) {
            var id =prompt("confirme el id: ");
            var origen =prompt("confirme si es salida o entrada: S (salida)  E (entrada) "); 
            
        } else { 
             window.alert('error');
        } 
    $.ajax(
                {
                    url: 'delete.php?var=<?php echo $var; ?>',
                    success: function( data ) {
                        alert( 'El servidor devolvio "' + data + '"' );
                    }
                }
            )
        }
    );
    </script>
</html>