<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <h2 class="text-center fw-bold mt-2">List Product</h2>
            <div class="mt-3 bg-dark mx-auto rounded" style="height: 3px;width: 75px"></div>
            <div class="d-flex m-auto p-auto my-2">
                <button type="button" class="btn btn-dark" >
                    <a href="{{ route('cafe') }}" style="text-decoration: none; color: inherit; ">Product</a>
                </button>
                <button type="button" class="btn btn-success" >
                    <a href="{{ route('form') }}" style="text-decoration: none; color: inherit; ">Tambah Product</a>
                </button>
                <button type="button" class="btn btn-success" >
                    <a href="{{ route('profil-id1') }}" style="text-decoration: none; color: inherit; ">profil</a>
                </button>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Stock</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Kondis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list as $post)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $post->Nama }}</td>
                            <td>{{ $post->stock }}</td>
                            <td>{{ $post->Berat }}</td>
                            <td>{{ $post->Harga}}</td>
                            <td>{{ $post->Kondisi}}</td>

                            <td>
                                <a href="{{ route('list.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('list.delete', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="d-flex">
                {{ $posts->links() }}
            </div> --}}
        </div>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>
