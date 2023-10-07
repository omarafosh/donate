<?php session_start(); ?>
<nav>
  <div class="nav-bar">
    <i class='bx bx-menu sidebarOpen'></i>
    <span class="logo navLogo"><a href="#">الدوحة الخيرية</a></span>

    <div class="menu">
      <div class="logo-toggle">
        <span class="logo"><a href="#">الدوحة</a></span>
        <i class='bx bx-x siderbarClose'></i>
      </div>

      <ul class="nav-links">
        <li><a href="#">الرئيسية</a></li>
        <li><a href="#">بناء المساجد</a></li>
        <li><a href="#">مياه وابار</a></li>
        <li><a href="#">كفالة يتيم</a></li>
        <li><a href="#">صدقات</a></li>
        <li><a href="#"> اتصل بنا</a></li>

      </ul>
    </div>

    <div class="darkLight-searchBox">

        <div class="searchToggle">
          <!-- <i class='bx bx-x cancel'></i>
          <i class='bx bx-search search'></i> -->
          <img src="assets/imgs/femal.png" alt="">

            <ul class="list-user">
              <li><a href="pages/auth/profile.php">Profile</a></li>
              <li><a href="pages/auth/logout_process.php">Logout</a></li>
            </ul>
   
        </div>
        <div class="dark-lighdt">
          تبرع
        </div>
      </div>
   
</nav>
<style>
  :root {
    --nav-color: #4070f4;
  }

  nav {
    position: fixed;
    top: 0;
    left: 0;
    height: 70px;
    width: 100%;
    background-color: #fff;
    border-bottom: 1px solid #D9D9D9;

    z-index: 100;

  }

  body.dark nav {
    border: 1px solid #393838;
  }

  nav .nav-bar {
    position: relative;
    height: 100%;
    max-width: 1000px;
    width: 100%;
    background-color: #fff;

    margin: 0 auto;
    padding: 0 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  nav .nav-bar .sidebarOpen {
    color: var(--text-color);
    font-size: 25px;
    padding: 5px;
    cursor: pointer;
    display: none;
  }

  nav .nav-bar .logo a {
    font-size: 25px;
    font-weight: 500;
    color: #000;
    text-decoration: none;
  }

  .menu .logo-toggle {
    display: none;
  }

  .nav-bar .nav-links {
    display: flex;
    align-items: center;
  }

  .nav-bar .nav-links li {
    margin: 0 5px;
    list-style: none;
  }

  .nav-links li a {
    position: relative;
    font-size: 17px;
    font-weight: 400;
    color: #000;
    text-decoration: none;
    padding: 10px;
  }

  .nav-links li a::before {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 6px;
    width: 6px;
    border-radius: 50%;
    background-color: var(--text-color);
    opacity: 0;
    transition: all 0.3s ease;
  }

  .nav-links li:hover a::before {
    opacity: 1;
  }

  .nav-bar .darkLight-searchBox {
    display: flex;
    align-items: center;
    position: relative;
  }

  .darkLight-searchBox .dark-light,
  .darkLight-searchBox .searchToggle {
    height: 40px;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 40px;
  }



  .darkLight-searchBox .searchToggle {
    height: 40px;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 40px;

    transition: 0.3s ease;
  }

  .darkLight-searchBox .searchToggle img {
    width: 100%;
    cursor: pointer;
  }

  .darkLight-searchBox .searchToggle .list-user {
    position: absolute;
    height: 70px;
    width: 140px;
    left: 80px;
    top: 40px;
    background-color: #f2f2f2;
    box-shadow: 1px 4px 5px rgb(0, 0, 0, 0.2);
    list-style-type: none;
    direction: ltr;
    padding-left: 13px;
    display: none;
   

  }

  .darkLight-searchBox .searchToggle:hover .list-user {
    display: block;
    height: 70px;

  }

  .darkLight-searchBox .searchToggle .list-user li:hover {
    width: 100%;
    background-color: #4070f4;
    color: #fff;
    cursor: pointer;
  }







  .dark-light i,
  .searchToggle i {
    position: absolute;
    color: var(--text-color);
    font-size: 22px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .dark-light i.sun {
    opacity: 0;
    pointer-events: none;
  }

  .dark-light.active i.sun {
    opacity: 1;
    pointer-events: auto;
  }

  .dark-light.active i.moon {
    opacity: 0;
    pointer-events: none;
  }

  .searchToggle i.cancel {
    opacity: 0;
    pointer-events: none;
  }

  .searchToggle.active i.cancel {
    opacity: 1;
    pointer-events: auto;
  }

  .searchToggle.active i.search {
    opacity: 0;
    pointer-events: none;
  }

  .searchBox {
    position: relative;
  }

  .searchToggle.active~.search-field {
    bottom: -74px;
    opacity: 1;
    pointer-events: auto;
  }

  .search-field::before {
    content: "";
    position: absolute;
    right: 14px;
    top: -4px;
    height: 12px;
    width: 12px;
    background-color: var(--nav-color);
    transform: rotate(-45deg);
    z-index: -1;
  }

  .search-field input {
    height: 100%;
    width: 100%;
    padding: 0 45px 0 15px;
    outline: none;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 400;
    color: var(--search-text);
    background-color: var(--search-bar);
  }

  body.dark .search-field input {
    color: var(--text-color);
  }

  .search-field i {
    position: absolute;
    color: var(--nav-color);
    right: 15px;
    font-size: 22px;
    cursor: pointer;
  }

  body.dark .search-field i {
    color: var(--text-color);
  }

  @media (max-width: 790px) {
    nav .nav-bar .sidebarOpen {
      display: block;
    }

    .menu {
      position: fixed;
      height: 100%;
      width: 320px;
      left: -100%;
      top: 0;
      padding: 20px;
      background-color: var(--side-nav);
      z-index: 100;
      transition: all 0.4s ease;
    }

    nav.active .menu {
      left: -0%;
    }

    nav.active .nav-bar .navLogo a {
      opacity: 0;
      transition: all 0.3s ease;
    }

    .menu .logo-toggle {
      display: block;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo-toggle .siderbarClose {
      color: var(--text-color);
      font-size: 24px;
      cursor: pointer;
    }

    .nav-bar .nav-links {
      flex-direction: column;
      padding-top: 30px;
    }

    .nav-links li a {
      display: block;
      margin-top: 20px;
    }
  }
</style>