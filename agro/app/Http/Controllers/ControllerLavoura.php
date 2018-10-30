<?php
/**
 * @author Ivan Vinicius Boneti
 * @package agro
 * @subpackage controller 
 * @since 2018
 */
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Lavoura;
use Illuminate\Support\Facades\Input;


class ControllerLavoura extends BaseController
{
    private $lavoura = null;

    public function __construct(Lavoura $lavoura)
    {
        $this->lavoura = $lavoura;
    }

    public function todosLavoura()
    {
        return response()->json($this->lavoura->todosLavoura(), 200)
            ->header('Content-Type', 'application/json');
    }


    public function getLavoura($id)
    {
        $lavoura = $this->lavoura->getLavoura($id);
        if (!$lavoura) {
            return response()->json(['response', 'Lavoura não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($lavoura, 200)
            ->header('Content-Type', 'application/json');
    }


    public function addLavoura()
    {
        return response()->json($this->lavoura->addLavoura(), 201)
            ->header('Content-Type', 'application/json');
    }

    
    public function atualizarLavoura($id)
    {
        $lavoura = $this->lavoura->atualizarLavoura($id);
        if (!$lavoura) {
            return response()->json(['response', 'Lavoura não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($lavoura, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarLavoura($id)
    {
        $lavoura = $this->lavoura->deletarLavoura($id);
        if (!$lavoura) {
            return response()->json(['response', 'Lavoura não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Lavoura deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }



}
?>