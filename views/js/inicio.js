var usu_id = $("#usu_idx").val();
$(document).ready(function() {
    $.post(
      "/proyectoJP/controller/usuario.php?opc=total",
      { usu_id: usu_id },
      function (data) {
        data = JSON.parse(data);
        $("#datotal").html(data.total);
      }
    );
  
});

$(document).ready(function () {
  $.post(
    "/proyectoJP/controller/usuario.php?opc=total_profesores",
    { usu_id: usu_id },
    function (data) {
      data = JSON.parse(data);
      $("#prof_total").html(data.total_profesores);
    }
  );
});

$(document).ready(function () {
  $.post(
    "/proyectoJP/controller/usuario.php?opc=total_usuarios",
    { usu_id: usu_id },
    function (data) {
      data = JSON.parse(data);
      $("#usus_total").html(data.total_usuarios);
    }
  );
});