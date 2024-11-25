<?php require "./components/head.php" ?>

<header id="header" class="header-cng">
  <div class="container">
    <div id="logo" class="pull-left">
      <h1>
        <a href="./#body"><img src="img/logo.png" alt="" title="" /></a>
        <a href="./#body">MusTafa</a>
      </h1>
    </div>

    <nav id="nav-menu-container" class="navbar">
      <ul class="nav-menu menu-size">
        <li class="nav-item menu-active"><a href="./#body" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="./#hotel" class="nav-link">Brands</a></li>
        <li class="nav-item"><a href="./#cab" class="nav-link">Offers </a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">New</a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">Splurge</a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">Megazine</a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">Elite Offers</a></li>
      </ul>
    </nav>

    <nav id="mobile-nav-menu-container" class="mobile-navbar navbar">
      <ul class="nav-menu nav-items">
        <li class="nav-item"><a href="./#hotel" class="nav-link">Brands</a></li>
        <li class="nav-item"><a href="./#cab" class="nav-link">Offers </a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">New</a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">Splurge</a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">Megazine</a></li>
        <li class="nav-item"><a href="./#purohit" class="nav-link">Elite Offers</a></li>
        <li class="rg"><a href="#!">Registration</a></li>
        <li class="lg"><a href="#!">Login</a></li>
      </ul>
    </nav>

    <nav id="nav-menu-container" class="navbar">
      <ul class="nav-menu">
        <li class="button-cng mr-2" data-toggle="modal" data-target="#exampleModal"><a href="#!"><i
              class="bi bi-search"></i></a>
        </li>
        <li class="button-cng mr-2"><a href="#!"><i class="bi bi-heart"></i></i></a>
        </li>
        <li class="button-cng mr-2"><a href="#!"><i class="bi bi-cart-check"></i></a>
        </li>
        <li class="dropdown button-cng"><a href="#!"><i class="bi bi-emoji-smile"></i></a>
      </ul>
    </nav>
    <!-- #nav-menu-container -->
  </div>
</header>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="row">
          <div class="form-group col-12 pl-2">
            <label for="search">Search for Product & Brands</label>
            <input type="search" class="form-control" id="search" name="search" placeholder="Search Here" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-search"><a href="#!">Search</a></button>
      </div>
    </div>
  </div>
</div>