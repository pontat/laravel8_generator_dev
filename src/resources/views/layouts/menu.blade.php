<li class="nav-item">
    <a href="{{ route('todos.index') }}"
       class="nav-link {{ Request::is('todos*') ? 'active' : '' }}">
        <p>Todos</p>
    </a>
</li>


