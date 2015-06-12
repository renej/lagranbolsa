<?php
/**
 * Created by PhpStorm.
 * User: renjes
 * Date: 8/05/15
 * Time: 11:54 PM
 */
require_once '../includes/Db.class.php';
class Empresa {

    private $dbh;

    function __construct() {
        $this->dbh = new DB();
    }

    public function insert($strEmpresa, $strUsuario, $strPassword, $strConfPassword, $strEmail, $strContacto, $intTipoUsuario, $intEstado, $strAccion) {
        $response = array();
        $fechaIngreso = date('Y-m-d');
        $fechaBaja = date('Y-m-d', strtotime('+1 year'));
        if(!empty($strEmpresa) && !empty($strUsuario) && !empty($strPassword) && !empty($strConfPassword) && !empty($strEmail) && !empty($strContacto) && !empty($intTipoUsuario) && !empty($intEstado)) {
            $params = array(
				'intEmpresa' => null,
                'strEmpresa' => $strEmpresa,
                'strUsuario' => $strUsuario,
                'strPassword' => $strPassword,
                'strConfPassword' => $strConfPassword,
                'strEmail' => $strEmail,
                'strContacto' => $strContacto,
                'bitActivo' => 1,
                'fechaIngreso' => $fechaIngreso,
                'fechaBaja' => $fechaBaja,
                'intTipoUsuario' => $intTipoUsuario,
                'intEstado' => $intEstado,
				'strAccion' => $strAccion
            );
            $sql = "CALL SP_Empresas (:intEmpresa, :strEmpresa, :strUsuario, :strPassword:, :strConfPassword,
            :strEmail, :strContacto, :bitActivo, :fechaIngreso, :fechaBaja, :intTipoUsuario, :intEstado, :strAccion)";
            $insert = $this->dbh->stored($sql, $params);
            return $insert;
        }
    }

    public function delete($idEmpresa, $strAccion) {
        $response = array();
        if(!empty($idEmpresa)) {
            $params = array(
                'idEmpresa' => $idEmpresa,
				'strEmpresa' => null,
                'strUsuario' => null,
                'strPassword' => null,
                'strConfPassword' => null,
                'strEmail' => null,
                'strContacto' => null,
                'bitActivo' => null,
                'fechaIngreso' => null,
                'fechaBaja' => null,
                'intTipoUsuario' => null,
                'intEstado' => null,
				'strAccion' => $strAccion
        );
            $sql = "CALL SP_Empresas (:intEmpresa, :strEmpresa, :strUsuario, :strPassword:, :strConfPassword,
            :strEmail, :strContacto, :bitActivo, :fechaIngreso, :fechaBaja, :intTipoUsuario, :intEstado, :strAccion)";
            $delete = $this->dbh->stored($sql, $params);
            return $delete;
        }
    }

    public function update($idEmpresa, $strEmpresa, $strUsuario, $strPassword, $strConfPassword, $strEmail, $strContacto, $fechaIngreso, $fechaBaja, $intTipoUsuario, $intEstado, $strAccion) {
        $response = array();
        if(!empty($strEmpresa) && !empty($strUsuario) && !empty($strPassword) && !empty($strConfPassword) && !empty($strEmail) && !empty($strContacto) && !empty($fechaIngreso) && !empty($fechaBaja) && !empty($intTipoUsuario) && !empty($intEstado) && !empty($idEmpresa)) {
            $params = array(
				'idEmpresa' => $idEmpresa,
                'strEmpresa' => $strEmpresa,
                'strUsuario' => $strUsuario,
                'strPassword' => $strPassword,
                'strConfPassword' => $strConfPassword,
                'strEmail' => $strEmail,
                'strContacto' => $strContacto,
                'bitActivo' => 1,
                'fechaIngreso' => $fechaIngreso,
                'fechaBaja' => $fechaBaja,
                'intTipoUsuario' => $intTipoUsuario,
                'intEstado' => $intEstado,
				'strAccion' => $strAccion
            );
           $sql = "CALL SP_Empresas (:intEmpresa, :strEmpresa, :strUsuario, :strPassword:, :strConfPassword,
            :strEmail, :strContacto, :bitActivo, :fechaIngreso, :fechaBaja, :intTipoUsuario, :intEstado, :strAccion)";
            $update = $this->dbh->stored($sql, $params);
            return $update;
        }
    }

}