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

class Lavoura extends Model
{
    protected $table = 'tblavoura';
    protected $fillable = array('lavcodigo', 'lavdescricao');

    protected $primaryKey = "lavcodigo";
    public $timestamps = false;

    public function todosLavoura()
    {
        return self::all();
    }

    public function getLavoura($id)
    {
        $lavoura= self::find($id);
        if (is_null($lavoura)) {
            return false;
        }
        return $lavoura;
    }

    public function addLavoura()
    {
        $input = Input::all();
        $lavoura = new Lavoura($input);
        $lavoura->save();
        return $lavoura;
    }

    public function atualizarLavoura($id)
    {
        $lavoura = self::find($id);
        if (is_null($lavoura)) {
            return false;
        }
        $input = Input::all();
        $lavoura->fill($input);
        $lavoura->save();
        return self::find($id);
    }

    public function deletarLavoura($id)
    {
        $lavoura = self::find($id);
        if (is_null($lavoura)) {
            return false;
        }
        return $lavoura->delete(); 
    }


}