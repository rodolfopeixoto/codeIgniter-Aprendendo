
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">RODOLFO PEIXOTO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?= ($this->router->fetch_class() == 'Institucional' && $this->router->fetch_method() == 'index') ? 'active' : null ?>"><a href="<?= base_url() ?>">Home</a></li>
        <li class="<?= ($this->router->fetch_class() == 'Institucional' && $this->router->fetch_method() == 'Empresa') ? 'active' : null ?>"><a href="<?= base_url('empresa') ?>">A Empresa</a></li>
        <li class="<?= ($this->router->fetch_class() == 'Institucional' && $this->router->fetch_method() == 'Servicos') ? 'active' : null ?>"><a href="<?= base_url('servicos') ?>">Serviços</a></li>
        <li><a href="<?= base_url('trabalhe-conosco') ?>">Trabalhe Conosco</a></li>
        <li><a href="<?= base_url('fale-conosco') ?>">Fale Conosco</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>