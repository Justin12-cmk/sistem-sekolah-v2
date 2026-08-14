@extends('layouts.app')

@section('title',$title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">

    <a href="{{ route('teachers.index') }}"
        class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">
        &larr; Daftar Guru
    </a>

    <h1 class="font-display mt-2 text-3xl font-semibold text-[#16213A]">
        Detail Guru
    </h1>

    <p class="mt-1 text-sm text-slate-500">
        Informasi lengkap mengenai guru.
    </p>

</div>

<div class="space-y-6 border border-[#E5E3DB] bg-white p-8">

    <div>

        <label
            class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
            NIP
        </label>

        <input type="text"
            value="198501012024"
            readonly
            class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm text-slate-600 focus:outline-none">

    </div>

    <div>

        <label
            class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
            Nama Lengkap
        </label>

        <input type="text"
            value="Budi Santoso"
            readonly
            class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm text-slate-600 focus:outline-none">

    </div>

    <div>

        <label
            class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
            Jenis Kelamin
        </label>

        <input type="text"
            value="Laki-Laki"
            readonly
            class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm text-slate-600 focus:outline-none">

    </div>

    <div>

        <label
            class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
            Mata Pelajaran
        </label>

        <input type="text"
            value="Akuntansi Dasar"
            readonly
            class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm text-slate-600 focus:outline-none">

    </div>

    <div>

        <label
            class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
            Nomor Telepon
        </label>

        <input type="text"
            value="081234560001"
            readonly
            class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm text-slate-600 focus:outline-none">

    </div>

    <div>

        <label
            class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
            Status
        </label>

        <div class="mt-2">
            <span class="inline-block rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                Aktif
            </span>
        </div>

    </div>

    <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

        <a href="{{ route('teachers.index') }}"
            class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">
            Kembali
        </a>

        <a href="{{ route('teachers.edit', ['id' => request()->route('id')]) }}"
            class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
            Ubah
        </a>

    </div>

</div>

@endsection