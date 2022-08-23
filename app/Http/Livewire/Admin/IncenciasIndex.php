<?php

namespace App\Http\Livewire\Admin;

use App\Models\Incidencia;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class IncenciasIndex extends Component
{
    use WithPagination;

    public $search;

    // para que la paginación funcione con los estilos de boostrap
    protected $paginationTheme = 'bootstrap';

    //Se activa unicamente cuando el valor de la propiedad search cambia y resetea la paginación
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $incidencias = Incidencia::where('titulo', 'LIKE', '%' . $this->search . '%')
                    ->latest('id')
                    ->paginate();

       /*  $incidencias = Incidencia::where('user_id', auth()->user()->id)
                    ->where('titulo', 'LIKE','%' . $this->search .'%')
                    ->latest('id')
                    ->paginate(); */

        return view('livewire.admin.incencias-index', compact('incidencias'));
    }
}
