 <!-- SIDE BAR AWAL -->
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image" class="user-image">
                @if(Auth::user()->gambar == '')

                  <img src="{{asset('images/user/default.png')}}" alt="profile image">
                @else

                  <img src="{{asset('images/user/'. Auth::user()->gambar)}}" alt="profile image">
                @endif		
		
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
        </div>
      </div>
      <!-- search form 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      .search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="/dashboard">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>		
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Master</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
            <ul class="treeview-menu">	
              <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Data User</a></li>				
            </ul>
        </li>		
		
		<li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i> <span>Kategori</span>
          <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
        <ul class="treeview-menu">	
          <li><a href="{{route('kategoriartikels.index')}}"><i class="fa fa-circle-o"></i> Kategori Artikel</a></li>
          <li><a href="{{route('kategoriberitas.index')}}"><i class="fa fa-circle-o"></i> Kategori Berita</a></li>
			    <li><a href="{{route('kategorigaleries.index')}}"><i class="fa fa-circle-o"></i> Kategori Galeri</a></li> 
        </ul>
    </li>		
	
    <li class="treeview">
      <a href="#">
        <i class="fa fa-edit"></i> <span>Konten Dinamis</span>
          <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
        <ul class="treeview-menu">		
          <li><a href="{{route('artikels.index')}}"><i class="fa fa-circle-o"></i> Artikel</a></li>	
			    <li><a href="{{route('beritas.index')}}"><i class="fa fa-circle-o"></i> Berita</a></li>
			    <li><a href="{{route('galeries.index')}}"><i class="fa fa-circle-o"></i> Galeri</a></li>
        </ul>	
    </li>
	</ul>
    </section>
    <!-- /.sidebar -->
  </aside>

 <!-- SIDE BAR AKHIR --> 