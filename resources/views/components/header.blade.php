<nav class="navbar navbar-expand-md navbar-light shadow-sm kadai002-header-container">
     <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}">
             {{ config('app.name', 'Laravel') }}
         </a>
         <form action="{{ route('shop.index') }}" method="GET" class="row g-1">
             <div class="col-auto">
                 <input class="form-control kdai002-header-search-input" name="keyword">
             </div>

             <div class="col-auto">
                 <button type="submit" class="btn kadai002-header-search-button">検索<i class="fas fa-search kadai002-header-search-icon"></i></button>
             </div>
            
         </form>
         
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
             <span class="navbar-toggler-icon"></span>
         </button>
 
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ms-auto mr-5 mt-2">
                 @guest
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="{{ route('register') }}">登録</a>
                     </li>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                     </li>
                     <hr>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="{{ route('login') }}"><i class="far fa-heart"></i></a>
                     </li>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-shopping-cart"></i></a>
                     </li>
                 @else
                     <li class="nav-item mr-5">
                         <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             ログアウト
                         </a>
 
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                     </li>
                 @endguest
             </ul>
         </div>
     </div>
 </nav>
