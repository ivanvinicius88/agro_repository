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

class Safra extends Model
{
    protected $table = 'tbsafra';
    protected $fillable = array('pescodigo', 'lavcodigo', 'maqcodigo', 'safcodigo', 'safdescricao', 'safano');

    protected $primaryKey = "safcodigo";
    public $timestamps = false;

    public function todosSafra()
    {
        return self::all();
    }

    public function getSafra($id)
    {
        $safra= self::find($id);
        if (is_null($safra)) {
            return false;
        }
        return $safra;
    }

    public function addSafra()
    {
        $input = Input::all();
        $safra = new Safra($input);
        $safra->save();
        return $safra;
    }

    public function atualizarSafra($id)
    {
        $safra = self::find($id);
        if (is_null($safra)) {
            return false;
        }
        $input = Input::all();
        $safra->fill($input);
        $safra->save();
        return self::find($id);
    }

    public function deletarSafra($id)
    {
        $safra = self::find($id);
        if (is_null($safra)) {
            return false;
        }
        return $safra->delete(); 
    }


}