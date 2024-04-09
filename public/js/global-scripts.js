$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
function confirmarEliminacion(id) {
    swal({
        title: "¿Está seguro de eliminar?",
        text: "¡No podrá recuperar los datos!",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Eliminar",
        cancelButtonText: "No, retornar",
        confirmButtonClass: "btn btn-danger",
        cancelButtonClass: "btn btn-default",
        buttonsStyling: false,
    }).then(
        function () {
            // Si el usuario confirma, enviar el formulario de eliminación
            document.getElementById("eliminarForm-" + id).submit();
        },
        function (dismiss) {
            dismiss === "cancel" ? swal.noop : null;
        }
    );
}
$("#datatables").DataTable({
    language: {
        search: "_INPUT_",
        searchPlaceholder: "Buscar",
        decimal: "",
        emptyTable: "No hay información",
        info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
        infoFiltered: "(Filtrado de _MAX_ total entradas)",
        infoPostFix: "",
        thousands: ",",
        lengthMenu: "Mostrar _MENU_ Entradas",
        loadingRecords: "Cargando...",
        processing: "Procesando...",
        zeroRecords: "Sin resultados encontrados",
        paginate: {
            first: "Primero",
            last: "Ultimo",
            next: "Siguiente",
            previous: "Anterior",
        },
    },
    lengthMenu: [
        [5, 25, 50, -1],
        [5, 25, 50, "Todos"],
    ],
    responsive: true,
    order: [[0, "desc"]],
});
