<?php
namespace App\Models;
use CodeIgniter\Model;

class usuariomodel extends Model
{
    protected $table = 'usuarios';/*Nombre de la table esta bien*/
    protected $primaryKey = 'idusuario';/*El prymary */
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfilid', 'baja', 'created_at'];
}