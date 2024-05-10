<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <h2 class="text-center fw-bold mt-2">Profil</h2>
            <div class="mt-3 bg-dark mx-auto rounded" style="height: 3px;width: 75px"></div>
            <div class="d-flex justify-content-between my-2">
                <button type="button" class="btn btn-success" >
                    <a href="{{ route('list-id2') }}" style="text-decoration: none; color: inherit; ">Kembali Ke List product</a>
                </button>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                    @foreach ($list as $item)
                    <div class="card-body">
                      <h5 class="card-title">Nama : {{ $item->Nama }}</h5>
                      <p class="card-text">Email :{{ $item->Email }}</p>
                      <p class="card-text">Jenis Kelamin :{{ $item->Jenis_Kelamin }}</p>
                      <p class="card-text">Alamat :{{ $item->Alamat }}</p>

                    </div>
                    @endforeach
                </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    @foreach ($listed as $item )
                    <div class="card-body">
                        <h5 class="card-title">Nama Toko : {{ $item->Nama_Toko}}</h5>
                        <p class="card-text">Rating : {{ $item->Rating}}</p>
                        <p class="card-text">Produk : {{ $item->produk_terbaik}}</p>
                        <p class="card-text">Deskripsi : {{ $item->Deskripsi_Toko}}</p>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
