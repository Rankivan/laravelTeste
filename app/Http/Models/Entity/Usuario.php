<?php

namespace App\Http\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuario extends Model
{

    /**
     * @var string
     */
    protected $table = 'usuario';

    /**
     * @param $column
     * @param $where
     * @return \Illuminate\Support\Collection
     */
    protected function getCollumnUsuario($column, $columnLine, $value)
    {
        $get = DB::table('usuario')
        ->select($column)
        ->where($columnLine, '=', $value)
        ->get();
        return $get;
    }

    /**
     * @param $values
     * @return bool
     */
    protected function setCollumnUsuario($values)
    {
        $set = DB::table('usuario')
            ->insert($values);
        return $set;
    }

    /**
     * @param $values
     * @return int
     */
    protected function updateCollumnUsuario($id, $values)
    {
        $set = DB::table('usuario')
            ->where('id', '=', $id)
            ->update($values);
        return $set;

    }

    //=============================================================

    /**
     * @param $column
     * @param $where
     * @return \Illuminate\Support\Collection
     */
    public function getUsuario($column, $columnLine, $value)
    {
        $set = $this->getCollumnUsuario($column, $columnLine, $value);
        return $set;
    }

    /**
     * @param $values
     * @return bool
     */
    public function setUsuario($values)
    {
        $set = $this->setCollumnUsuario($values);
        return $set;
    }

    /**
     * @param $values
     * @return bool
     */
    public function updateUsuario($id, $values)
    {
        $set = $this->updateCollumnUsuario($id, $values);
        return $set;
    }




}

