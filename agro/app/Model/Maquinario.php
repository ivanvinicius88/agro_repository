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

class Maquinario extends Model
{
    protected $table = 'tbmaquinario';
    protected $fillable = array('maqcodigo', 'maqdescricao', 'maqano', 'maqvalor');

    protected $primaryKey = "maqcodigo";
    public $timestamps = false;

    public function todosMaquinario()
    {
        return self::all();
    }

    public function getMaquinario($id)
    {
        $maquinario= self::find($id);
        if (is_null($maquinario)) {
            return false;
        }
        return $maquinario;
    }

    public function addMaquinario()
    {
        $input = Input::all();
        $maquinario = new Maquinario($input);
        $maquinario->save();
        return $maquinario;
    }

    public function atualizarMaquinario($id)
    {
        $maquinario = self::find($id);
        if (is_null($maquinario)) {
            return false;
        }
        $input = Input::all();
        $maquinario->fill($input);
        $maquinario->save();
        return self::find($id);
    }

    public function deletarMaquinario($id)
    {
        $maquinario = self::find($id);
        if (is_null($maquinario)) {
            return false;
        }
        return $maquinario->delete(); 
    }


}