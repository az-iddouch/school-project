<aside class="main-sidebar fixed offcanvas shadow">
    <section class="sidebar">
        <div class="user-panel">
            <div class="image float-left">
                <img class="user_avatar" src="{{asset('/images/avatar.png')}}" alt="User Image">
            </div>
            <div class="info">
                <h6 class="p-t-10">Alexander Pierce</h6>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span> <i class="icon icon-angle-left pull-right"></i>
            </li>

            <li class="treeview">
                <a href="/user/favorites">
                    <i class="fas fa-heart"></i>
                    <span>mes favoris</span>
                    <span class="badge badge-primary pull-right">{{count(Auth::user()->favs)}}</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>changer le mote de passe</span>
                    <!-- <span class="badge badge-primary pull-right">4</span> -->
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>gerer mon compte</span>
                    <!-- <span class="badge badge-primary pull-right">4</span> -->
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>mes commentaires</span>
                    <!-- <span class="badge badge-primary pull-right">4</span> -->
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>mes favourits</span>
                    <!-- <span class="badge badge-primary pull-right">4</span> -->
                </a>
            </li>
            <li class="treeview">
                    <a class="dropdown-item" href="/logout" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Déconnexion</span>
                        <!-- <span class="badge badge-primary pull-right">4</span> -->
                    </a>
            </li>
            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                @csrf
            </form>

    </section>
</aside>
