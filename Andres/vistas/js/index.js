
$(document).ready(function() {
  traerDatos();
});

function traerDatos() {
  $.ajax({
      url: "../controller/traerMotosController.php",
      type: "POST",
      data: {},
      dataType: 'json',
      success: function(result) {
          var detalle = "";
          jQuery.each(result, function(i) {
              detalle += "<tr>";
              detalle += "<td>" + result[i].id + " </td>";
              detalle += "<td>" + result[i].marca + "</td>";
              detalle += "<td>" + result[i].modelo + "</td>";
              detalle += "<td>" + result[i].color + "</td>";
              detalle += "<td>" + result[i].categoria + "</td>";
              detalle += "<td><button type='button' class='btn btn-outline-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Actualizar</button><button type='button' class='btn btn-outline-danger'>Eliminar</button></td>"
              detalle += "</tr>";
          });
          $("#tabla_motos").append(detalle);
      },
      error: function(result) {
          console.error("Este callback maneja los errores", result);
      }
  });
}
