
<!DOCTYPE html>
<html>
<head>
    <title>Vista</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Vista</h1>

    <div id="data-container"></div>

    <script>
        // Realizar la petición AJAX al endpoint /data
        $.ajax({
            url: '/data',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // Manipular los datos recibidos y mostrarlos en la página
                var dataContainer = $('#data-container');

                if (response.length > 0) {
                    var html = '<ul>';

                    response.forEach(function(item) {
                        html += '<li>Nombre: ' + item.nombre + ', telefono: ' + item.telefono + ', correo: ' + item.correo + '</li>';
                    });

                    html += '</ul>';
                    dataContainer.html(html);
                } else {
                    dataContainer.html('<p>No hay registros.</p>');
                }
            },
            error: function() {
                console.log('Error al obtener los datos.');
            }
        });
    </script>
</body>
</html>
