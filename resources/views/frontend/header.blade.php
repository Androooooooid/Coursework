<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html">
                <h1>SQUAD FREE</h1>
            </a>
        </div>
        @if (isset($menu))

        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                @foreach($menu as $item)
                <li><a href="#{{$item['alias']}}">{{$item['title']}}</a></li>
                @endforeach
                  
            </ul>
        </div>

        @endif
      <!-- Collect the nav links, forms, and other content for toggling -->
        
    </div>
</nav>