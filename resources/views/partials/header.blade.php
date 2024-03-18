<header class="container d-flex justify-content-center mt-4">
    <ul class="headerList">
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='home' ]) href="{{ route('home') }}"> <img class="logoHeader" src="{{Vite::asset('/resources/images/dc-logo.png')}}" alt=""></a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='Characters' ]) href="{{ route('Characters') }}">Characters</a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='Comics' ])href="{{ route('Comics') }}">Comics</a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='Movies' ]) href="{{ route('Movies') }}">Movies</a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='Tv' ])href="{{ route('Tv') }}">Tv</a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='Games' ])href="{{ route('Games') }}">Games</a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='Collectibles' ]) href="{{ route('Collectibles') }}">Collectibles</a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='Video' ]) href="{{ route('Video') }}">Video</a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='Fans' ]) href="{{ route('Fans') }}">Fans</a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='News' ]) href="{{ route('News') }}">News</a>
        </li>
        <li>
            <a @class([ 'link' , 'active'=> Route::currentRouteName()=='Shop' ]) href="{{ route('Shop') }}">Shop</a>
        </li>
    </ul>
</header>