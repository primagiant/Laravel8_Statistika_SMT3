<?php

namespace App\Models;

use App\Models\Skors as ModelsSkors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Skors extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function min()
    {
        $skor = DB::table('skors')
            ->min('skor');
        return $skor;
    }

    public static function max()
    {
        $skor = DB::table('skors')
            ->max('skor');
        return $skor;
    }

    public static function avg()
    {
        $skor = DB::table('skors')
            ->avg('skor');
        return $skor;
    }

    public static function jangkauan()
    {
        $min = ModelsSkors::min();
        $max = ModelsSkors::max();
        $res = $max - $min;
        return $res;
    }

    public static function jmlKelas()
    {
        $skor = ModelsSkors::all()->count();
        $res = ceil(1 + (3.3 * log($skor, 10)));
        return $res;
    }

    public static function pjgKelas()
    {
        $j = ModelsSkors::jangkauan();
        $k = ModelsSkors::jmlKelas();
        $res = ceil($j / $k);
        return $res;
    }

    public static function getFreqTable()
    {
        $skors = ModelsSkors::all('skor')->toArray();
        $arr = [];
        foreach ($skors as $skor) {
            array_push($arr, $skor['skor']);
        }
        $key = array_unique($arr);
        sort($key);

        $res = [];
        foreach ($key as $k) {
            array_push($res, [
                "key" => $k,
                "value" => count(array_keys($arr, $k)),
            ]);
        }
        return $res;
    }

    public static function getDataBergolong()
    {
        $jmlKelas = ModelsSkors::jmlKelas();
        $pjgKelas = ModelsSkors::pjgKelas();
        $min = ModelsSkors::min();

        $arr = [];
        for ($i = 0; $i < $jmlKelas; $i++) {
            array_push($arr, [
                'down' => $min + ($pjgKelas * $i),
                'up' => $min + ($pjgKelas * ($i + 1)) - 1,
            ]);
        }

        $res = [];
        foreach ($arr as $a) {
            array_push($res, [
                "down" => $a['down'],
                "up" => $a['up'],
                "freq" => DB::table('skors')
                    ->where('skor', '>=', $a['down'])
                    ->where('skor', '<=', $a['up'])
                    ->count(),
            ]);
        }
        return $res;
    }
}
