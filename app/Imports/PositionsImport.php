<?php

namespace App\Imports;

use App\Yahoo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PositionsImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        $ids = [];
        foreach ($rows as $row) {
            if ($symbol = $row['symbol'] ?? false) {
                if ($stock = Yahoo::stockFromSymbol($symbol)) {
                    $ids[] = $stock->id;
                }
            }
        }

        /** @var $user App\User */
        $user = Auth::user();
        $user->stocksInPositions()->sync($ids);
        $user->stocksInWatchlist()->syncWithoutDetaching($ids);
    }
}
