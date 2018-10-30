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
use App\Model\Pessoa;
use Illuminate\Support\Facades\Input;


class ControllerPessoa extends BaseController
{
    private $pessoa = null;

    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function todosPessoa()
    {
        return response()->json($this->pessoa->todosPessoa(), 200)
            ->header('Content-Type', 'application/json');
    }


    public function getPessoa($id)
    {
        $pessoa = $this->pessoa->getPessoa($id);
        if (!$pessoa) {
            return response()->json(['response', 'Pessoa não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($pessoa, 200)
            ->header('Content-Type', 'application/json');
    }


    public function addPessoa()
    {
        return response()->json($this->pessoa->addPessoa(), 201)
            ->header('Content-Type', 'application/json');
    }

    
    public function atualizarPessoa($id)
    {
        $pessoa = $this->pessoa->atualizarPessoa($id);
        if (!$pessoa) {
            return response()->json(['response', 'Pessoa não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($pessoa, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarPessoa($id)
    {
        $pessoa = $this->pessoa->deletarPessoa($id);
        if (!$pessoa) {
            return response()->json(['response', 'Pessoa não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Pessoa deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }



}
?>