<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-lg-3">
        {{-- @if ($errors->any())
            <div class="col-md-6 offset-3 bg-danger rounded px-3 py-2 text-white my-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="row">
            <div class="col-md-6 offset-3 bg-info rounded py-3">
                <h1 class="text-center fw-bold">Tambah Data Produk</h1>
                <form class="mx-1 my-3" action="{{ route('list.update', ['id' => $list->id]) }}" method="POST">
                    @csrf()
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                            placeholder="{{$list->Nama}}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Berat</label>
                        <input type="number" class="form-control" name="berat" id="exampleFormControlInput1"
                            placeholder="{{$list->Berat}}">
                            @error('berat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">gambar</label>
                        <input type="file" class="form-control" name="gambar" id="exampleFormControlInput1"
                            placeholder="{{$list->Gambar}}">
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control" name="harga" id="exampleFormControlInput1"
                            placeholder="{{$list->Harga}}">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control" name="stok" id="exampleFormControlInput1"
                            placeholder="{{$list->stock}}">
                            @error('stok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Kondisi Barang</label>
                        <select class="form-select" name="kondisi" id="">
                            <option value="0" selected>{{ $list->Kondisi }}</option>
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
                        </select>
                        @error('kondisi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" placeholder="{{$list->Deskripsi}}" id="exampleFormControlTextarea1" name="deskripsi" rows="3"></textarea>
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <button class=" mt-3 btn btn-lg btn-dark mx-auto" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
