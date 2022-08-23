<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese nombre de la incidencia">
    </div>
    
    @if ($incidencias->count())

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($incidencias as $incidencia)
                        <tr>
                            <td>{{ $incidencia->id }}</td>
                            <td>{{ $incidencia->titulo }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.incidencias.edit', $incidencia) }}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.incidencias.destroy', $incidencia) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $incidencias->links() }}
        </div>
    @else
    <div class="card-body">
        <strong>No hay ningún registro...</strong>
    </div>
    @endif  

</div>