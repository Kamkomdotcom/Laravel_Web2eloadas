<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //DB Facade
use Illuminate\View\View;

class DiagramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $stats = DB::table('hely')
            ->join('film', 'hely.fkod', '=', 'film.fkod') //kapcsoljuk hozzá a 'film' táblát
            ->select(
                'film.filmcim',
                DB::raw('count(hely.fkod) as vetitesek_szama') 
            )
            ->groupBy('film.filmcim') 
            ->orderBy('vetitesek_szama', 'desc')
            ->get();
        
        $labels = $stats->pluck('filmcim'); //['Film A', 'Film B', 'Film C']
        $data = $stats->pluck('vetitesek_szama'); //[10, 8, 5]

        return view('diagram.index', [  //átadjuk ezt a két tömböt a nézetnek
            'labels' => $labels,
            'data' => $data,
        ]);
    }
}