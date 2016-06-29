<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/metisMenu.min.css">
    <link rel="stylesheet" href="/css/sb-admin-2.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="icon" href="/img/favicon.ico">
    <!-- CSS del plugin -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">
    
    <!-- JS del plugin -->
    
    <script type="text/javascript" language="javascript" src="/js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script>
    <script src="/js/jquery.dataTables.min.js" > </script>
    
    <!-- Script que traduce la data table -->
    <script>    
        $(document).ready(function() 
        {
            $('#example').DataTable( 
            {
                "language": 
                {
                    "lengthMenu": "Visualizar _MENU_ registros por página",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sSearch":         "Buscar:",
                    "sLoadingRecords": "Cargando...",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "oPaginate": 
                    {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },

                    "oAria": 
                    {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }


                }
            });
        });
    </script>


</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">               
                <a class="navbar-brand" href="index.html">Control de equipo de computo</a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                
            </div>
           
            
            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="empleado"><i class="fa fa-users fa-fw"></i> Empleados</a>
                            
                        </li>
                        <li>
                            <a href="departamento"><i class="fa fa-building fa-fw"></i> Departamentos</a>
                        </li>
                        <li>
                            <a href="equipo"><i class="fa fa-desktop fa-fw"></i> Equipos de computo</a>
                        </li>

                        <li>
                            <a href="impresora"><i class="fa fa-print fa-fw"></i>Impresoras</a>
                        </li>

                        <li>
                            <a href="accesorio"><i class="fa fa-archive fa-fw"></i>Accesorios</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Mantenimiento<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-desktop fa-fw'></i> Equipo de computo</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-print fa-fw'></i> Impresoras</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
                @yield('content')
        </div>

    </div>
    
</body>

</html>