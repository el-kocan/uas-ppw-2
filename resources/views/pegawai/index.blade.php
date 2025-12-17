@extends('base')
@section('title', 'Daftar Pegawai')
@section('menupegawai', 'underline decoration-4 underline-offset-7')

@section('content')
<section class="p-4 bg-white rounded-lg min-h-[50vh]">
    <h1 class="text-3xl font-bold text-[#C0392B] mb-6 text-center">Daftar Pegawai</h1>
    
    <div class="mx-auto max-w-screen-xl">
        @if(session('success'))
            <div class="mb-4 rounded-md bg-green-50 p-4 border border-green-200">
                <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
            </div>
        @endif

        <div class="mb-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ route('pegawai.add') }}" class="rounded-md bg-green-600 px-4 py-2 text-sm text-white hover:bg-green-700">
                Tambah Pegawai
            </a>
            
            <form action="{{ route('pegawai.index') }}" method="GET" class="flex w-full max-w-sm gap-2">
                <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="Cari nama atau Email..." 
                    class="w-full rounded-md border px-3 py-2 text-sm">
                <button type="submit" class="rounded-md bg-blue-600 px-4 py-2 text-sm text-white hover:bg-blue-700">
                    Cari
                </button>
            </form>
        </div>

        <div class="overflow-x-auto rounded-lg border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">No</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Email</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Nama</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Pekerjaan</th>
                        <th class="px-4 py-3 text-center font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    @forelse($data as $k => $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">{{ $data->firstItem() + $k }}</td>
                        <td class="px-4 py-3 text-gray-600">{{ $item->email }}</td>
                        <td class="px-4 py-3 font-medium text-gray-900">{{ $item->nama }}</td>
                        <td class="px-4 py-3 text-gray-600">
                            {{ $item->pekerjaan->nama ?? 'Tidak Ada' }}
                        </td>
                        <td class="px-4 py-3 text-center">
                            <div class="inline-flex rounded-md shadow-sm">
                                <a href="{{ route('pegawai.edit', $item->id) }}" class="rounded-l-md border border-gray-300 bg-white px-3 py-1.5 text-xs font-medium text-blue-600 hover:bg-blue-50">
                                    Edit
                                </a>
                                <form action="{{ route('pegawai.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded-r-md border border-l-0 border-gray-300 bg-white px-3 py-1.5 text-xs font-medium text-red-600 hover:bg-red-50">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-4 py-6 text-center text-gray-500">Data pegawai tidak ditemukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $data->appends(request()->query())->links() }}
        </div>
    </div>
</section>
@endsection