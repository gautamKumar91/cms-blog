<div class="side-menu">
  <aside class="menu  m-t-30">
    <p class="menu-label m-l-10">
      General
    </p>
    <ul class="menu-list m-l-15">
      <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
    </ul>
    <p class="menu-label m-l-10">
     Content
   </p>
   <ul class="menu-list m-l-15">
     <li><a href="{{route('posts.index')}}" class="{{Nav::isResource('posts', 2)}}">Blog Posts</a></li>
     {{-- <li>
       <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
       <ul class="submenu">
         <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
         <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
       </ul>
     </li> --}}
   </ul>
    <p class="menu-label m-l-10">
      Administration
    </p>
    <ul class="menu-list m-l-15">
      <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a></li>
      <li><a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Permission &amp; Roles</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permission</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
