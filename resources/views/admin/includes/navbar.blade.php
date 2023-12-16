 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-light p-4" style="box-shadow: 0 5px 5px -2px rgba(24, 20, 20, 0.2); color:tomato ">

     <a class="navbar-brand" href="{{ route('home') }}"><h3><span style="color: #0f0d0d">Cric</span><span class="mcolor">Force</span> </h3></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
         aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

   
     <div class="collapse navbar-collapse " id="navbarNav">
         <ul class="navbar-nav align-self-end">

             <a class="nav-item nav-link active" href="{{ route('home') }}"><span style="color: #161616">Home</span> <span class="sr-only">(current)</span></a>

             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu1" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Attendees
                 </a>
                 <div class="dropdown-menu" aria-labelledby="menu1">
                     <a class="dropdown-item" href="{{ route('teams.allteams') }}">Teams</a>
                     <a class="dropdown-item" href="{{ route('teams.all-teams') }}">Players</a>

                 </div>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu2" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Match Schedule
                 </a>
                 <div class="dropdown-menu" aria-labelledby="menu2">
                     <a class="dropdown-item" href="{{ route('calendar') }}">Show Calender</a>
                     <a class="dropdown-item" href="{{ route('match_schedules.all') }}">Tournament Schedules</a>
                     <a class="dropdown-item" href="{{ route('match_schedules.allTeams') }}">Teams Schedules</a>
                 </div>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu3" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Venues
                 </a>
                 <div class="dropdown-menu" aria-labelledby="menu3">
                     <a class="dropdown-item" href="{{ route('stadiums.all') }}">All Stadiums</a>
                     <a class="dropdown-item" href="{{ route('stadiums.cities') }}">All Cities</a>

                 </div>

             </li>


             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="menu4" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     News and Updates
                 </a>
                 <div class="dropdown-menu" aria-labelledby="menu4">
                     <a class="dropdown-item" href="{{ route('allNews') }}">News and Updates</a>
                     <a class="dropdown-item" href="{{ route('videos') }}">Videos</a>
                 </div>
             </li>

             
             <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="profileDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>{{ Auth::user()->name ?? 'Profile' }}
                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">


                    <div class="dropdown-divider"></div>

                    @if (Auth::check())
                        <form method="POST" action="{{ route('logout') }}">
                            <button class="dropdown-item" type="submit">Log out</button>
                            @csrf
                        </form>
                        <a class="dropdown-item" href="{{ route('dashboard') }}">Admin Dashboard</a>

                        <a class="dropdown-item" href="{{ route('profile.edit') }}">My Profile</a>
                    @else
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>

                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                    @endif
                </div>
            </li>
         </ul>

         <form class="form-inline ml-5">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
          </form>
     </div>
 </nav>
