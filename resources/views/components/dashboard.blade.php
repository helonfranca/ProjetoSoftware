<div class="dashboard-nav">
    <header>
        <a href="{{route('welcome')}}" class="brand-logo">
            <img id="logo" src="{{asset('img/logo.png')}}" width="240" height="200">
        </a>
    </header>

    <nav class="dashboard-nav-list">
        <a href="#" class="dashboard-nav-item">
            <i class="fas fa-home"></i>
            Página Inicial
        </a>

        <a href="#" class="dashboard-nav-item">
            <i class="fas fa-tachometer-alt"></i>
            Agenda de equipamentos
        </a>

        <a href="#" class="dashboard-nav-item">
            <i class="fas fa-file-upload"></i>
            Estoque
        </a>

        <a href="#" class="dashboard-nav-item">
            <i class="fas fa-file-upload"></i>
            Gerenciar projetos
        </a>

        <a href="#" class="dashboard-nav-item">
            <i class="fas fa-file-upload"></i>
            Gerenciar usuários
        </a>

        <div class="nav-item-divider"></div>

        <a href="{{route('welcome')}}" class="dashboard-nav-item">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </a>
    </nav>
</div>
