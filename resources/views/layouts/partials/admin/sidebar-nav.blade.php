<ul class="sidebar-menu">
  <li class="header">Menu</li> 
  <!-- institucion -->
  <li class="treeview {{ setActive('admin/tiposdeacademia') }}
  {{ setActive('admin/tiposdeacademia/create') }}
  {{ setActive('admin/tiposdeacademia/*/edit') }}
  {{ setActive('admin/academias') }}
  {{ setActive('admin/academias/create') }}
  {{ setActive('admin/academias/*/edit') }}
  {{ setActive('admin/modalidades') }}
    {{ setActive('admin/modalidades/create') }}
    {{ setActive('admin/modalidades/*/edit') }}
    {{ setActive('admin/carreras') }}
      {{ setActive('admin/carreras/create') }}
      {{ setActive('admin/carreras/*/edit') }}">
    <a href="#">
      <i class="fa fa-link"></i> <span>Institucion</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <!-- men #1 -->
    <ul class="treeview-menu">
      <li class="treeview {{ setActive('admin/tiposdeacademia') }}
    {{ setActive('admin/tiposdeacademia/create') }}
    {{ setActive('admin/tiposdeacademia/*/edit') }}">
        <a href="#">
          <span>Tipo Academia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ setActive('admin/tiposdeacademia') }}">
            <a href="{{  route('admin.tiposdeacademia.index') }}">Todos</a>
          </li>
          <li class="{{ setActive('admin/tiposdeacademia/create') }}">
            <a href="{{  route('admin.tiposdeacademia.create') }}">Nuevo</a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- men #2 -->
    <ul class="treeview-menu">
      <li class="treeview {{ setActive('admin/academias') }}
  {{ setActive('admin/academias/create') }}
  {{ setActive('admin/academias/*/edit') }}">
        <a href="#">
          <span>Academia</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ setActive('admin/academias') }}">
            <a href="{{  route('admin.academias.index') }}">Todos</a>
          </li>
          <li class="{{ setActive('admin/academias/create') }}">
            <a href="{{  route('admin.academias.create') }}">Nuevo</a>
          </li>
        </ul>
      </li>
    </ul>

      <!-- men #3 -->
      <ul class="treeview-menu">
        <li class="treeview {{ setActive('admin/modalidades') }}
    {{ setActive('admin/modalidades/create') }}
    {{ setActive('admin/modalidades/*/edit') }}">
          <a href="#">
            <span>Modalidades</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ setActive('admin/modalidades') }}">
              <a href="{{  route('admin.modalidades.index') }}">Todos</a>
            </li>
            <li class="{{ setActive('admin/modalidades/create') }}">
              <a href="{{  route('admin.modalidades.create') }}">Nuevo</a>
            </li>
          </ul>
        </li>
      </ul>

        <!-- men #4 -->
        <ul class="treeview-menu">
          <li class="treeview {{ setActive('admin/carreras') }}
      {{ setActive('admin/carreras/create') }}
      {{ setActive('admin/carreras/*/edit') }}">
            <a href="#">
              <span>Carreras</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ setActive('admin/carreras') }}">
                <a href="{{  route('admin.carreras.index') }}">Todos</a>
              </li>
              <li class="{{ setActive('admin/carreras/create') }}">
                <a href="{{  route('admin.carreras.create') }}">Nuevo</a>
              </li>
            </ul>
          </li>
        </ul>

  </li>
  <!-- end institucion -->

  <!-- Libros -->
  <li class="treeview {{ setActive('admin/libros') }}
  {{ setActive('admin/libros/create') }}
  {{ setActive('admin/libros/*/edit') }}
  {{ setActive('admin/autores') }}
  {{ setActive('admin/autores/create') }}
  {{ setActive('admin/autores/*/edit') }}">
    <a href="#">
      <i class="fa fa-link"></i> <span>Libros y Autores</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <!-- men #1 -->
    <ul class="treeview-menu">
      <li class="treeview {{ setActive('admin/libros') }}
    {{ setActive('admin/libros/create') }}
    {{ setActive('admin/libros/*/edit') }}">
        <a href="#">
          <span>Libros</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ setActive('admin/libros') }}">
            <a href="{{  route('admin.libros.index') }}">Todos</a>
          </li>
          <li class="{{ setActive('admin/libros/create') }}">
            <a href="{{  route('admin.libros.create') }}">Nuevo</a>
          </li>
        </ul>
      </li>
    </ul>

    <!-- men #2 -->
    <ul class="treeview-menu">
      <li class="treeview {{ setActive('admin/autores') }}
    {{ setActive('admin/autores/create') }}
    {{ setActive('admin/autores/*/edit') }}">
        <a href="#">
          <span>Autores</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ setActive('admin/autores') }}">
            <a href="{{  route('admin.autores.index') }}">Todos</a>
          </li>
          <li class="{{ setActive('admin/autores/create') }}">
            <a href="{{  route('admin.autores.create') }}">Nuevo</a>
          </li>
        </ul>
      </li>
    </ul>

  </li>
  <!-- end libros -->


</ul>