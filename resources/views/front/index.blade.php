@extends('front.layouts.master')

@section('content')
    <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <h5 class="display-3"><strong></strong></h5>
            <p class="display-4"><strong></strong></p>
            <p class="display-4">&nbsp;</p>
            <a href="#" class="btn btn-warning btn-lg float-right">SHOP NOW!</a>
        </header>
    @if ( session()->has('msg') )
        <div class="alert alert-success">{{ session()->get('msg') }}</div>
    @endif


    <div class="row text-center">


    
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/assets/img/1.png') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Ayam Fillet</h5>
                    <p class="card-text">
                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis vitae eveniet quia, rerum dolore cupiditate doloremque accusamus.
                    </p>
                <p>Stok : 3</p>
                </div>
                <div class="card-footer">                    
                    <strong>Rp. 130.000</strong> &nbsp;
                    
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Tambahkan ke Keranjang </button>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/assets/img/1.png') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Ayam Fillet</h5>
                    <p class="card-text">
                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis vitae eveniet quia, rerum dolore cupiditate doloremque accusamus.
                    </p>
                <p>Stok : 3</p>
                </div>
                <div class="card-footer">                    
                    <strong>Rp. 130.000</strong> &nbsp;
                    
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Tambahkan ke Keranjang </button>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/assets/img/2.png') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Makan pake tangan</h5>
                    <p class="card-text">
                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis vitae eveniet quia, rerum dolore cupiditate doloremque accusamus.
                    </p>
                <p>Stok : 3</p>
                </div>
                <div class="card-footer">                    
                    <strong>Rp. 130.000</strong> &nbsp;
                    
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Tambahkan ke Keranjang </button>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/assets/img/3.png') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Es Susu</h5>
                    <p class="card-text">
                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis vitae eveniet quia, rerum dolore cupiditate doloremque accusamus.
                    </p>
                <p>Stok : 3</p>
                </div>
                <div class="card-footer">                    
                    <strong>Rp. 130.000</strong> &nbsp;
                    
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Tambahkan ke Keranjang </button>
                    
                </div>
            </div>
        </div>

        

    </div>
@endsection