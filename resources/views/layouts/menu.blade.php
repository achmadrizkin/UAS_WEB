<!-- resources/views/layouts/menu.blade.php -->
<div id="menu">
<ul id="list-menu">
    <li><a href="{{route('homepage')}}">Home</a></li>
    <li><a href="{{route('produk')}}">Produk</a></li>
    <li><a href="{{route('profil')}}">Profil</a></li>
    <li><a href="">Kontak</a></li>
    @if(Auth::check())
        <li><a href="{{route('kategori.index')}}">Kategori</a></li>
        <li><a href="{{route('posting.index')}}">Posting</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
    @endif
</ul>
</div>
