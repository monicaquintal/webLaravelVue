<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection(): Collection
    {
        /** @var User $user */
        $user = Auth::user();
        return $user->tarefas()->get();
    }

    public function headings(): array {
        return [
            'ID da Tarefa', 
            'Tarefa', 
            'Data limite de conclusão'
        ];
    }

    public function map($linha): array {
        return [
            $linha->id,
            $linha->tarefa,
            date('d/m/Y', strtotime($linha->data_limite_conclusao))
        ];
    }
}
