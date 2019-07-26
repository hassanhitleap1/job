@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.myamcat.com/blog/wp-content/uploads/2017/08/job-search-remotive-home.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block ">
            <h3>تقديم الوظائف</h3>
            <p>تقديم موظف</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.myamcat.com/blog/wp-content/uploads/2017/08/job-search-remotive-home.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>تقديم الوظائف</h5>
            <p>تقديم موظف</p>
        </div>      
    </div>
    <div class="carousel-item">
      <img src="https://www.myamcat.com/blog/wp-content/uploads/2017/08/job-search-remotive-home.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block float-left">
            <h5>تقديم الوظائف</h5>
            <p>تقديم موظف</p>
        </div>      
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
</div>
@endsection
