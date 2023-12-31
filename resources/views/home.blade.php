@extends('layouts.app')

@section('content')
<main class="d-flex">
    <div class="container-fluid bd-light align-items-center justify-content-conter foodTypeCont ">
        <div class="row justify-content-center">
            <div class="col text-white text-center">
                <h4>Select your food type</h4>
            </div>
        </div>
        <div class="row foodTypeCards justify-content-between">
            <div class="container">
             <div class="row justify-content-around my-4">
             <a href="/product/BreakFast" class="card col-4 pb-4">
                    <div style="background-image:url(/img/BreakFast.jpeg)" class="card-img-top" alt="..."></div>
                    <div class="card-body text-center">
                      <h5 class="card-title pt-4">Tuku Tuku</h5>
                    </div>
                </a>
                <a href="/product/Lunch" class="card col-4 pb-4">
                   <div style="background-image:url(/img/Lunch.jpeg)" class="card-img-top" alt="..."></div>
                   <div class="card-body text-center">
                     <h5 class="card-title pt-4">Gotri</h5>
                   </div>
               </a>
             </div>
            <div class="row justify-content-around my-4">
                <a href="/product/Dinner" class="card col-4 pb-4">
                    <div style="background-image:url(/img/Dinner.jpeg)" class="card-img-top" alt="..."></div>
                    <div class="card-body text-center">
                      <h5 class="card-title pt-4">Mamachai</h5>
                    </div>
                </a>
                <a href="/product/Dessert" class="card col-4 pb-4">
                    <div style="background-image:url(/img/Dessert.jpeg)" class="card-img-top" alt="..."></div>
                    <div class="card-body text-center">
                      <h5 class="card-title pt-4">Burgerking</h5>
                    </div>
                </a>
            </div>
            </div>
         </div>
    </div>
</main>
@endsection
