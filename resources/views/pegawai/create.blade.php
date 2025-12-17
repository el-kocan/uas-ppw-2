@extends('base')
@section('title', 'Tambah Pegawai')
@section('menupegawai', 'underline decoration-4 underline-offset-7')

@section('content')
<section class="p-4 bg-white rounded-lg min-h-[50vh]">
    <h1 class="text-3xl font-bold text-[#C0392B] mb-6 text-center">Tambah Pegawai</h1>
    
    <div class="mx-auto max-w-lg">
        @if ($errors->any())
            <div class="mb-4 rounded-md bg-red-50 p-4 border border-red-200">
                <ul class="list-disc pl-5 text-sm text-red-700">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pegawai.store') }}" method="POST" autocomplete="off" class="flex flex-col gap-4">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama" value="{{ old('nama') }}" required
                    class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" required
                    class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div class="mb-3">
                <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <select name="gender" required class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm">
                    <option value="male">Laki-laki (Male)</option>
                    <option value="female">Perempuan (Female)</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                <select name="pekerjaan_id" required
                    class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">-- Pilih Pekerjaan --</option>
                    @foreach($pekerjaans as $p)
                        <option value="{{ $p->id }}" {{ old('pekerjaan_id') == $p->id ? 'selected' : '' }}>
                            {{ $p->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex gap-2 mt-4">
                <button type="submit" class="w-full rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">
                    Simpan Data
                </button>
                <a href="{{ route('pegawai.index') }}" class="w-full text-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                    Batal
                </a>
            </div>
        </form>
    </div>
</section>
@endsection