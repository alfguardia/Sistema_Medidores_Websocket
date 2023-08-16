<?php
require '../../connection.php';
$sql = "SELECT * FROM tabla_litros ORDER BY ID DESC";
$result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Se linkea a la hoja de estilos -->
    <link rel="stylesheet" href="../../build/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">


    <!-- SCRIPTS DE EXPORTACION -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

    <!-- --- -->
    <title>Sistema de Medición de Liquidos</title>
</head>

<body>
    <main id="main-content">
        <header id="header" class="header">
            <div class="header-container">
                <a href="index.php">
                    <img class="header-img" src="../../src/img/Amym.png" alt="logo ashira">
                </a>
                <h1 class="header-h1">Sistema de Medición de Liquidos</h1>
            </div>
        </header>
        <?php include 'navBar.php'; ?>
        <?php include 'sidenav.php'; ?>

        <div class="table">
            <div class="table-container">
                <table id="Consulta_Litros" class="display nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Unidad</th>
                            <th>Litros</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>

                            <td><?php echo $row['Id']; ?></td>
                            <td><?php echo $row['Fecha']; ?></td>
                            <td><?php echo $row['Unidad']; ?></td>
                            <td><?php echo $row['Litros']; ?></td>
                            <td><?php echo $row['IDLolin']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        </div>

        <script>
        $(document).ready(function() {
            var table = $('#Consulta_Litros').DataTable({
                "order": [
                    [1, "desc"]
                ],

                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                    'pdfHtml5'
                ],
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,

            });
        });

        $('#Consulta_Litros tbody').on('click', 'tr', function() {
            $(this).toggleClass('selected');
        });

        $('#button').click(function() {
            alert(table.rows('.selected').data().length + ' row(s) selected');
        });
        </script>


    </main>
</body>

</html>