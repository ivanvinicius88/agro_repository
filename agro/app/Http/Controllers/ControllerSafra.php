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
use App\Model\Safra;
use Illuminate\Support\Facades\Input;


class ControllerSafra extends BaseController
{
    private $safra = null;

    public function __construct(Safra $safra)
    {
        $this->safra = $safra;
    }

    public function todosSafra()
    {
        return response()->json($this->safra->todosSafra(), 200)
            ->header('Content-Type', 'application/json');
    }


    public function getSafra($id)
    {
        $safra = $this->safra->getSafra($id);
        if (!$safra) {
            return response()->json(['response', 'Safra não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($safra, 200)
            ->header('Content-Type', 'application/json');
    }


    public function addSafra()
    {
        return response()->json($this->safra->addSafra(), 201)
            ->header('Content-Type', 'application/json');
    }

    
    public function atualizarSafra($id)
    {
        $safra = $this->safra->atualizarSafra($id);
        if (!$safra) {
            return response()->json(['response', 'Safra não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($safra, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarSafra($id)
    {
        $safra = $this->safra->deletarSafra($id);
        if (!$safra) {
            return response()->json(['response', 'Safra não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Safra deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }



}
?>