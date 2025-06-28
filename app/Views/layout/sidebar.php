<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
        <i class="bi bi-house-fill"></i>
        <span>Home</span>
      </a>
    </li><!-- End Home Nav -->

    <li class="nav-item">
<<<<<<< HEAD
      <a class="nav-link <?php echo (uri_string() == 'kategori') ? "" : "collapsed" ?>" href="kategori">
        <i class="bi bi-cart-fill"></i>
        <span>Kategori</span>
=======
      <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
        <i class="bi bi-cart-fill"></i>
        <span>Keranjang</span>
>>>>>>> 29b0c264b76cb88e7ef17cc5e16a46edbeb31f92
      </a>

    </li><!-- Kategori Nav -->
    <?php
    if (session()->get('role') == 'admin') {
    ?>

      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
          <i class="bi bi-handbag-fill"></i>
          <span>Produk</span>
        </a>
      </li><!-- End Produk Nav -->
    <?php
    }
    ?>
  </ul>

</aside>
<!-- End Sidebar-->