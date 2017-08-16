<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">All Records</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="?page=dashboard">Dashboard</a></li>
        <li><a href="?page=client-profile">Clients Profile</a></li>
        <li><a href="?page=payment-information">Payment information</a></li>
        <li><a href="?page=settings">Settings</a></li>
        <li><a href="?page=help">Help</a></li>
      </ul>

      <div class="pull-right">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=""></span>&nbsp;Hi' <?php echo $user['fullname']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>


</nav><!-- END nav -->


  </div>
</div>



