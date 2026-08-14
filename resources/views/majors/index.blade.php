@extends('layouts.app')

@section('title',$title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Daftar Jurusan
    </h1>

    <p class="mt-1 text-sm text-slate-500">
        Daftar jurusan yang tersedia di sekolah.
    </p>

</div>

<div class="flex justify-end mb-5">

    <a href="{{ route('majors.create') }}"
        class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white hover:bg-[#26324f]">
        + Tambah Jurusan
    </a>

</div>

<div class="border border-[#E5E3DB] bg-white">

    <table class="w-full text-sm">

        <thead class="border-b border-[#E5E3DB]">

            <tr class="text-left">

                <th class="px-5 py-4">No</th>
                <th class="px-5 py-4">Kode</th>
                <th class="px-5 py-4">Nama Jurusan</th>
                <th class="px-5 py-4">Deskripsi</th>
                <th class="px-5 py-4">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($majors as $major)

            <tr class="border-b border-[#EFEDE6]">

                <td class="px-5 py-4">
                    {{ $loop->iteration }}
                </td>

                <td class="px-5 py-4">
                    {{ $major['code'] }}
                </td>

                <td class="px-5 py-4">
                    {{ $major['name'] }}
                </td>

                <td class="px-5 py-4">
                    {{ $major['description'] }}
                </td>

                <td class="px-5 py-4">

                    <div class="flex items-center gap-3">

                        <a href="{{ route('majors.show', ['major' => $major['id']]) }}"
                            class="text-blue-600 hover:underline">
                            Lihat
                        </a>

                        <a href="{{ route('majors.edit', ['major' => $major['id']]) }}"
                            class="text-[#A16207] hover:underline">
                            Ubah
                        </a>

                    </div>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection