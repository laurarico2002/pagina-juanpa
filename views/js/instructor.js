var usu_id = $("#usu_idx").val();

function init() {
  $("#instructor_form").on("submit", function (e) {
    guardaryeditar(e);
  });
}

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#instructor_form")[0]);
  console.log(formData);
  $.ajax({
    url: "/proyectoJP/controller/profesores.php?opc=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data);
      $("#instructor_data").DataTable().ajax.reload();
      $("#modalInstructor").modal("hide");
      Swal.fire({
        title: "Correcto",
        text: "Se guardó el registro",
        icon: "success",
        confirmButtonText: "Aceptar",
      }).then(function () {
        // Refrescar la página
        window.location.reload();
      });
    },
  });
}

$(document).ready(function () {
  $("#instructor_data").DataTable({
    aProcessing: true,
    aServerSide: true,
    dom: "Bfrtip",
    buttons: ["excelHtml5", "csvHtml5", "pdfHtml5"],
    ajax: {
      url: "/proyectoJP/controller/profesores.php?opc=listar",
      type: "post",
      data: { usu_id: usu_id },
    },
    bDestroy: true,
    responsive: true,
    bInfo: true,
    iDisplayLength: 15,
    order: [[0, "desc"]],
    language: {
      sProcessing: "Procesando...",
      sLengthMenu: "Mostrar MENU registros",
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo:
        "Mostrando registros del START al END de un total de TOTAL registros",
      sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
      sInfoFiltered: "(filtrado de un total de MAX registros)",
      sInfoPostFix: "",
      sSearch: "Buscar:",
      sUrl: "",
      sInfoThousands: ",",
      sLoadingRecords: "Cargando...",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      oAria: {
        sSortAscending:
          ": Activar para ordenar la columna de manera ascendente",
        sSortDescending:
          ": Activar para ordenar la columna de manera descendente",
      },
    },
  });
});

function nuevo() {
  $("#titulo_modal").html("Crear un instructor");
  $("#instructor_form")[0].reset(); //borrar los valores usados en los imput
  $("#modalInstructor").modal("show");
}

function editar(inst_id) {
  $.post(
    "/proyectoJP/controller/profesores.php?opc=mostrar",
    { inst_id: inst_id },
    function (data) {
      data = JSON.parse(data);
      console.log(data);
      $("#inst_id").val(data.inst_id);
      $("#nombrei").val(data.nombrei);
      $("#ape_paternoi").val(data.ape_paternoi);
      $("#ape_maternoi").val(data.ape_maternoi);
      $("#correo").val(data.correo);
      $("#sexo").val(data.sexo);
      $("#telefono").val(data.telefono);
    }
  );
  $("#titulo_modal").html("Editar un Instructor");
  $("#modalInstructor").modal("show");
}

function eliminar(inst_id) {
  Swal.fire({
    title: "Eliminar",
    text: "Desea eliminar el registro",
    icon: "error",
    showCancelButton: true,
    confirmButtonText: "Aceptar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.value) {
      $.post(
        "/proyectoJP/controller/profesores.php?opc=eliminar",
        { inst_id: inst_id },
        function (data) {
          $("#instructor_data").DataTable().ajax.reload();
          Swal.fire({
            title: "Correcto",
            text: "Se elimino el registro",
            icon: "success",
            confirmButtonText: "Aceptar",
          });
        }
      );
    }
  });
}
init();
