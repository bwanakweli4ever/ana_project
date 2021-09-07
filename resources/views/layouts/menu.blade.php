


<li class="{!! (Request::is('schools*') ? 'active' : '' ) !!}">
    <a href="{{ route('schools.index') }}">
        <span class="mm-text ">Schools</span>
        <span class="menu-icon"><i class="im im-icon-Building"></i></span>
    </a>
</li>

<li class="{!! (Request::is('trees*') ? 'active' : '' ) !!}">
    <a href="{{ route('trees.index') }}">
        <span class="mm-text ">Trees</span>
        <span class="menu-icon"><i class="im im-icon-Tree-2"></i></span>
    </a>
</li>



<li class="{!! (Request::is('assignTrees*') ? 'active' : '' ) !!}">
    <a href="{{ route('assignTrees.index') }}">
        <span class="mm-text ">Assign Trees</span>
        <span class="menu-icon"><i class="im im-icon-Link"></i></span>
    </a>
</li>

