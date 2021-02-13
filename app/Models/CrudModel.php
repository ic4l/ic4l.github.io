<?php namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{

  public function get_all($table)
  {
    return $this->db->table($table)->get()->getResultArray();
  }

  public function get_where($table, $where, $id)
  {
    return $this->db->table($table)->getWhere([$where => $id])->getRowArray();
  }

  public function get_where2($table, $where, $id, $where2, $id2)
  {
    return $this->db->table($table)->getWhere([$where => $id, $where2 => $id2])->getResultArray();
  }

  public function get_where_result($table, $where, $id)
  {
    return $this->db->table($table)->getWhere([$where => $id])->getResultArray();
  }

  public function get_where_result2($table, $where, $id, $where2, $id2)
  {
    return $this->db->table($table)->getWhere([$where => $id, $where2 => $id2])->getResultArray();
  }

  public function get_like($table, $where, $id)
  {
    return $this->db->table($table)->like($where, $id)->get()->getResultArray();
  }

  public function delete_data($table, $where, $id)
  {
    return $this->db->table($table)->where([$where => $id])->delete();
  }

  public function update_data($table, $uid, $data)
  {
    return $this->db->table($table)->where(['UID' => $uid])->update($data);
  }

  public function update_data_where($table, $where, $uid, $data)
  {
    return $this->db->table($table)->where([$where => $uid])->update($data);
  }

  public function insert_data($table, $data)
  {
    return $this->db->table($table)->insert($data);
  }

  public function count_all_data($table)
  {
    return $this->db->table($table)->countAllResults();
  }

  public function count_where_data($table, $where, $id)
  {
    return $this->db->table($table)->where($where, $id)->countAllResults();
  }

}
