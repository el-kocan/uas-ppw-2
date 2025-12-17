@extends('base')
@section('title', 'Edit Pegawai')

@section('content')
<section class="p-4 bg-white rounded-lg min-h-[50vh]">
    <h1 class="text-3xl font-bold text-[#C0392B] mb-6 text-center">Edit Pegawai</h1>
    
    <div class="mx-auto max-w-lg">
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Wajib ada untuk proses Update --}}

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama" value="{{ $pegawai->nama }}" required class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ $pegawai->email }}" required class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Gender</label>
                <select name="gender" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm">
                    <option value="male" {{ $pegawai->gender == 'male' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="female" {{ $pegawai->gender == 'female' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                <select name="pekerjaan_id" class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm">
                    @foreach($pekerjaans as $p)
                        <option value="{{ $p->id }}" {{ $pegawai->pekerjaan_id == $p->id ? 'selected' : '' }}>
                            {{ $p->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="w-full rounded-md bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700">Update Data</button>
                <a href="{{ route('pegawai.index') }}" class="w-full text-center rounded-md border border-gray-300 px-4 py-2 text-sm">Batal</a>
            </div>
        </form>
    </div>
</section>
@endsection