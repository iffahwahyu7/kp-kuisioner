<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container pt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">KUISIONER SURVEY KEPUASAN MASYARAKAT</h4>
                <h6>Kode Dokumen : </h6>
                <h6>Tgl. Pembuatan : </h6>
                <h6>Tgl. Revisi : </h6>
                <h6>Tgl. Efektif : </h6>
                <br>
                <a class="btn btn-primary" href="{{ url('kuisioner/create') }}">Isi Kuisioner</a>
            </div>
        </div>
    </div>
</body>
</html>