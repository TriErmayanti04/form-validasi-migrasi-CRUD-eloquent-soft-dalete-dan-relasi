<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<<<<<<< HEAD
    <title>Tutorial Laravel #21 : CRUD Eloquent Laravel – www.capekngoding.com</title>
=======
    <title>Tutorial Laravel #21 : CRUD Eloquent Laravel – www.malasngoding.com</title>
>>>>>>> 5c7bd0f67202f43e80e535da5b78c851ec74a0cd
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
<<<<<<< HEAD
                Data Pegawai – <strong>EDIT DATA</strong> – <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.capekngoding.com</a>
=======
                CRUD Data Pegawai – <strong>EDIT DATA</strong> – <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
>>>>>>> 5c7bd0f67202f43e80e535da5b78c851ec74a0cd
            </div>
            <div class="card-body">
                <a href="/pegawai" class="btn btn-primary">Kembali</a>
                <br><br>
                
                <form method="post" action="/pegawai/update/{{ $pegawai->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama pegawai .." value="{{ $pegawai->nama }}">
                        
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat pegawai ..">{{ $pegawai->alamat }}</textarea>
                        
                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
