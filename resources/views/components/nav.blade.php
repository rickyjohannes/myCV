<div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ url('img/logo1.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->

              
            
              @guest
              @if (Route::has('login'))
              <li class="nav-item">
                <div class="row">
                  <div class="col-sm">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('abouts')}}">About Me</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('resumes')}}">Resume</a>
                              </li>
                             
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('skills')}}">Skill</a>
                              </li>   
                              <li class="nav-item">
                                <a class="nav-link" href="{{route('portofolios')}}">portofolio</a>
                              </li>  
                              <div class=" col-2 justify-content-end mt-2">
    
                                <a class="btn btn-primary" style="color:black" href="{{route('contacts')}}">Contact US</a>
                              </div>                     
                  </div>
                  
                  
                </div>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                  </li>
                  
                </ul>
              </li>
             
              @endguest
          </ul>
            
          </div>
        </div>
      </nav>
</div>