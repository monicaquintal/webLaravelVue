<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class TarefasExport implements FromCollection
{
    public function collection(): Collection
    {
        /** @var User $user */
        $user = Auth::user();
        return $user->tarefas()->get();
    }
}
