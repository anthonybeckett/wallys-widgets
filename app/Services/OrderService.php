<?php
namespace App\Services;

use App\Models\Widget;

class OrderService
{
    private function calculatePacks($packs, $amount)
    {
        $results = [];

        rsort($packs);
        $packsCount = count($packs);
        $packCounter = array_fill(0, $packsCount, 0);

        for ($i = 0; $i < $packsCount; $i++) {
            if ($amount >= $packs[$i]) {
                $packCounter[$i] = intval($amount / $packs[$i]);
                $amount = $amount - $packCounter[$i] * $packs[$i];
            }
        }

        if ($amount > 0) {
            if ($packCounter[$packsCount - 1] == 1) {
                $packCounter[$packsCount - 1] = 0;
                $packCounter[$packsCount - 2] += 1;
            } else {
                $packCounter[$packsCount - 1] += 1;
            }
        }

        for ($i = 0; $i < $packsCount; $i++) {
            if ($packCounter[$i] != 0) {
                $results[$packs[$i]] = $packCounter[$i];
            }
        }

        return $results;
    }

    public function process($qty)
    {
        $quantities = Widget::all()->pluck('qty')->toArray();

        dd($this->calculatePacks($quantities, $qty));
    }
}
