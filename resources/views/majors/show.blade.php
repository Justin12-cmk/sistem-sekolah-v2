@extends('layouts.app')

@section('title',$title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">

    <a href="{{ route('majors.index') }}"
        class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">
        &larr; Daftar Jurusan
    </a>

    <h1 class="font-display mt-2 text-3xl font-semibold text-[#16213A]">
        Detail Jurusan
    </h1>

    <p class="mt-1 text-sm text-slate-500">
        Informasi mengenai jurusan yang tersedia di sekolah.
    </p>

</div>

<div class="space-y-6 border border-[#E5E3DB] bg-white p-8">

    <div>

        <label
            class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
            Kode Jurusan
        </label>

        <input type="text"
            value="AKL"
            readonly
            class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm text-slate-600 focus:outline-none">

    </div>

    <div>

        <label
            class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
            Nama Jurusan
        </label>

        <input type="text"
            value="Akuntansi dan Keuangan Lembaga"
            readonly
            class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm text-slate-600 focus:outline-none">

    </div>

    <div>

        <label
            class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
            Deskripsi
        </label>

        <textarea
            rows="4"
            readonly
            class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm text-slate-600 focus:outline-none">Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.</textarea>

    </div>

    <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

        <a href="{{ route('majors.index') }}"
            class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">
            Kembali
        </a>

        <a href="{{ route('majors.edit', ['major' => 1]) }}"
            class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white hover:bg-[#26324f]">
            Ubah
        </a>

    </div>

</div>

@endsection