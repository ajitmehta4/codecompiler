<div class="main-menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html" class="active">Dashboard</a></li>
                        <li><a href="{{url('test') }}">Tests</a></li>
                        <li><a href="{{url('library') }}">Library</a></li>
                        <li><a href="#">Account</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle dropbtn" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Demo menu <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-content">
                                <li class="dropdown-submenu">
                                    <a class="test" tabindex="-1" href="#">Level one<i class="glyphicon glyphicon-menu-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">- Level two</a></li>
                                        <li><a tabindex="-1" href="#">- Sub menu</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Demo Sub menu</a></li>
                                <li><a href="#">Menu item</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Need Help ?</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>