<nav class="navbar navbar-expand-lg navbar-light  bg-dark">
    <a class="navbar-brand" href="{{route('main')}}"><img src="svg/ice-cream.svg" style="height: 30px"/></a>
    <form class="form-inline my-2 my-lg-0" method="POST" action="{{route('search')}}">
        @csrf
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="name">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile',['id' => Auth::user()->id])}}">
                @if (Auth::user()->image == null)
                <img src="svg/ice-cream.svg" height="30px" class="headerimg"/>
                @else
                <img src="images/{{Auth::user()->image}}" height="30px" class="headerimg"/>
                @endif
                {{Auth::user()->name}} profile</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('message')}}"><i class="far fa-comment-dots"></i> Messages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('setting')}}"><i class="fas fa-cogs"></i> Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Log out</a>
          </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('getlogin')}}">Login</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('getreg')}}">Registration</a>
              </li>
          @endif
      </ul>
    </div>
  </nav>
