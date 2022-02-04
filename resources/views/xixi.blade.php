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
                <div class="form">
                    <div>
                        <label for="name">Text Input:</label>
                        <input type="text" name="name" id="name" value="" tabindex="1">
                    </div>
                    <div class="form-group">
                        <label><b>Name</b></label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group row">
                    <label for="no_responden" class="col-sm-2 col-form-label font-weight-bold">Nomor Responden</label>
                    <div class="col-sm-12">
                        <p>Tidak perlu diisi</p> 
                    </div>
                    </div>
                        <div class="form-group">
                        <label class="font-weight-bold">Nama Responden</label>
                        <input type="text" class="form-control" name="nama_responden" id="nama_responden">
                    </div>
                    
                    <div class="form-group row">
                        <label class="font-weight-bold">No. HP</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp">
                    </div>
                    
                    <fieldset class="form-group">
                            <legend class="col-form-label col-sm-2 pt-0 font-weight-bold">Jenis Pelayanan</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_pelayanan" id="1" value="option1">
                                <label class="form-check-label" for="1">
                                    Pengambilan akta cerai
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_pelayanan" id="2" value="option2">
                                <label class="form-check-label" for="2">
                                    Pengambilan salinan putusan/penetapan
                                </label>
                                </div>
                                
                            </div>
                        </div>
                    </fieldset>
                    
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>