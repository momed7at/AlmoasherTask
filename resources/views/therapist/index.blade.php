@extends('layouts.master')

@section('content')
@include('includes.navbar')
@include('includes.sidebar')
@include('includes.filter')

{{-- Page Content  --}}
<div class="wrapper ">

<div class="container">
    {{-- Search Bar //--}}
    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
                <input type="text" class="form-control h-75" name="search" id="search" aria-describedby="therapistName" placeholder="Therapist Name" >
                
              </div>
              @if(isset($query2))
            <label for="" class="badge badge-success p-2">{{$query2}} <span><a href="{{url('/')}}" class="text-secondary ml-2">X</a></span></label>
              @endif
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <div class="form-group">
            <select id="inputState" class="custom-select h-75">
              <option selected>Specializations</option>
              <option>...</option>
            </select>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
            <div class="form-group">
                <button class="btn btn-blue btn-lg btn-search w-100" type="button"><i class="fas fa-search text-light"></i></button>
            </div>
        </div>
    </div>

    {{--// Search Bar --}}

    {{-- Labels //--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <label class="badge text-muted search_label"  id="search_label" style="visibility: hidden;width:auto;background-color:#ffffff;"></label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-right">
            <label for=""><button class="btn btn-success mr-1" id="sidebarCollapse" onclick="openFilter()">filter <i class="fas fa-filter"></i></button>
            </label>
            <label for="">
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sort by
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
            </label>

        </div>
    </div>
    {{--// Labels--}}
    @if (session('status'))
    <div class="row">
      <div class="col-12">
        <div class="alert alert-info">
          {{session('status')}}
        </div>
      </div>
    </div>
    @else
        {{-- Therapists List //--}}
        <div class="row mt-2" id="output">
          {{-- @if (count($therapists) > 0) --}}
          @foreach ($therapists as $therapist)
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card mb-3">
              <div class="row">
                <div class="col-12">
                  <p class="text-center"><img class=" rounded-circle card-circular" src="{{asset('img/vector.jpg')}}" alt="card-image"></p>
                  <label for="" class="rating-num">
                    <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    <span style="padding: 5px">5</span>
                  </label>
                </div>
              </div>
              <div class="card-body">
                <h5 class="card-title">Dr. {{$therapist->first_name}} {{$therapist->last_name}}</h5>
                <p class="card-text">{!! Illuminate\Support\Str::limit($therapist->info, 20) !!}</p>
                <p class="card-text">fees: {{$therapist->fees}} EGP</p>
                <button class="btn btn-primary book_BTN" value="{{$therapist->id}}" >Book Now</button>
              </div>
            </div>
          </div>
          @endforeach
        </div>      
    @endif


</div>
</div>
 {{-- // Page Content  --}}
@endsection
