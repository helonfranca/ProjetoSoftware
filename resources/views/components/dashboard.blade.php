<div class="dashboard-nav">
    <header>
        <a href="{{route('home')}}" class="brand-logo">
            <img id="logo" src="{{asset('img/logo.png')}}" width="240" height="200">
        </a>
    </header>

    <nav class="dashboard-nav-list">
        <a href="{{route('home')}}" class="dashboard-nav-item">
            <i class="fas fa-home"></i>
            <span>Página Inicial</span>
        </a>
        <?php $tipoUsuario = Auth::user()->tipoUsuario; ?>
        @if($tipoUsuario == 1 )
            <a href="#" class="dashboard-nav-item">
                <i class="fas fa-microscope"></i>
                <span>Cadastro de equipamentos</span>
            </a>
        @endif

        <a href="#" class="dashboard-nav-item">
            <i class="fas fa-tachometer-alt"></i>
            <span>Agenda de equipamentos</span>
        </a>

        <a href="#" class="dashboard-nav-item">
            <i class="fas fa-file-upload"></i>
            <span>Estoque de projetos</span>
        </a>

        <a href="{{route('projetos')}}" class="dashboard-nav-item">
            <i class="fas fa-project-diagram"></i>
            <span>Meus projetos</span>
        </a>

        <a class="dashboard-nav-item">
            <i class="fas fa-user"></i>
            <?php $nomeCompleto = Auth::user()->name; ?>
            <?php $nomes = explode(' ', $nomeCompleto); ?>
            <span>Bem vindo, {{ $nomes[0] }}</span>
        </a>

        <div class="nav-item-divider"></div>

        <a href="{{route('logout')}}" class="dashboard-nav-item">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </a>
    </nav>
</div>
