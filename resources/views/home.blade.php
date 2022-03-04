<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap DataTables CSS -->
    
    <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <link href="{{ asset('/css/sidebar.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <h1 style="text-align:center">Dompet Adi Kristianto</h1>
    </div>
    <div class="row">
        <div id="sidebarku">
            <div id="wrapper">
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <button class="btn btn-custom" id="tutup" style="hidden">
                            <i class="fa fa-bars" aria-hidden="true"></i> 
                        </button>
                        <li><a href="#">1. Master</a>
                            <li><a href="#">a. Dompet</a>
                        </li>
                        <li><a href="#">2. Transaksi</a></li>
                        <li><a href="#">3. Laporan</a></li>
                    </ul>
                </div>

                <div id="page-content-wrapper">
                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#" class="btn" id="menu-toggle">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contentku">
            {{-- <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dolorum illum labore modi aperiam. Impedit, veniam reprehenderit esse doloribus, facere iusto ratione repudiandae ipsa quae beatae ullam natus, voluptate cupiditate?
            </p> --}}
            @yield('contentku')
        </div>
    </div>
</body>

<footer>
    <script>
        $("#sidebarku").toggleClass("col-md-1");

        $("#contentku").toggleClass("col-md-11");

        $("#menu-toggle").click(function (e){
            e.preventDefault();
            console.log("test");
            $("#sidebarku").toggleClass("col-md-1");
            $("#contentku").toggleClass("col-md-11");
            $("#sidebarku").toggleClass("col-md-4");
            $("#contentku").toggleClass("col-md-8");
            $("#wrapper").toggleClass("menuDisplayed");
            $("#menu-toggle").hide();            
        });
        
        $("#tutup").click(function (e){
            $("#sidebarku").toggleClass("col-md-1");
            $("#contentku").toggleClass("col-md-11");
            $("#sidebarku").toggleClass("col-md-4");
            $("#contentku").toggleClass("col-md-8");
            $("#wrapper").toggleClass("menuDisplayed");
            $("#menu-toggle").show(); 
            
        
        });
        $('.mydatatable').dataTable({
            lengthMenu: [[5, 10, 25, 50], [1, 2, 3, 'all']]
        });
    </script>
    <p style="text-align:center">Maju bersama Atomic Indonesia</p>
</footer>

</html>