<div class="sidebar">
  <div class="logo-details">
    <i class="bx bx-category"></i>
    <span class="logo_name">Heart</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class="fas fa-home"></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="/category" class="{{ request()->Is('karya*') ? 'active' : '' }}">
        <i class="fas fa-chart-bar"></i>
        <span class="links_name">Karya</span>
      </a>
    </li>
    <li>
      <a href="/transaction" class="{{ request()->Is('transaction*') ? 'active' : '' }}">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Transaction</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
</div>
