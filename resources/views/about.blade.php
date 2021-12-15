@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('About') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <img src="{{ asset('img/favicon.png') }}" class="rounded-circle" alt="user-image">
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-center">
                                <h5 class="font-weight-bold">Sistem Informasi</h5>
                                <h5 class="font-weight-regular">Sistem Peminjaman Fasilitas</h5>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Anggota Kelompok</h5>
                            <p>19650056 Sheva Athalla</p>
                            <p>19650130 Muhammad Khairul Amin Imron</p>
                            <p>19650157 Alif Pandu Santohana</p>
                            <p>18650076 Cahya Wulandari</p>
                            <p>18650071 Chandra Gunawan</p>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>

@endsection
