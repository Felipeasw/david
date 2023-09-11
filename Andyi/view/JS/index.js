
        $(document).ready(function () {
            traerDatos();

            function traerDatos() {
                $.ajax("../controller/traerMotosController.php", {
                    type: "POST",
                    data: {},
                    async: false,
                    dataType: 'json',
                    success: function(result) {
                        for (var i = 0; i < result.length; i++) {
                            mostrarDatosEnTabla(result[i]);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("No funciona el AJAX", error);
                    }
                });
            }

            function mostrarDatosEnTabla(moto) {
                var tbody = $("#tablaMotosBody");

                var row = $("<tr>");
                $("<th>").html(moto.id).appendTo(row);
                $("<td>").html(moto.marca).appendTo(row);
                $("<td>").html(moto.modelo).appendTo(row);
                $("<td>").html(moto.color).appendTo(row);
                $("<td>").html(moto.categoria).appendTo(row);
                $("<td>").html(`
                    <button type='button' class='btn btn-outline-primary' data-toggle='modal' data-target='#editModal${moto.id}'>Editar</button>
                    <button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#deleteModal${moto.id}'>Eliminar</button>
                `).appendTo(row);
                row.appendTo(tbody);
            }
        });
    