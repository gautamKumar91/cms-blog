<div class="side-menu">
  <aside class="menu  m-t-30">
    <p class="menu-label m-l-10">
      General
    </p>
    <ul class="menu-list m-l-15">
      <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
    </ul>
    <p class="menu-label m-l-10">
      Administration
    </p>
    <ul class="menu-list m-l-15">
      <li><a href="{{route('users.index')}}">Manage Users</a></li>
      <li><a href="{{route('permissions.index')}}">Permission &amp; Roles</a></li>
      <ul class="menu-list m-l-15">
        <li><a href="{{route('roles.index')}}">Roles</a></li>
        <li><a href="{{route('permissions.index')}}">Permission</a></li>
      </ul>

    </ul>
  </aside>
</div>
