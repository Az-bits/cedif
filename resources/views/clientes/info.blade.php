       <!-- Modal -->
       <div class="modal fade" id="edit{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Editar cliente</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <form action="{{ route('home.update', $value->id) }}" method="post" enctype='multipart/form-data'>

                       @csrf
                       @method('PUT')
                       <div class="modal-body">
                           <div class="mb-3">
                               <label for="nombre" class="form-label">Nombre</label>
                               <input type="text" class="form-control" name='nombre' id="nombre"
                                   value="{{ $value->nombre }}">
                           </div>
                           <div class="mb-3">
                               <label for="telefono" class="form-label">Telefono</label>
                               <input type="number" class="form-control" name='telefono' id="telefono"
                                   value="{{ $value->telefono }}" min='8'>
                           </div>
                           <div class="mb-3">
                               <label for="correo" class="form-label">Correo</label>
                               <input type="email" class="form-control" name='correo' id="correo"
                                   value="{{ $value->correo }}">
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                           <button type="submit" class="btn btn-primary">Guardar</button>
                       </div>
                   </form>

               </div>
           </div>
       </div>

       <!-- Modal -->
       <div class="modal fade" id="delete{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Eliminar cliente</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <form action="{{ route('home.destroy', $value->id) }}" method="post" enctype='multipart/form-data'>

                       @csrf
                       @method('DELETE')
                       <div class="modal-body">
                           Estas seguro de eliminar a <strong>{{ $value->nombre }} ?</strong>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                           <button type="submit" class="btn btn-primary">Eliminar</button>
                       </div>
                   </form>

               </div>
           </div>
       </div>
