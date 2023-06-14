<nav class="nav">
    <div>
        <!-- <a href="#" class="nav_logo">
            <i class='bx bx-layer nav_logo-icon'></i>
            <span class="nav_logo-name">BBBootstrap</span>
        </a> -->
        <div class="nav_list">
            <a href="/" class="nav_link {{ request()->is('/') ? 'active' : '' }}">
                <i class='fs-4 bi-house nav_icon'></i>
                <span class="nav_name">Anasayfa</span>
            </a>
            <a href="/categories" class="nav_link {{ request()->is('categories') ? 'active' : '' }}">
                <i class="fs-4 bi bi-diagram-2 nav_icon"></i>
                <span class="nav_name">Kategoriler</span>
            </a>
            <a href="/products" class="nav_link {{ request()->is('products') ? 'active' : '' }}">
                <i class="fs-4 bi bi-cup-straw nav_icon"></i>
                <span class="nav_name">Ürünler</span>
            </a>
            <a href="/orderCategories" class="nav_link {{ request()->is('orderCategories') ? 'active' : '' }}">
                <i class="bi bi-arrow-down-up nav_icon"></i>
                <span class="nav_name">Kategori Sıralama</span>
            </a>
            <a href="" class="nav_link">
                <i class="bi bi-arrow-left-right"></i>
                <span class="nav_name">Ürün Sıralama</span>
            </a>
            <a href="/users" class="nav_link {{ request()->is('users') ? 'active' : '' }}">
                <i class="fs-4 bi bi-person-lines-fill nav_icon"></i>
                <span class="nav_name">Kullanıcılar</span>
            </a>
        </div>
    </div>
    <div class="">
        <a href="/profile" class="nav_link {{ request()->is('profile') ? 'active' : '' }}">
            <i class="fs-4 bi bi-person-fill nav_icon"></i>
            <span class="nav_name">Profil</span>
        </a>
        <a href="#" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">Çıkış</span>
        </a>
    </div>
</nav>
