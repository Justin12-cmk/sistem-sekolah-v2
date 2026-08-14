@extends('layouts.app')

@section('title',$title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Daftar Kelas
    </h1>

    <p class="mt-1 text-sm text-slate-500">
        Daftar kelas yang tersedia di sekolah.
    </p>

</div>

<div class="mb-5 flex justify-end">

    <a href="{{ route('schoolclass.create') }}"
        class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
        + Tambah Kelas
    </a>

</div>

<div class="border border-[#E5E3DB] bg-white">

    <table class="w-full text-sm">

        <thead class="border-b border-[#E5E3DB]">

            <tr class="text-left">

                <th class="px-5 py-4">No</th>
                <th class="px-5 py-4">Nama Kelas</th>
                <th class="px-5 py-4">Tingkat</th>
                <th class="px-5 py-4">Jurusan</th>
                <th class="px-5 py-4">Wali Kelas</th>
                <th class="px-5 py-4">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($schoolclass as $class)

            <tr class="border-b border-[#EFEDE6]">

                <td class="px-5 py-4">
                    {{ $loop->iteration }}
                </td>

                <td class="px-5 py-4 font-medium text-[#16213A]">
                    {{ $class['name'] }}
                </td>

                <td class="px-5 py-4">
                    {{ $class['grade'] }}
                </td>

                <td class="px-5 py-4">
                    {{ $class['major'] }}
                </td>

                <td class="px-5 py-4">
                    {{ $class['homeroom_teacher'] }}
                </td>

                <td class="px-5 py-4">

                    <div class="flex items-center gap-3">

                        <a href="{{ route('schoolclass.show', ['id' => $class['id']]) }}"
                            class="text-blue-600 hover:underline">
                            Lihat
                        </a>

                        <a href="{{ route('schoolclass.edit', ['id' => $class['id']]) }}"
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