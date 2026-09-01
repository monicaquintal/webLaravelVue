<?php

namespace App\Exports;

use App\Models\Tarefa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class TarefasExport implements FromCollection
{
    public function collection(): Collection
    {
        return Tarefa::all();
    }
}
