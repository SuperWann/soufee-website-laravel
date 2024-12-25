@extends('layouts.pengepul_layouts.app')
@section('content')
    
<div class="w-full flex justify-between  items-center">
    <p>Kapasitas yang Anda miliki.</p>
    <a href="{{ route('create-kapasitas') }}">
        <div class="flex gap-2 py-2 px-3 bg-[#1C3F3A] rounded-xl">
            <img src="{{ asset('img/tabler_plus.svg') }}" alt="">
            <button type="submit" class="font-medium text-white">Tambah Kapasitas</button>
        </div>
    </a>
</div>

<div class="w-full grid grid-cols-4 gap-2 border border-black">
    @foreach ($kapasitas as $item)
    <div class="rounded-md border-1 border-[#1C3F3A] p-1">
        <div>
            <img src="{{ asset('img/coffe-bean-img.jpg') }}" alt="kopi" class="rounded-md">
        </div>
        <div>
            <h1>{{ $item->kapasitas }} kg</h1>
            <h1>{{ $item->deskripsi }}</h1>
            <h1>{{ $item->jenis_kopis->nama_jenis}}</h1>
            <a href="{{ route('update-kapasitas', $item->id_kapasitas) }}">update</a>
            <form action="{{ route('delete-kapasitas', $item->id_kapasitas) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>

<script>
    const btkatalog = document.querySelector('#bt-katalog');
    const btriwayat = document.querySelector('#bt-riwayat');
    const btpenjemputan = document.querySelector('#bt-penjemputan');

    const tekskatalog = document.querySelector('#teks-katalog');
    const teksriwayat = document.querySelector('#teks-riwayat');
    const tekspenjemputan = document.querySelector('#teks-penjemputan');

    const penjemputan1 = document.querySelector('#img-truk-1');
    const penjemputan2 = document.querySelector('#img-truk-2');

    const katalog1 = document.querySelector('#img-katalog-1');
    const katalog2 = document.querySelector('#img-katalog-2');

    const riwayat1 = document.querySelector('#img-riwayat-1');
    const riwayat2 = document.querySelector('#img-riwayat-2');

    const isiKatalog = document.querySelector('#isi-katalog');
    const isiRiwayat = document.querySelector('#isi-riwayat');
    const isiPenjemputan = document.querySelector('#isi-penjemputan');

    btkatalog.style.backgroundColor = '#1C3F3A';
    tekskatalog.style.color = '#edebe4';
    katalog1.style.display = 'none';
    katalog2.style.display = 'block';

    btpenjemputan.style.backgroundColor = '#edebe4';
    tekspenjemputan.style.color = '#1C3F3A';
    penjemputan1.style.display = 'block';
    penjemputan2.style.display = 'none';

    btriwayat.style.backgroundColor = '#edebe4';
    teksriwayat.style.color = '#1C3F3A';
    riwayat1.style.display = 'block';
    riwayat2.style.display = 'none';

    isiKatalog.style.display = 'block';
    isiRiwayat.style.display = 'none';
    isiPenjemputan.style.display = 'none';
</script>
@endsection