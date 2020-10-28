<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>SGA</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="./img/supermarket.png" alt="Mercearia logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mercearia</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/man.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              {{Auth::user()->name}}
          </a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item">
                <router-link to="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-home blue"></i>
                    <p>
                        Início
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/category" class="nav-link">
                    <i class="nav-icon fas fa-th green"></i>
                    <p>
                        Categorias
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
            <router-link to="/product" class="nav-link">
                    <i class="nav-icon fas fa-shopping-cart cyan"></i>
                    <p>
                        Produtos
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
            <router-link to="/provider" class="nav-link">
                    <i class="nav-icon fas fa-user-friends purple"></i>
                    <p>
                        Fornecedores
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
            <router-link to="/client" class="nav-link">
                    <i class="nav-icon fas fa-users teal"></i>
                    <p>
                        Clientes
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
            <router-link to="/stock" class="nav-link">
                    <i class="nav-icon fas fa-shopping-bag orange"></i>
                    <p>
                        Stock
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
            <router-link to="/report" class="nav-link">
                    <i class="nav-icon fas fa-archive yellow indigo"></i>
                    <p>
                        Relatórios
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
            <router-link to="/sale" class="nav-link">
                    <i class="nav-icon fas fa-money-bill pink"></i>
                    <p>
                        Vendas
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/employee" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Funcionários
                    </p>
                </router-link>
            </li>
             <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off red"></i>
                        <p>
                            {{ __('Logout') }}
                        </p>      
                  </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
             </li>
        </ul>
    </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <router-view></router-view>
        </div>
    </div>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 Fire.</strong> Todos direitos reservados.
  </footer>
</div>

<script src="/js/app.js"></script>

</body>
</html>
