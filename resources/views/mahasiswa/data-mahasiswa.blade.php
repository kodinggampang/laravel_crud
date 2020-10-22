<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="float: left;">
            {{ __('Data Mahasiswa') }}
        </h2>
        <a href="{{route('tambah-data-mahasiswa')}}" class="btn btn-sm btn-primary text-white" style="float: right;">Tambah Data Mahasiswa</a>
        <div style="clear:both;"></div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswas as $mahasiswa)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->alamat }}</td>
                                <td>
                                    <form style="float: left; margin-right: 4px;" action="{{route('delete-data-mahasiswa', $mahasiswa->id)}}" method="post">@csrf
                                        <button class="badge badge-sm badge-danger" type="submit">Hapus</button>
                                    </form>
                                    <a href="{{route('edit-data-mahasiswa', $mahasiswa->id)}}" class="badge badge-sm badge-success">Edit</a>
                                    <a href="{{route('detail-data-mahasiswa', $mahasiswa->id)}}" class="badge badge-sm badge-info">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
