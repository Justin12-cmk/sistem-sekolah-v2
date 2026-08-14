@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">
    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Tahun Ajaran 2025/2026
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Tambah Guru
    </h1>
</div>

<div class="border border-[#E5E3DB] bg-white p-6">

    <form action="{{ route('teachers.store') }}" method="POST">

        @csrf

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

            <div>
                <label for="nip" class="mb-2 block text-sm font-medium text-[#16213A]">
                    NIP
                </label>

                <input
                    type="text"
                    name="nip"
                    id="nip"
                    placeholder="Contoh: 198501012024"
                    class="w-full border border-[#E5E3DB] px-4 py-3 text-sm outline-none focus:border-[#16213A]"
                    required>
            </div>

            <div>
                <label for="name" class="mb-2 block text-sm font-medium text-[#16213A]">
                    Nama Lengkap
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Nama lengkap guru"
                    class="w-full border border-[#E5E3DB] px-4 py-3 text-sm outline-none focus:border-[#16213A]"
                    required>
            </div>

            <div>
                <label for="gender" class="mb-2 block text-sm font-medium text-[#16213A]">
                    Jenis Kelamin
                </label>

                <select
                    name="gender"
                    id="gender"
                    class="w-full border border-[#E5E3DB] px-4 py-3 text-sm outline-none focus:border-[#16213A]"
                    required>

                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>

                </select>
            </div>

            <div>
                <label for="subject" class="mb-2 block text-sm font-medium text-[#16213A]">
                    Mata Pelajaran
                </label>

                <input
                    type="text"
                    name="subject"
                    id="subject"
                    placeholder="Mata pelajaran yang diampu"
                    class="w-full border border-[#E5E3DB] px-4 py-3 text-sm outline-none focus:border-[#16213A]"
                    required>
            </div>

            <div>
                <label for="phone_number" class="mb-2 block text-sm font-medium text-[#16213A]">
                    No. Telepon
                </label>

                <input
                    type="text"
                    name="phone_number"
                    id="phone_number"
                    placeholder="Contoh: 08123456789"
                    class="w-full border border-[#E5E3DB] px-4 py-3 text-sm outline-none focus:border-[#16213A]"
                    required>
            </div>

            <div>
                <label for="status" class="mb-2 block text-sm font-medium text-[#16213A]">
                    Status
                </label>

                <select
                    name="status"
                    id="status"
                    class="w-full border border-[#E5E3DB] px-4 py-3 text-sm outline-none focus:border-[#16213A]"
                    required>

                    <option value="">Pilih Status</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>

                </select>
            </div>

        </div>

        <div class="mt-8 flex justify-end gap-4 border-t border-[#E5E3DB] pt-5">

            <a href="{{ route('teachers.index') }}"
               class="border border-[#E5E3DB] px-5 py-2.5 text-sm font-medium text-[#16213A] hover:bg-[#FAF9F5]">
                Batal
            </a>

            <button
                type="submit"
                class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white hover:bg-[#26324f]">
                Simpan Guru
            </button>

        </div>

    </form>

</div>

@endsection