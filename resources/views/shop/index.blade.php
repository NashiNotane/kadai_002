 @extends('layouts.app')
 @section('content')
 <div class="row">
     <div class="col-9">
         <div class="container mt-4">
             <div class="row w-100">
                 @foreach($shops as $shop)
                 <div class="col-3">
                 <a href="{{route('shop.show', $shop)}}">
                 <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
                 </a>
                     <div class="row">
                         <div class="col-12">
                             <p class="kadai-shop-label mt-2">
                                 {{$shop->name}}<br>
                                 {{ $shop->description }}<br>
                                 {{ $shop->category_id }}</td>
                                 <label>￥{{$shop->price}}</label>
                                 </p>
                         </div>
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>
     </div>
 </div>
 @endsection