<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Sidebars · Bootstrap v5.2</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./sidebars.css" rel="stylesheet">





    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="worldexpress" width="40px" height="40px" viewBox="0 0 100 100">
            <title>World Express</title>
            <path d="M85.6,35.9c0-19.5-15.7-34.7-35.7-34.7c-20,0-35.7,15.3-35.7,34.7c0,0.1,0,0.2,0,0.2c-0.1,1,0.5,2,1.4,2.4L38.7,49H27.9
		c-2.4,0-4.3,1.9-4.3,4.3v40.6c0,2.4,1.9,4.3,4.3,4.3h44.1c2.4,0,4.3-1.9,4.3-4.3V53.3c0-2.4-1.9-4.3-4.3-4.3H61l23.1-10.5
		c0.9-0.4,1.5-1.4,1.4-2.3C85.6,36,85.6,35.9,85.6,35.9z M80.7,33.9h-6.1c-0.4-11-3.7-18.3-7.8-23.2C74.7,15.6,80.1,24,80.7,33.9z
		 M47.9,53.8h1.9c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0h1.8v6l-1.2-0.4c-0.4-0.1-0.9-0.1-1.4,0l-1.3,0.4V53.8z
		 M49.9,46l-3.7-7.3h7.2L49.9,46z M56.4,8.2c5.6,3,12.8,9.9,13.4,25.6l-10,0C60,20.7,58.3,12.9,56.4,8.2z M55,33.8l-10.2,0
		c0.3-18.5,3.5-25,5.1-27.1C51.7,8.8,55.3,15.3,55,33.8z M43.7,8c-1.9,4.7-3.6,12.6-3.8,25.8l-9.9,0C30.8,17.7,38.1,10.8,43.7,8z
		 M33.1,10.6c-4.1,4.9-7.4,12.2-7.8,23.3H19C19.6,24,25.1,15.5,33.1,10.6z M40.8,38.7l3.9,7.7l-17-7.7H40.8z M71.5,93.4H59.7l0-3.7
		l0.7,0.6c0.5,0.4,1,0.6,1.6,0.6c0.7,0,1.3-0.3,1.8-0.8c0.9-1,0.8-2.5-0.3-3.4l-4.8-4.1c-0.9-0.8-2.3-0.8-3.2,0L51,86.7
		c-1,0.9-1.1,2.4-0.2,3.4c0.9,1,2.4,1.1,3.4,0.2l0.6-0.5l0,3.6H44.7l0-3.4l0.7,0.6c0.5,0.4,1,0.6,1.6,0.6c0.7,0,1.3-0.3,1.8-0.8
		c0.9-1,0.8-2.5-0.3-3.4l-4.8-4.1c-0.9-0.8-2.3-0.8-3.2,0L36.1,87c-1,0.9-1.1,2.4-0.2,3.4c0.9,1,2.4,1.1,3.4,0.2l0.6-0.5l0,3.3H28.4
		V53.8h14.7V63c0,0.8,0.4,1.5,1,1.9c0.4,0.3,0.9,0.5,1.4,0.5c0.2,0,0.5,0,0.7-0.1l3.7-1.1l3.6,1.1c0.7,0.2,1.5,0.1,2.1-0.4
		c0.6-0.5,1-1.2,1-1.9v-9.2h14.8V93.4z M55,46.4l3.8-7.7H72L55,46.4z" />
            <path d="M49.9,68.7H32.2c-1.3,0-2.4,1.1-2.4,2.4v5.9c0,1.3,1.1,2.4,2.4,2.4h17.7c1.3,0,2.4-1.1,2.4-2.4v-5.9
		C52.3,69.7,51.2,68.7,49.9,68.7z M47.5,74.5H34.6v-1.1h12.9V74.5z" />
        </symbol>
        <symbol id="cliente" viewBox="0 0 16 16">
            <path
                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
        </symbol>
        <symbol id="camion" viewBox="0 0 16 16">
            <path
                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
        </symbol>
        <symbol id="empleados" viewBox="0 0 16 16">
            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path
                d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
        </symbol>
        <symbol id="paquete" viewBox="0 0 16 16">
            <path
                d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
        </symbol>
        <symbol id="envios" viewBox="0 0 16 16">
            <path
                d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
        </symbol>
        <symbol id="solicitudes" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path
                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
        </symbol>
        <symbol id="volver" viewBox="0 0 16 16">
            <path
                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </symbol>
    </svg>

    <main class="d-flex flex-nowrap">
        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
            <a href="#" class="d-block p-3 link-dark text-decoration-none" title="logo" data-bs-toggle="tooltip"
                data-bs-placement="right">
                <svg class="bi pe-none" width="40" height="40">
                    <use xlink:href="#worldexpress" />
                </svg>
                <span class="visually-hidden">Icon-only</span>
            </a>
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item">
                    <a href="./admin_empleados.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" title="Empleados"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Empleados">
                            <use xlink:href="#empleados" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="./admin_camiones.php" class="nav-link py-3 border-bottom rounded-0" title="Camiones" data-bs-toggle="Camiones"
                        data-bs-placement="right">
                        <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Camiones">
                            <use xlink:href="#camion" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="./admin_paquetes.php" class="nav-link py-3 border-bottom rounded-0" title="Paquetes" data-bs-toggle="Paquetes"
                        data-bs-placement="right">
                        <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Paquetes">
                            <use xlink:href="#paquete" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="./admin_solicitudes.php" class="nav-link py-3 border-bottom rounded-0" title="Solicitudes" data-bs-toggle="Solicitudes"
                        data-bs-placement="right">
                        <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Solicitudes">
                            <use xlink:href="#solicitudes" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="./admin_envios.php" class="nav-link py-3 border-bottom rounded-0" title="Envios" data-bs-toggle="Envios"
                        data-bs-placement="right">
                        <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Envios">
                            <use xlink:href="#envios" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="./admin_clientes.php" class="nav-link py-3 border-bottom rounded-0" title="Customers" data-bs-toggle="Clientes"
                        data-bs-placement="right">
                        <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Clientes">
                            <use xlink:href="#cliente" />
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="border-top">
                <a href="../Controladores/controlador_users.php?accion=cerrar"
                    class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none">
                    <svg class="bi pe-none" width="40" height="40" role="img" aria-label="Volver">
                            <use xlink:href="#volver" />
                        </svg>
                </a>
            </div>
        </div>

        <div class="b-example-divider b-example-vr"></div>




        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="sidebars.js"></script>
</body>

</html>