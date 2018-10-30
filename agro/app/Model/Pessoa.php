<?php
/**
 * @author Ivan Vinicius Boneti
 * @package agro
 * @subpackage model
 * @since 2018 
 */

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'tbpessoa';
    protected $fillable = array('pescodigo', 'pesnome', 'pesidade', 'pescpf', 'pestelefone');

    protected $primaryKey = "pescodigo";
    public $timestamps = false;

    public function todosPessoa()
    {
        return self::all();
    }

    public function getPessoa($id)
    {
        $pessoa= self::find($id);
        if (is_null($pessoa)) {
            return false;
        }
        return $pessoa;
    }

    public function addPessoa()
    {
        $input = Input::all();
        $pessoa = new Pessoa($input);
        $pessoa->save();
        return $pessoa;
    }

    public function atualizarPessoa($id)
    {
        $pessoa = self::find($id);
        if (is_null($pessoa)) {
            return false;
        }
        $input = Input::all();
        $pessoa->fill($input);
        $pessoa->save();
        return self::find($id);
    }

    public function deletarPessoa($id)
    {
        $pessoa = self::find($id);
        if (is_null($pessoa)) {
            return false;
        }
        return $pessoa->delete(); 
    }


}