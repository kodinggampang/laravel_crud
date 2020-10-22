<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container" style="padding: 20px;">
                    <form action="{{route('store-data-mahasiswa')}}" method="post">
                        @csrf
                        <div class="col-md-12 mt-4 mb-4">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label>Nomor Induk Mahasiswa</label>
                            <input type="number" class="form-control" name="nim" id="nim" placeholder="" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <button class="btn btn-success" type="submit">Input Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
