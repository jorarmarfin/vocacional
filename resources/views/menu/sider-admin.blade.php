<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            {!!Form::menu('Escritorio',route('home.index'),'icon-home','start')!!}
            @can('admin',Auth::user())
                <li class="heading">
                    <h3 class="uppercase">Sistema</h3>
                </li>
                {!!Form::menu('Usuarios',route('admin.users.index'),'icon-users')!!}
                <li class="nav-item  ">
                    {!!Form::menulink('Configuracion','#','fa fa-cogs')!!}
                    <ul class="sub-menu">
                        {!!Form::menu('Maestro',route('catalogo.gestion','maestro'))!!}
                    </ul>
                </li>
                {!!Form::menu('Aulas',route('home.index'),'fa fa-cubes')!!}
            @endcan

            @can('admin',Auth::user())
                <li class="heading">
                    <h3 class="uppercase">Modulos</h3>
                </li>
                {!!Form::menu('Menu',route('home.index'),'fa fa-users')!!}
            @endcan
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
<!-- END SIDEBAR -->
</div>