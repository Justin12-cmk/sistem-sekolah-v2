@extends('layouts.app')

@section('title',$title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Daftar Guru
    </h1>

    <p class="mt-1 text-sm text-slate-500">
        Daftar guru yang terdaftar di sekolah.
    </p>

</div>

<div class="mb-5 flex justify-end">

    <a href="{{ route('teachers.create') }}"
        class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
        + Tambah Guru
    </a>

</div>

<div class="border border-[#E5E3DB] bg-white">

    <table class="w-full text-sm">

        <thead class="border-b border-[#E5E3DB]">

            <tr class="text-left">

                <th class="px-5 py-4">No</th>
                <th class="px-5 py-4">NIP</th>
                <th class="px-5 py-4">Nama</th>
                <th class="px-5 py-4">Jenis Kelamin</th>
                <th class="px-5 py-4">Mata Pelajaran</th>
                <th class="px-5 py-4">Telepon</th>
                <th class="px-5 py-4">Status</th>
                <th class="px-5 py-4">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($teachers as $teacher)

            <tr class="border-b border-[#EFEDE6]">

                <td class="px-5 py-4">
                    {{ $loop->iteration }}
                </td>

                <td class="px-5 py-4">
                    {{ $teacher['nip'] }}
                </td>

                <td class="px-5 py-4 font-medium text-[#16213A]">
                    {{ $teacher['name'] }}
                </td>

                <td class="px-5 py-4">
                    {{ $teacher['gender'] }}
                </td>

                <td class="px-5 py-4">
                    {{ $teacher['subject'] }}
                </td>

                <td class="px-5 py-4">
                    {{ $teacher['phone'] }}
                </td>

                <td class="px-5 py-4">
                    <span class="inline-block rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                        {{ $teacher['status'] }}
                    </span>
                </td>

                <td class="px-5 py-4">

                    <div class="flex items-center gap-3">

                        <a href="{{ route('teachers.show', ['id' => $teacher['id']]) }}"
                            class="text-blue-600 hover:underline">
                            Lihat
                        </a>

                        <a href="{{ route('teachers.edit', ['id' => $teacher['id']]) }}"
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