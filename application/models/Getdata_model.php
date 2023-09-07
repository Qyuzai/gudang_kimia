<?php
class Getdata_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function empty_response(){
        $response['status']=502;
        $response['error']=true;
        $response['message']='Field tidak boleh kosong';
        return $response;
    }

    function no_gambar(){
        date_default_timezone_set('Asia/Jakarta');
        $dateFrmt = date('ymd');
        $sql = "SELECT MAX(SUBSTRING(nama_file,11,4)) AS no_gambar
                FROM patch_file WHERE SUBSTRING(nama_file,5,6) = '".$dateFrmt."'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->no_gambar) + 1;
            $no = sprintf("%'.04d",$n);
        }else{
            $no = "0001";
        }

        $dat_="GMBR";
        $gambarname = $dat_.date('ymd').$no;
        return $gambarname;
    }

    function no_invoice_request(){
        date_default_timezone_set('Asia/Jakarta');
        $dateFrmt = date('ymd');
        $sql = "SELECT MAX(SUBSTRING(nota_bkimia,10,4)) AS no_invoice
                FROM tbl_request_bkimia WHERE SUBSTRING(nota_bkimia,4,6) = '".$dateFrmt."'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->no_invoice) + 1;
            $no = sprintf("%'.04d",$n);
        }else{
            $no = "0001";
        }

        $dat_="RQS";
        $invoice = $dat_.date('ymd').$no;
        return $invoice;
    }

    function kode_limbah($getzat){
        date_default_timezone_set('Asia/Jakarta');
        $dateFrmt = date('ymd');
        $sql = "SELECT MAX(SUBSTRING(kode_nama_limbah,17,4)) AS kode_id_limbah
                FROM tbl_limbah_bkimia WHERE SUBSTRING(kode_nama_limbah,8,6) = '".$dateFrmt."'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->kode_id_limbah) + 1;
            $no = sprintf("%'.04d",$n);
        }else{
            $no = "0001";
        }
        switch ($getzat) {
            case 1:
                $zat = "I";
                break;
            case 2:
                $zat = "s";
                break;
        }
        $dat_="TPS-B3/";
        $hasilkode = $dat_.date('ymd').'/'.$zat.'/'.$no;
        return $hasilkode;
        // TPS-B3/230906/I/0001
    }

    function getTableRequest(){
        $sql = "
            SELECT DISTINCT
                tbl_request_bkimia.nota_bkimia,
                tbl_m_bkimia.nama_bkimia,
                tbl_request_bkimia.nama_mk,
                tbl_request_bkimia.nim_request,
                tbl_request_bkimia.nama_request,
                tbl_request_bkimia.nama_labs,
                tbl_request_bkimia.volume_bkimia,
                tbl_request_bkimia.tanggal_digunakan,
                tbl_request_bkimia.tanggal_request,
                tbl_request_bkimia.status_request,
                tbl_bkimia_detail.lokasi_simpan_bkimia,
                jenis_bkimia.nama_jenis AS sifat_bkimia,
                kategori_bkimia.nama_jenis AS kategori_bkimia,
                keterangan_bkimia.nama_jenis AS keterangan_bkimia,
                tbl_m_bkimia.deskripsi_bkimia
            FROM tbl_request_bkimia
            JOIN tbl_m_bkimia ON tbl_request_bkimia.kode_bkimia = tbl_m_bkimia.kode_bkimia
            LEFT JOIN tbl_bkimia_detail ON tbl_request_bkimia.kode_bkimia = tbl_bkimia_detail.kode_bkimia
            LEFT JOIN jenis_bkimia ON tbl_bkimia_detail.jenis_bkimia = jenis_bkimia.jenis_id AND jenis_bkimia.kelompok_bkimia = 1
            LEFT JOIN jenis_bkimia AS kategori_bkimia ON tbl_bkimia_detail.kategori_bkimia = kategori_bkimia.jenis_id AND kategori_bkimia.kelompok_bkimia = 2
            LEFT JOIN jenis_bkimia AS keterangan_bkimia ON tbl_bkimia_detail.keterangan_bkimia = keterangan_bkimia.jenis_id AND keterangan_bkimia.kelompok_bkimia = 3
            ORDER BY tbl_request_bkimia.tanggal_request DESC;
                    ";
         $query = $this->db->query($sql);
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    function getTableRequestDetails($request){
        $sql = "
            SELECT DISTINCT
                tbl_request_bkimia.nota_bkimia,
                tbl_m_bkimia.nama_bkimia,
                tbl_request_bkimia.nama_mk,
                tbl_request_bkimia.nim_request,
                tbl_request_bkimia.nama_request,
                tbl_request_bkimia.nama_labs,
                tbl_request_bkimia.volume_bkimia,
                tbl_request_bkimia.tanggal_digunakan,
                tbl_request_bkimia.tanggal_request,
                tbl_request_bkimia.status_request,
                tbl_request_bkimia.nohp_request,
                tbl_bkimia_detail.lokasi_simpan_bkimia,
                jenis_bkimia.nama_jenis AS sifat_bkimia,
                kategori_bkimia.nama_jenis AS kategori_bkimia,
                keterangan_bkimia.nama_jenis AS keterangan_bkimia,
                tbl_m_bkimia.deskripsi_bkimia
            FROM tbl_request_bkimia
            JOIN tbl_m_bkimia ON tbl_request_bkimia.kode_bkimia = tbl_m_bkimia.kode_bkimia
            LEFT JOIN tbl_bkimia_detail ON tbl_request_bkimia.kode_bkimia = tbl_bkimia_detail.kode_bkimia
            LEFT JOIN jenis_bkimia ON tbl_bkimia_detail.jenis_bkimia = jenis_bkimia.jenis_id AND jenis_bkimia.kelompok_bkimia = 1
            LEFT JOIN jenis_bkimia AS kategori_bkimia ON tbl_bkimia_detail.kategori_bkimia = kategori_bkimia.jenis_id AND kategori_bkimia.kelompok_bkimia = 2
            LEFT JOIN jenis_bkimia AS keterangan_bkimia ON tbl_bkimia_detail.keterangan_bkimia = keterangan_bkimia.jenis_id AND keterangan_bkimia.kelompok_bkimia = 3
            WHERE tbl_request_bkimia.nota_bkimia = '".$request."'
                    ";
         $query = $this->db->query($sql);
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    function getTableBkimiaDistinct(){
        $sql = "
            SELECT DISTINCT
            tbl_m_bkimia.kode_bkimia,
            tbl_m_bkimia.nama_bkimia,
            (select nama_jenis FROM jenis_bkimia WHERE jenis_bkimia.jenis_id = tbl_bkimia_detail.jenis_bkimia AND jenis_bkimia.kelompok_bkimia = 1) AS sifat_bkimia,
            (select nama_jenis FROM jenis_bkimia WHERE jenis_bkimia.jenis_id = tbl_bkimia_detail.kategori_bkimia AND jenis_bkimia.kelompok_bkimia = 2) AS kategori_bkimia,
            (select nama_jenis FROM jenis_bkimia WHERE jenis_bkimia.jenis_id = tbl_bkimia_detail.keterangan_bkimia AND jenis_bkimia.kelompok_bkimia = 3) AS keterangan_bkimia,
            (select nama_jenis FROM jenis_bkimia WHERE jenis_bkimia.jenis_id = tbl_bkimia_detail.status_bkimia AND jenis_bkimia.kelompok_bkimia = 4) AS statuskimia
            FROM tbl_bkimia_detail
            LEFT JOIN tbl_m_bkimia ON tbl_bkimia_detail.kode_bkimia = tbl_m_bkimia.kode_bkimia
        ";
         $query = $this->db->query($sql);
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    public function getDataGrafik() {
        $query = $this->db->query('
            SELECT
                tbl_m_bkimia.nama_bkimia,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 1 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_jan,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 2 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_feb,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 3 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_mar,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 4 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_apr,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 5 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_mei,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 6 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_jun,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 7 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_jul,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 8 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_agu,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 9 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_sep,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 10 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_okt,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 11 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_nov,
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 12 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) AS volume_bkimia_des,
                YEAR(CURRENT_DATE()) AS tahun
            FROM tbl_m_bkimia
            LEFT JOIN tbl_bkimia_detail ON tbl_m_bkimia.kode_bkimia = tbl_bkimia_detail.kode_bkimia AND year(tbl_bkimia_detail.tanggal_input) = YEAR(CURRENT_DATE())
            GROUP BY tbl_m_bkimia.nama_bkimia
            ORDER BY (
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 1 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 2 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 3 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 4 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 5 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 6 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 7 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 8 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 9 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 10 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 11 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_bkimia_detail.tanggal_input) = 12 THEN tbl_bkimia_detail.volume_bkimia ELSE 0 END)
            ) DESC LIMIT 5;
        ');

        return $query->result_array();
    }

    public function getDataGrafikREQ()
    {
        $query = $this->db->query('
            SELECT
                tbl_m_bkimia.nama_bkimia,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 1 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_jan,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 2 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_feb,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 3 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_mar,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 4 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_apr,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 5 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_mei,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 6 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_jun,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 7 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_jul,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 8 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_agu,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 9 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_sep,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 10 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_okt,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 11 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_nov,
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 12 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) AS volume_bkimia_des,
                YEAR(CURRENT_DATE()) AS tahun
            FROM tbl_m_bkimia
            LEFT JOIN tbl_request_bkimia ON tbl_m_bkimia.kode_bkimia = tbl_request_bkimia.kode_bkimia AND year(tbl_request_bkimia.tanggal_request) = YEAR(CURRENT_DATE())
            GROUP BY tbl_m_bkimia.nama_bkimia
            ORDER BY (
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 1 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 2 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 3 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 4 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 5 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 6 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 7 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 8 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 9 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 10 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 11 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END) +
                SUM(CASE WHEN month(tbl_request_bkimia.tanggal_request) = 12 THEN tbl_request_bkimia.volume_bkimia ELSE 0 END)
            ) DESC LIMIT 5;
        ');
        return $query->result_array();
    }

    public function getDataGrafikFrontEnd() {
        $query = $this->db->query('
        SELECT
            mb.nama_bkimia,
            YEAR(bd.tanggal_input) AS tahun,
            MONTHNAME(bd.tanggal_input) AS bulan,
            SUM(bd.volume_bkimia) AS volume_bkimia_terkumpul
        FROM tbl_m_bkimia mb
        JOIN tbl_bkimia_detail bd ON bd.kode_bkimia = mb.kode_bkimia
        GROUP BY mb.nama_bkimia, YEAR(bd.tanggal_input), MONTHNAME(bd.tanggal_input)
        ORDER BY mb.nama_bkimia, tahun, bulan;
        ');

        return $query->result_array();
    }

    function masuk($u,$p){
        $sql = "SELECT tbl_user.*,tbl_role_user.keterangan AS keterangan_ha FROM tbl_user 
            JOIN tbl_role_user ON tbl_user.hak_akses = tbl_role_user.hak_akses
            WHERE tbl_user.username_u ='".$u."' AND tbl_user.password_p='".$p."'";
         $query = $this->db->query($sql);
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    function getTable($table,$kolom){
        $sql = "
            SELECT ".$kolom." FROM ".$table."
        ";
         $query = $this->db->query($sql);
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    function getTableWhere($table,$kolom,$set,$val_set){
        $sql = "
            SELECT ".$kolom." FROM ".$table." WHERE ".$set." = '".$val_set."'
        ";
         $query = $this->db->query($sql);
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    function getTableWhereCondition($table,$kolom,$set,$val_set){
        $sql = "
            SELECT ".$kolom." FROM ".$table." WHERE ".$set." ".$val_set."
        ";
         $query = $this->db->query($sql);
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    function getTableWhereCondition2($table,$kolom,$set,$val_set,$and_set,$id_set){
        $sql = "
            SELECT ".$kolom." FROM ".$table." WHERE ".$set." ".$val_set." AND ".$and_set." = '".$id_set."'
        ";
         $query = $this->db->query($sql);
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    function getTableLeftJoin($kolom,$table1,$table2,$join){
        $this->db->select($kolom);
        $this->db->from($table1);
        $this->db->join($table2, $join, 'LEFT');
        $query = $this->db->get();
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    function getTableLeftJoinWhere($kolom1,$kolom2,$table1,$table2,$join,$id){
        $this->db->select($kolom1);
        $this->db->from($table1);
        $this->db->join($table2, $join, 'LEFT');
        $this->db->where($kolom2,$id);
        $query = $this->db->get();
         if($query->num_rows() > 0)
         {
             return $query->result_array();
         }
        else {
           return null;
        }
    }

    function insertData($tabel,$data)
    {
        $this->db->insert($tabel,$data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE; 
    }

    function insertDataSet($tabel,$data, $setUUID)
    {
        $this->db->set($setUUID, 'UUID()', FALSE);
        $this->db->insert($tabel,$data);
    }

    function insertDataDoubleSet($tabel,$data,$set_satu,$set_dua)
    {
        $this->db->set($set_satu, 'UUID()', FALSE);
        $this->db->set($set_dua, 'UUID()', FALSE);
        $this->db->insert($tabel,$data);
    }

    function updateData($tabel,$data,$id,$kolom){
        $this->db->set($data);
        $this->db->where($kolom,$id);
        $this->db->update($tabel);
    }

    function updateMultipleData($tabel,$data,$id1,$kolom1,$id2,$kolom2){
        $this->db->set($data);
        $this->db->where($kolom1,$id1);
        $this->db->where($kolom2,$id2);
        $this->db->update($tabel);
    }

    function deleteData($tabel,$id,$kolom){
        $this->db->where($kolom, $id);
        $this->db->delete($tabel);
    }

    function multi_deleteData($tabel,$id1,$kolom1,$id2,$kolom2){
        $this->db->where($kolom1, $id1);
        $this->db->where($kolom2, $id2);
        $this->db->delete($tabel);  
    }
// =================== >>>>>>>>>>>>>>>> Query Untuk Metode <<<<<<<<<<<<<<<< ===================
     function deleteall($tabel) {
        $sql = "TRUNCATE  $tabel";
        $this->db->query($sql);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

    function delete_dum($tabel,$tgl) {
        $this->db->where('tanggal', $tahun);
        $this->db->delete($tabel);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

    function get_all($tabel,$urut="desc") {
        $this->db->from($tabel);
         $this->db->order_by("kriteria_id", $urut); 
        $query = $this->db->get(); //cek apakah ada ba 

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
}
?>