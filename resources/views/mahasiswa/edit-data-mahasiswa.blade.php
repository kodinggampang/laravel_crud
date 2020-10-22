<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container" style="padding: 20px;">
                    <form action="{{route('update-data-mahasiswa', $mahasiswa[0]->id )}}" method="post">
                        @csrf
                        <div class="col-md-12 mt-4 mb-4">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" value="{{$mahasiswa[0]->nama_mahasiswa}}" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label>Nomor Induk Mahasiswa</label>
                            <input type="number" class="form-control" name="nim" id="nim" value="{{$mahasiswa[0]->nim}}" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="{{$mahasiswa[0]->alamat}}" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <button class="btn btn-success" type="submit">Ubah Data</button>
                            <a href="{{route('data-mahasiswa')}}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
