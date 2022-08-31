      <aside>
        <div id="sidebar"  class="nav-collapse ">
            <ul class="sidebar-menu" id="nav-accordion">
            
                  <p class="centered"><a href="{{ route('dashboard') }}"><img src="{{ asset('assets/img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Yönetim Paneli</h5>
                      
                <li class="mt">
                    <a class="{{ (request()->routeIs('dashboard') ? 'active' : '') }}" href="{{ route('dashboard') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- <li class="mt">
                    <a class="{{ (request()->routeIs('page.index') ? 'active' : '') }}" href="{{ route('page.index') }}">
                        <i class="fa fa-tasks"></i>
                        <span>Menü Yönetimi</span>
                    </a>
                </li> --}}

                <li class="mt">
                    <a class="{{ (request()->routeIs('page.index') ? 'active' : '') }}" href="{{ route('page.index') }}">
                        <i class="fa fa-tasks"></i>
                        <span>Sayfa Yönetimi</span>
                    </a>
                </li>

               

            </ul>
        </div>
    </aside>