<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="padding: 30px;">
                            <label>Nama : <strong>{{$mahasiswa[0]->nama_mahasiswa}}</strong></label><br>
                            <label>NIM : <strong>{{$mahasiswa[0]->nim}}</strong></label><br>
                            <label>Alamat : <strong>{{$mahasiswa[0]->alamat}}</strong></label><br>
                        </div>
                        <div class="col-md-12" style="padding-bottom: 30px; padding-left: 30px;">
                            <a href="{{route('data-mahasiswa')}}" class="btn btn-sm btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
