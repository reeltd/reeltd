@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ReeLTD</title>

    </head>
    <!--<div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <img width="728px" height="90px" src="{{ asset('assets/imgs/728x90-ad-space.png') }}" alt="" /><br /><br />
                    </div><br />
                </div>
            </div>
        </div>
    </div>-->

    <!-- carousel **disabled** -->
    <!--<div id="reeltd" class="flex-center position-ref full-height" >
        <div class="content">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('assets/imgs/ree2.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/imgs/ree1.jpeg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/imgs/ree.png') }}" alt="Third slide">
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
        <a href="#ree">ReeLTD</a>
        <a href="#reeltd">ReeLTD</a>-->
    <div class="col-md-12">
        <div class="row">

            <!-- Left div -->
            <div class="col-md-3">
                <div class="card">
                    <div style="background-color:rgba(60, 76, 83, 0.571); color:white" class="card-header">
                        <span>Real Estate Empire LTD.</span>
                    </div>
                </div>

            
                <div class="card">
                    <div class="card-header">
                        <span style="float:right;font-size:20px">الصفحة الرئيسية <i class="fas fa-home"></i></span>
                    </div>
                    <div class="title m-b-md">
                        
                    </div>
                    <div class="row">
                        <div style="padding-top:8px" style="float:right"  class="col-md-10">
                            <ul class="navbar-nav">
                                <span >
                                    <li style="float:right"><==</li><a style="float:right" href="api/user">API&nbsp;</a> 
                                </span>       
                            </ul>
                        </div>
                    </div>
                </div><br />
                    <div class="card">
                    <div style="color:black" class="card-header">
                        <span style="float:right;font-size:20px">الصفحة الرئيسية </span>
                    </div>



                    <div class="row">
                        <div style="padding-top:8px" style="float:right"  class="col-md-10">
                            <ul class="navbar-nav">
                                <span >
                                    <li style="float:right"><==</li><a style="float:right" href="api/user">API&nbsp;</a> 
                                </span>       
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right div -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <span style="float:right;font-size:20px"><i class="far fa-chart-bar"></i> قائمة العقارات</span>
                    </div>
                    <div  style="padding-left:18px" class="row">
                        <div style="padding-top:8px;padding-left:24px" class="col-md-12">
                        <p style="float:right">قائمة تشمل نوع العقار وتفاصيله والصور الخاصة بالعقار ومعلومات التواصل&nbsp;&nbsp;</p> 
                        <center>
                            <div class="thumbnail">
                                <img width="100%" src="{{ asset('assets/imgs/ree.png') }}">
                            </div>
                        </center>
                        <br />
<div style="float:right">
@markdown

### محرك البحث *&nbsp;&nbsp;

نتائج البحث -

@endmarkdown
</div>
<br />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- Full height page section 1 -->
<br />
<div id="ree" class="flex-center position-ref full-height" style="background-image:url('assets/imgs/ree1.jpeg')">
    <div class="content">
        <div style="padding-top:40px" class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Ad Space</h3>
                        </div>
                    </div><br />
                    <div class="container">
                        <div class="row">
                            <img width="100%" height="100%" src="{{ asset('assets/imgs/728x90-ad-space.png') }}" alt="" /><br /><br />
                        </div><br />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <i class="fas fa-arrow-down" style="font-size:26px"></i>
</div>

<!-- Full height page section 2 -->
<!--<div id="reeltd" class="flex-center position-ref full-height" style=";background-size: contain;background-image:url('assets/imgs/ree2.jpg')">
    <div class="content">
        <div style="padding-top:40px" class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Ad Space</h3>
                        </div>
                    </div><br />
                    <div class="container">
                        <div class="row">
                            <img width="100%" height="100%" src="{{ asset('assets/imgs/728x90-ad-space.png') }}" alt="" /><br /><br />
                        </div><br />
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div><hr /><br />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div  style="float:left" class="row">
                            <img width="80px" height="80px" src="{{ asset('assets/imgs/snapcode.svg') }}" alt="" /><br /><br />
                        </div><br />
                        <div style="float:right">
                            <a href="https://api.whatsapp.com/send?phone=966563375158" target="_blank"><i style="font-size:30px" class="fab fa-whatsapp"></i></a>&nbsp;&nbsp;
                            <a href="https://t.me/reeltd" target="_blank"><i style="font-size:30px" class="fab fa-telegram"></i></a>&nbsp;&nbsp;                           
                            <a href="https://www.snapchat.com/add/reeltd" target="_blank"><i style="font-size:30px" class="fab fa-snapchat"></i></a>&nbsp;&nbsp;
                            <a href="https://www.facebook.com/reeltd" target="_blank"><i style="font-size:30px" class="fab fa-facebook"></i></a>&nbsp;&nbsp;
                            <a href="https://instagram.com/reeltd0" target="_blank"><i style="font-size:30px" class="fab fa-instagram"></i></a>&nbsp;&nbsp;
                            <a href="https://twitter.com/reeltd1" target="_blank"><i style="font-size:30px" class="fab fa-twitter"></i></a>&nbsp;&nbsp;
                            <a href="https://github.com/reeltd/reeltd.git" target="_blank"><i style="font-size:30px" class="fab fa-github"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection