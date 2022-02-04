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
                <form action="/store" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group">
                    <label class="font-weight-bold">Nomor Responden</label>
                    <div class="col-sm-12">
                        <p>Tidak perlu diisi</p> 
                    </div>
                    </div>
                        <div class="form-group">
                        <label class="font-weight-bold">Nama Responden</label>
                        <input type="text" class="form-control" name="nama_responden" id="nama_responden">
                    </div>
                                       
                    <div class="form-group">
                        <label class="font-weight-bold">No. HP</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp">
                    </div>
                    
                    <fieldset class="form-group">
                        <label class="font-weight-bold">Jenis Pelayanan</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_pelayanan" id="1" value="1">
                            <label class="form-check-label" for="1">
                                Pengambilan akta cerai
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_pelayanan" id="2" value="2">
                            <label class="form-check-label" for="2">
                                Pengambilan salinan putusan/penetapan
                            </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label class="font-weight-bold">Tgl. Survey</label>
                        <div class="col-sm-10">
                            <?php
                            echo date("d-m-Y") . "<br>";
                            ?>
                        </div>
                    </div>
                                 
                    <div class="form-group">
                        <label class="font-weight-bold">Umur</label>
                        <input type="number" class="form-control" name="umur" id="umur">
                    </div>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="1" value="1">
                            <label class="form-check-label" for="1">
                                Laki-laki
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="2" value="2">
                            <label class="form-check-label" for="2">
                                Perempuan
                            </label>
                            </div>
                        </div>
                    </fieldset>
                                    
                    <fieldset class="form-group">
                        <label class="font-weight-bold">Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir"  id="1" value="1">
                                <label class="form-check-label" for="1">
                                    SD kebawah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir"  id="2" value="2">
                                <label class="form-check-label" for="2">
                                    SLTP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir"  id="3" value="3">
                                <label class="form-check-label" for="3">
                                    SLTA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir"  id="4" value="4">
                                <label class="form-check-label" for="4">
                                    D1-D2-D3-D4
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir"  id="5" value="5">
                                <label class="form-check-label" for="5">
                                    S-1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir"  id="6" value="6">
                                <label class="form-check-label" for="6">
                                    S-2 ke atas
                                </label>
                            </div>
                        </div>
                    </fieldset>
                        
                    <fieldset class="form-group">
                        <label class="font-weight-bold">Pekerjaan Utama</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pekerjaan_utama" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    PNS/TNI/POLRI
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pekerjaan_utama" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Pegawai Swasta
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pekerjaan_utama" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Wiraswasta/Usahawan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pekerjaan_utama" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Pelajar/Mahasiswa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pekerjaan_utama" id="5" value="5">
                                <label class="form-check-label" for="5">
                                    Lainnya
                                </label>
                            </div>
                        </div>
                    </fieldset>
                            
                    <fieldset class="form-group">
                        <label class="font-weight-bold">Suku Bangsa</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku_bangsa" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Jawa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku_bangsa" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Madura
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku_bangsa" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Sunda
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku_bangsa" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Batak
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku_bangsa" id="5" value="5">
                                <label class="form-check-label" for="5">
                                    Banjar
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku_bangsa" id="6" value="6">
                                <label class="form-check-label" for="6">
                                    Lainnya
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">1. Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya.</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u1" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Tidak sesuai
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u1" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Kurang sesuai
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u1" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Sesuai
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u1" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Sangat sesuai
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">2. Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini.</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u2" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Tidak mudah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u2" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Kurang mudah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u2" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Mudah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u2" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Sangat mudah
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">3. Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan.</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u3" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Tidak cepat
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u3" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Kurang cepat
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u3" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Cepat
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u3" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Sangat cepat
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">4. Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan.</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u4" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Sangat mahal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u4" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Cukup mahal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u4" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Murah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u4" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Gratis
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">5. Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standard pelayanan dengan hasil yang diberikan.</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u5" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Tidak ada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u5" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Kadang-kadang ada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u5" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Sering ada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u5" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Selalu ada
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">6. Bagaimana pendapat saudara tentang kompetensi/ kemampuan petugas dalam pelayanan.</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u6" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Tidak kompeten
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u6" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Kurang kompeten
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u6" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Kompeten
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u6" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Sangat kompeten
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">7. Bagaimana pendapat saudara  perilaku petugas dalam pelayanan terkait dengan kesopanan dan keramahan</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u7" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Tidak sopan dan ramah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u7" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Kurang sopan dan ramah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u7" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Sopan dan ramah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u7" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Sangat sopan dan ramah
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">8. Bagaimana pendapat saudara tentang kualitas sarana dan prasarana.</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u8" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Buruk
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u8" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Cukup
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u8" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Baik
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u8" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Sangat baik
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label class="font-weight-bold">9. Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan.</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u9" id="1" value="1">
                                <label class="form-check-label" for="1">
                                    Tidak ada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u9" id="2" value="2">
                                <label class="form-check-label" for="2">
                                    Ada tetap itidak berfungsi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u9" id="3" value="3">
                                <label class="form-check-label" for="3">
                                    Berfungsi kurang maksimal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="u9" id="4" value="4">
                                <label class="form-check-label" for="4">
                                    Dikelola dengan baik
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    
                    <div class="form-group">
                        <label class="font-weight-bold">Saran</label>
                        <textarea class="form-control" name="saran" id="saran" rows="5"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>