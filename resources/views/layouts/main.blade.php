<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- {{-- icon --}} -->
    <link rel="icon" href="image/icon_telkom.png">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- CSS Default --}}
    <link rel="stylesheet" href="css/style_sidebar.css">
    <link rel="stylesheet" href="css/style_admin.css">

    {{-- Icons --}}
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    {{-- Datatables JS --}}
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <link href="css/sb-admin2.min.css" rel="stylesheet">

    <title>MyGES</title>
</head>

<body>

    <div class="row">
        <div class="col-md-2">
            @include('partials.sidebar')
        </div>

        <div class="col-md-10">
            @yield('container')
        </div>
    </div>

    {{-- Pop up Sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    @yield('script')

    {{-- Datatables JS --}}
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>
