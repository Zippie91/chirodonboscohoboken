<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img alt="Brand" src="/images/logodbh.png" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php echo $_GET['page'] == 'home' ? "class='active'" : ""; ?>><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown <?php echo $_GET['page'] == 'afdelingen' ? "active" : ""; ?>">
          <?php $afd->afdelingen(); ?>
        </li>
        <li class="dropdown <?php echo $_GET['page'] == 'werkgroepen' ? "active" : ""; ?>">
          <?php $afd->werkgroepen(); ?>
        </li>
        <li <?php echo $_GET['page'] == 'verhuur' ? "class='active'" : ""; ?>><a href="/verhuur">Verhuur</a></li>
        <li <?php echo $_GET['page'] == 'contact' ? "class='active'" : ""; ?>><a href="/contact">Contact</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-user"></span>
          <span class="sr-only">Login</span>
        </button>
      </form>
    </div>
  </div>
</nav>
