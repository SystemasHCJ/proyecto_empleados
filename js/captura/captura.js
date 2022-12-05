$(document).ready(function () {
    $('#modal_New_Person').submit(function (event) {
        $.ajax({
            type: 'POST',
            url: '../../back/views/CapturaV.php',
            data: $('#frmNuevoEmple').serialize(),
            dataType: "json",
            success: function (r) {
                console.log(r);
                r.insert.msg === 'ok' ? (
                        toastr["success"]('Guardado', 'Turno'),
                        $('#tbl_Empleados').DataTable().ajax.reload(null, false)
                        ) :
                        Swal.fire({
                            icon: 'error',
                            title: 'Hubo un error ☹!',
                            text: JSON.stringify(r),
                            footer: 'Por favor tome captura de este mensaje y contacte a Desarrollo de sistemas'}
                        );
                $('#modal_New_Person').modal('hide');
            }, error: function (r) {
                console.error(r);
            }
        });
        event.preventDefault();
    });
});

$.fn.dataTable.moment('DD/MM/YYYY');
$.fn.dataTable.moment('MM/YYYY');
$.fn.dataTable.moment('HH:mm MMM D, YY');
$.fn.dataTable.moment('dddd, MMMM Do, YYYY'); //
$.fn.dataTable.moment('Do [de] MMMM [del] YYYY h:mm:ss a');
$.fn.dataTable.moment('DD/MM/YYYY h:mm a');





/*Inisializacion del Datatable*/
$('#tbl_Empleados').DataTable({
    "processing": true, //Premiote procesar la info
    "ajax": {
        url: "../../back/views/CapturaV.php", //Urls de peticion
        method: 'POST', //Envia variables por el metodod post
        data: function (G) {//pasando variables ala url
            G.op = 2;//Entra en el menu dos de la url
            //G.TP = $('#filt_TpEmple_DataTable').val();// pasa un parametro para el filtro
        },
        dataSrc: ""
    },
    deferRender: true,
    responsive: false, //desactiva la tabla responsiva
    "autoWidth": false, //quita la propiedad de ajustar el ancho
    "destroy": true, // permite destruir el datatable
    "paging": true, // muestra el numero de pag
    scrollY: 400, // ancho del datable 
    scrollX: true, // activa el scroll
    scrollCollapse: false,
    "aaSorting": [], // Metodo que ordena la tabla
    "dom": 'Bfrtilp', // Apis que permiten extraer la info del datatable
    keys: true,
    fixedColumns: {// Fija la columna 1 y la ultima 
        left: [2],
        right: 1
    },
    search: {//Activa la tecla intro para realizar un busqueda
        return: true
    },
    "ordering": true, //Propieedad de ordenamiento
    "language": {//Json con la traduccion del Datable
        "url": "../assets/DataTables_traslate/General.json"
    },
    buttons: [// botones para exportar la info del datatable
        {extend: 'excelHtml5', footer: false,
            className: 'btn btn-success',
            titleAttr: 'Exportar a Excel',
            text: '<i class="fas fa-file-excel"></i>',
            title: 'Lista de Turnos',
            orientation: 'landscape', pageSize: 'LEGAL', exportOptions: {
                columns: ':visible'
            }, sheetName: 'Turnos', autoFilter: false},

        {extend: 'colvis', text: 'Ver', className: 'btn btn-warning',

        }
    ],
    "columns": [//Variables que recibe de la sql 
        {
            "width": "1%",
            orderable: false,
            data: null,
            defaultContent: '<button type="button" id="more" class="btn btn-info btn-sm">Info</button>',
        },
        {
            data: "num_empleado",
            "width": "1%", "className": 'text-center h6', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data).padStart(5, 0);// funcionn que agrega ceros de js
            }
        },
        {
            data: "nombre_completo",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "nombre_centro",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "des_puesto",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "curp_empleado",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "nss_empleado",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "rfc_empleado",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "cta_ban_empleado",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "correo_empleado",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "nom_pais",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "nom_entidadfederativa",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "nom_munucipio",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "nom__colonia",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return (data);// funcionn que agrega ceros de js
            }
        },
        {
            data: "calle_empleado",
            "width": "1%", "className": 'text-center small', // Personaliza la columna 0
            "render": function (data, type, row) {
                return 'Calle: ' + data
                        + '<br> No.ext: ' + row.num_casa_ex_empleado
                        + '<br> No.ext: ' + row.num_casa_inter_empleado
                        + '<br> Referencia: ' + row.des_refer_domi_empleado;// funcionn que agrega ceros de js
            }
        },
        {
            "width": "1%",
            orderable: false,
            data: null,
            defaultContent: '<button type="button" id="eliminarEmpleado" class="btn btn-sm btn-outline-danger"  title="Eliminar empleado"><i class="far fa-trash-alt"></i></button>' +
                    '<button type="button" id="editarEmpleado" class="btn btn-sm btn-outline-teal"  title="Editar empleado"><i class="far fa-envelope"></i></button>',
        },
    ],
    "lengthMenu": [[50, 75, 100, -1], [50, 75, 100, "All"]], // tamaño del selector de registros
    /*initComplete: function () {
     // Api para la busqueda érsonalizada del foother
     // cada que se haga un cambio y se precione la tecla intro realiza una busqueda
     this.api()
     .columns()
     .every(function () {
     var that = this;
     $('input', this.footer()).on('change clear', function () {
     if (that.search() !== this.value) {
     that.search(this.value).draw();
     }
     });
     });
     }*/
});


$('#tbl_Empleados tbody').on('click', 'button#more', function () {
    var tr = $(this).closest('tr');
    var row = $('#tbl_Empleados').DataTable().row(tr);
    //var pos = row[0][0];
    //var data = $('#tbl_Empleados').DataTable().row($(this).parents('tr')).data();
    if (row.child.isShown()) {
        row.child.hide();
        tr.removeClass('text-success');
    } else {
        row.child(DetailRe(row.data())).show();
        tr.addClass('text-success');
    }
});

function DetailRe(d) {
    return '<table width="200px" class="table table-sm table-hover table-info" cellpadding="1" cellspacing="0" border="0">' +
            '   <tr>' +
            '       <th style="width: 10%">Fecha de Nacimioento</th>' +
            '       <td style="width: 90%">' + moment(d.fec_nac_empleado).format('DD/MM/YYYY') + '</td>' +
            '   </tr>' +
            '   <tr>' +
            '       <th scope="row">Genero</th>' +
            '       <td>' + d.des_genero + '</td>' +
            '   </tr>' +
            '   <tr>' +
            '       <th scope="row">Tipo de Sangre</th>' +
            '       <td>' + d.des_tipo + '</td>' +
            '   </tr>' +
            '   <tr>' +
            '       <th scope="row">Tel contacto</th>' +
            '       <td>' + d.tel_incidente_empelado + '</td>' +
            '   </tr>' +
            '   <tr>' +
            '       <th scope="row">Nacionalidad</th>' +
            '       <td>' + d.nacionalidad + '</td>' +
            '   </tr>' +
            '   <tr>' +
            '       <th scope="row">Fecha de alta</th>' +
            '       <td>' + moment(d.fec_alta_empleado).format('DD/MM/YYYY h:m:s a') + '</td>' +
            '   </tr>' +
            '</table>';
}

$('#tbl_Empleados tbody').on('click', 'button#eliminarEmpleado', function () {
    var tr = $(this).closest('tr');
    var info = $('#tbl_Empleados').DataTable().row(tr).data();
    var trDelete = $(this).parents('tr');

    Swal.fire({
        title: '¿Esta Segur@ de Eliminar él empleado?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Si',
        //denyButtonText: `Don't save`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: '../../back/views/CapturaV.php',
                dataType: "json",
                data: {op: 3, key: info.pk_idu_empleado},
                success: function (r) {
                    r.delete.r === 'true' ? (toastr["success"]('Eliminado', 'Empleado'),
                            $('#tbl_Empleados').DataTable().row(trDelete).remove().draw()) :
                            r.delete === false ? toastr["error"]('No Eliminado :(', 'Empleado') : '';

                }, error: function () {
                }
            });
        }
    });
});

$('#tbl_Empleados tbody').on('click', 'button#editarEmpleado', function () {
    var tr = $(this).closest('tr');
    var info = $('#tbl_Empleados').DataTable().row(tr).data();
    $('#titleEmpleado').text('Editar Empleado: ' + (info.nombre_completo));
    $('#P_fec_nac').val(moment(info.fec_nac_empleado).format('L'));
    $('#P_CURP').val(info.curp_empleado);
    $('#P_NSS').val(info.nss_empleado);
    $('#P_RFC').val(info.rfc_empleado);
    $('#P_TEL').val(info.tel_empleado);
    $('#P_TEL_acc').val(info.tel_incidente_empelado);
    $('#P_cta_banc').val(info.cta_ban_empleado);
    $('#P_email').val(info.correo_empleado);
    $('#P_calle').val(info.calle_empleado);
    $('#P_NoExt').val(info.num_casa_ex_empleado);
    $('#P_NoInt').val(info.num_casa_inter_empleado);
    $('#P_refere').val(info.des_refer_domi_empleado);
    $('#key').val(info.pk_idu_empleado);

    var key = info.pk_idu_empleado;
    $.ajax({
        type: 'POST',
        url: '../../back/views/CapturaV.php',
        data: {op: 4, key: key},
        dataType: "json",
        success: function (r) {
            $('#P_Nombre').val(r.nom_empleado);
            $('#P_ApelP').val(r.apel_paterno_empleado);
            $('#P_ApelM').val(r.apellido_materno);

            setTimeout(function () {
                $("#P_slctgenero").val(r.pk_idu_genero).change();
                $("#P_slctNacio").val(r.pk_idu_nacionalidad);
                $("#P_slctSangre").val(r.pk_idu_tiposangre);
                $("#P_slctNV_estudio").val(r.pk_idu_nivelestudio);
                $("#P_slctCentro").val(r.pk_idu_centro);
                $("#P_slctPuesto").val(r.pk_idu_puesto);
            }, 300);
            setTimeout(function () {
                $("#P_slctPais").val(r.pk_idu_pais).change();
            }, 200);
            setTimeout(function () {
                $("#P_slctFedera").val(r.pk_idu_entidadfederativa).change();
            }, 300);
            setTimeout(function () {
                $("#P_slctMuni").val(r.pk_idu_municipio).change();
            }, 400);
            setTimeout(function () {
                $("#P_slctColonia").val(r.pk_idu_colonia).change();
            }, 500);

        }, error: function (r) {
            console.error(r);
        }
    });

    $('#op').val(5);
    $('#modal_New_Person').modal('show');
});

$("#modal_New_Person").on("hidden.bs.modal", function () {
    $("#frmNuevoEmple")[0].reset();
    $('#op').val(1);
    $('#titleEmpleado').text('Nuevo Empleado');
});