 <!-- Navbar Starts -->
 <section>
     <nav class="navbar navbar-expand-lg navbar-dark bg-success">
         <div class="container-fluid">
             <a class="navbar-brand" href="{{ route('homepage') }}">
                 <img src="{{ asset('images/logo.png') }}" width="50" alt="logo">
                 House.com
             </a>
             <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                 data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                     <li class="nav-item">
                         <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : ''  }}" href="{{ route('homepage') }}" aria-current="page">Home
                             <span class="visually-hidden">(current)</span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="#">About</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">Categories</a>
                         <div class="dropdown-menu" aria-labelledby="dropdownId">
                             <a class="dropdown-item" href="#">For Sale</a>
                             <a class="dropdown-item" href="#">For Rent</a>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">FAQs</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link {{ request()->routeIs('contact.page') ? 'active' : ''  }}" href="{{ route('contact.page') }}">Contact Us</a>
                     </li>

                     @guest
                         @if (Route::has('login'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                             </li>
                         @endif

                         @if (Route::has('register'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                             </li>
                         @endif
                     @else
                         <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 {{ Auth::user()->name }}
                             </a>

                             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                             </div>
                         </li>
                     @endguest
                 </ul>
                 <form class="d-flex my-2 my-lg-0">
                     <input class="form-control me-sm-2" type="text" placeholder="Search" />
                     <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                         Search
                     </button>
                 </form>
             </div>
         </div>
     </nav>

 </section>
 <!-- Navbar Ends -->
