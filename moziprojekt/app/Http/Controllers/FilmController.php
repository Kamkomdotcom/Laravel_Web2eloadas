<?php
namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FilmController extends Controller
{
    /*Display a listing of the resource.*/
    public function index(Request $request): View
    {
        $filmek = Film::orderBy('filmcim', 'asc')->get(); //lekérdezzük az összes filmet
        if ($request->is('crud/*')) {  //crud?
            return view('crud.filmek.index', [  //ha igen akkor crud oldal
                'filmek' => $filmek
            ]);
        } else {
            return view('filmek.index', [ //ha nem akkor sima filmek oldal
                'filmek' => $filmek
            ]);
        }
    }
    /*Show the form for creating a new resource.*/
    public function create(): View { return view('crud.filmek.create'); }
    /*Store a newly created resource in storage.*/
    public function store(Request $request)
    {
        $validated = $request->validate([   //Validáció
            'filmcim' => 'required|string|max:255',
            'szines' => 'required|boolean',
            'szinkron' => 'required|string|max:100',
            'szarmazas' => 'nullable|string|max:100',
            'mufaj' => 'nullable|string|max:100',
            'hossz' => 'required|integer|min:1',
        ]);

        Film::create($validated);  //adatbázisba mentés az ORM segítségével
        return redirect()->route('crud.filmek.index')->with('success', 'Az új film sikeresen létrehozva!');
    }
    /*Display the specified resource.*/
    public function show(Film $filmek) { return redirect()->route('crud.filmek.edit', $filmek); }
    /*Show the form for editing the specified resource.*/
    public function edit(Film $filmek): View
    {
        return view('crud.filmek.edit', [
            'film' => $filmek
        ]);
    }
    /*Update the specified resource in storage.*/
    public function update(Request $request, Film $filmek)
    {
         $validated = $request->validate([
            'filmcim' => 'required|string|max:255',
            'szines' => 'required|boolean',
            'szinkron' => 'required|string|max:100',
            'szarmazas' => 'nullable|string|max:100',
            'mufaj' => 'nullable|string|max:100',
            'hossz' => 'required|integer|min:1',
        ]);
        $filmek->update($validated);  //meglévő film modell frissítése az új adatokkal

        return redirect()->route('crud.filmek.index')
                         ->with('success', 'A film adatai sikeresen módosítva!');
    }
    /*Remove the specified resource from storage.*/
    public function destroy(Film $filmek)
    {
        try {
            $filmek->delete();  //Törlés
            return redirect()->route('crud.filmek.index') ->with('success', 'A film sikeresen törölve!'); //Visszairányítás sikerüzenettel
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('crud.filmek.index')
                             ->with('error', 'A filmet nem lehet törölni, mert vetítés hivatkozik rá! Előbb a vetítést kell törölni.');
        }
    }
}