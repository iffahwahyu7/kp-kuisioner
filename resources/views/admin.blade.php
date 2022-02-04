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
        <h4 class="card-title text-center">HASIL KUISIONER SURVEY KEPUASAN MASYARAKAT</h4>
        <div class="row">
            <div class="column">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nomor Responden</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Kelompok Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Pendidikan Terakhir</th>
                            <th scope="col">Pekerjaan Utama</th>
                            <th scope="col">Suku Bangsa</th>
                            <th scope="col">Jenis Pelayanan</th>
                            <th scope="col">U1</th>
                            <th scope="col">U2</th>
                            <th scope="col">U3</th>
                            <th scope="col">U4</th>
                            <th scope="col">U5</th>
                            <th scope="col">U6</th>
                            <th scope="col">U7</th>
                            <th scope="col">U8</th>
                            <th scope="col">U9</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($models as $model)
                        <tr>
                            <td>{{ $model->no_responden }}</td>
                            <td>{{ $model->umur}}</td>
                            <td>{{ $model->kelompok_umur}}</td>
                            <td>{{ $model->jenis_kelamin}}</td>
                            <td>{{ $model->pendidikan_terakhir}}</td>
                            <td>{{ $model->pekerjaan_utama}}</td>
                            <td>{{ $model->suku_bangsa}}</td>
                            <td>{{ $model->jenis_pelayanan}}</td>
                            <td>{{ $model->u1}}</td>
                            <td>{{ $model->u2}}</td>
                            <td>{{ $model->u3}}</td>
                            <td>{{ $model->u4}}</td>
                            <td>{{ $model->u5}}</td>
                            <td>{{ $model->u6}}</td>
                            <td>{{ $model->u7}}</td>
                            <td>{{ $model->u8}}</td>
                            <td>{{ $model->u9}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <dl class="row">
                    <dt class="col-sm-3">Kesimpulan</dt>
                    <dd class="col-sm-9"><br></dd>

                    <dt class="col-sm-3">Nilai IKM setelah dikonversi</dt>
                    <dd class="col-sm-9">= {{ $ikm }} </dd>
                    
                    <dt class="col-sm-3">Mutu pelayanan</dt>
                    <dd class="col-sm-9">= {{ $mutu }}</dd>
                  
                    <dt class="col-sm-3">Kinerja Unit Pelayanan</dt>
                    <dd class="col-sm-9">= {{ $kinerja }}</dd>
                </dl>
            </div>
            
        </div>
                
    </div>
</body>
</html>