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
use App\Model\Maquinario;
use Illuminate\Support\Facades\Input;


class ControllerMaquinario extends BaseController
{
    private $maquinario = null;

    public function __construct(Maquinario $maquinario)
    {
        $this->maquinario = $maquinario;
    }

    public function todosMaquinario()
    {
        return response()->json($this->maquinario->todosMaquinario(), 200)
            ->header('Content-Type', 'application/json');
    }


    public function getMaquinario($id)
    {
        $maquinario = $this->maquinario->getMaquinario($id);
        if (!$maquinario) {
            return response()->json(['response', 'Maquinario não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($maquinario, 200)
            ->header('Content-Type', 'application/json');
    }


    public function addMaquinario()
    {
        return response()->json($this->maquinario->addMaquinario(), 201)
            ->header('Content-Type', 'application/json');
    }

    
    public function atualizarMaquinario($id)
    {
        $maquinario = $this->maquinario->atualizarMaquinario($id);
        if (!$maquinario) {
            return response()->json(['response', 'Maquinario não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($maquinario, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarMaquinario($id)
    {
        $maquinario = $this->maquinario->deletarMaquinario($id);
        if (!$maquinario) {
            return response()->json(['response', 'Maquinario não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Maquinario deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }



}
?>