<!-- resources/views/layouts/menu.blade.php -->
<div id="menu">
<ul id="list-menu">
    <li><a href="{{route('homepage')}}">Home</a></li>
    @if(Auth::check())
        <li><a href="{{route('kategori.index')}}">Merek</a></li>
        <li><a href="{{route('posting.index')}}">Mobil</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
    @endif
</ul>
</div>
