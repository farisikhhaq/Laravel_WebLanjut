{{-- @extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar User</h1>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Alamt</th>
                            <th scope="col">Pelanggan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $mhs)

                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td> {$}</td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">hapus</a>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection --}}
