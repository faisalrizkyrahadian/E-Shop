@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E_Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
        <div class="col-md-2">
                <ul class="nav navbar-nav navbar-left">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link active" href="user"><span style="font-size: 15px; color: Dodgerblue;" class="navbar-navbar-navbar-brand fas fa-users"> USER</span></a></li>
                        <li class="nav-item"><a class="nav-link active" href="shop"><span style="font-size: 15px; color: Dodgerblue;" class="navbar-navbar-navbar-brand fas fa-shopping-basket"> PRODUK</span></a></li>
                        <li class="nav-item"><a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="true"><span style="font-size: 15px; color: Dodgerblue;" class="navbar-navbar-navbar-brand fa fa-dashboard"> Kategori</span></a>
                                <div class="collapse" id="menu1">
                                    <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Optical Drive</a>
                                    <div class="collapse" id="menu1sub1"></div>
                                    <a href="#" class="list-group-item" data-parent="#menu1">Desktop & Mini PC</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1">Hardisk & Flashdisk</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1">VGA Card</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1">Printer</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1">Peripheral & Aksesoris</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1">Networking</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1">Komponen Komputer</a>
                                </div>
                        </li>
                        <li class="nav-item"><a class="nav-link active" href="wishlist"><span style="font-size: 15px; color: Dodgerblue;" class="navbar-navbar-navbar-brand fas fa-cart-plus"> Wishlist</span></a></li>
                    </ul>
                </ul>
          </div>
        <div class="page-header">
            <h2>Bootstrap 4 Sidebar Menu</h2>
        </div>
        <p class="lead">A responsive, multi-level vertical accordion.</p>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <button role="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo" aria-expanded="true">
                    horizontal collapsible
                </button>
                <div id="demo" class="width collapse show" aria-expanded="true">
                    <div class="list-group" style="width: 400px;">
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <button role="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo2" aria-expanded="true">
                    vertical collapsible
                </button>
                <div id="demo2" class="height collapse show" aria-expanded="true">
                    <div class="list-group" style="width: 400px;">
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
  <nav aria-label="Page navigation">
      <ul class="nav nav-pagination nav-justified" >
          <ul class="pagination">
  
              <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
  
              <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
      </div>
  </nav>
</body>
</html>

@endsection