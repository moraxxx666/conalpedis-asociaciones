<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrador_model extends CI_Model
{
    public function ObtenerAsociaciones()
    {
        $query = $this->db->query("SELECT * FROM asociaciones_asociacion");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else return array();
    }
    public function ObtenerAsociacion($id)
    {
        $query = $this->db->query("SELECT * FROM asociaciones_asociacion WHERE id_asociacion = $id");
        if ($query->num_rows() === 1) {
            return $query->row_array();
        } else return null;
    }
    public function ObtenerAntecedentes($id)
    {
        $query = $this->db->query("SELECT * FROM asociaciones_antecedentes WHERE id_asociacion = $id");
        if ($query->num_rows() === 1) {
            return $query->row_array();
        } else return array();
    }
    public function ObtenerProyectos($id)
    {
        $query = $this->db->query("SELECT * FROM asociaciones_proyectos WHERE id_asociacion = $id");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else return array();
    }
}
