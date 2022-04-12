@extends('layouts.adminLTE')

@section('title', 'Selamat Datang')

@section('title-body','Sistem Informasi')

@section('breadcrumb')
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item active"><a href="/">Home</a></li>
  </ol>
@endsection

@section('content')
    <h1>SELAMAT DATANG DI SEKOLAH BUDDHIS JAYANTI</h1>
@endsection
    
Home
# Colomn Name Type Null Default
visi varchar (255) No
misi varchar (255) No
artikel varchar (1000) No

php artisan crud:generate Home --fields='code#string; description#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

Contact
# Colomn Name Type Null Default
UK code varchar (20) No
nama varchar (50) No
UK nomor varchar (13) No
email varchar (50) No
pesan varchar (255) No

php artisan crud:generate Contact --fields='code#string; nama#string; nomor#string; email#string; pesan#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

Event
# Colomn Name Type Null Default
name varchar (255) No
berita varchar (255) No
galeri varchar (255) No

php artisan crud:generate Event --fields='nama#string; berita#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

Fasilitas
# Colomn Name Type Null Default
name varchar (255) No
artikel varchar (255) No
galeri varchar (255) No

php artisan crud:generate Fasilitas --fields='nama#string; artikel#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

Jurusan
# Colomn Name Type Null Default
name varchar (255) No
artikel varchar (255) No
galeri varchar (255) No

php artisan crud:generate Jurusan --fields='nama#string; artikel#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html