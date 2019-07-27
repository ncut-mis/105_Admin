<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('admin.dashboard.index') }}"><font face="微軟正黑體" style="color:#ffffff" size="5 px"><b>管理後台</b></font></a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 管理員 <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-fw fa-dashboard"></i><font face="微軟正黑體" style="color:#ffffff" size="4 px"><b>主控台</b></font></a>
            </li>
            <li>
                <a href="{{ route('admin.posts.index') }}"><i class="fa fa-fw fa-edit"></i><font face="微軟正黑體" style="color:#ffffff" size="4 px"><b>文章管理</b></font></a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}"><i class="fa fa-fw fa-edit"></i><font face="微軟正黑體" style="color:#ffffff" size="4 px"><b>使用者管理</b></font></a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
