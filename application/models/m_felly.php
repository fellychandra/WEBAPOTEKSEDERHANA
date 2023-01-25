<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class m_felly extends CI_Model{

        //kategori
        public function tampildatakategori(){
            return $this->db->get('kategoriobat')->result();
        }

        public function insertdatakategori($data){
            $this->db->insert('kategoriobat',$data);
        }

        public function editkategori($data,$id)
        {
            $this->db->where('id_kategori',$id);
            $this->db->update('kategoriobat',$data);
        }

        public function getkategoridetail($id)
        {
            $this->db->where('id_kategori',$id);
            $query = $this->db->get('kategoriobat');
            return $query->row();
        }
        public function hapuskategori($id)
        {
            $this->db->where('id_kategori',$id);
            $this->db->delete('kategoriobat');
        }


        //satuan
        public function tampildatasatuan(){
            return $this->db->get('satuanobat')->result();
        }

        public function insertdatasatuan($data){
            $this->db->insert('satuanobat',$data);
        }

        public function editsatuan($data,$id)
        {
            $this->db->where('id_satuan',$id);
            $this->db->update('satuanobat',$data);
        }

        public function getsatuandetail($id)
        {
            $this->db->where('id_satuan',$id);
            $query = $this->db->get('satuanobat');
            return $query->row();
        }
        public function hapussatuan($id)
        {
            $this->db->where('id_satuan',$id);
            $this->db->delete('satuanobat');
        }


        //obat
        public function tampildataobat(){

            // $this->db->order_by('id_obat', 'ASC');
            // return $this->db->from('obat')
            //   ->join('kategoriobat', 'kategoriobat.id_kategori=obat.id_kategori')
            //   ->join('satuanobat','satuanobat.id_satuan=obat.id_satuan')
            //   ->get()
            //   ->result();
            $sql="SELECT o.id_obat, o.nama_obat, k.kategori_obat, s.satuan_obat, o.stok_obat, COALESCE(jual.sisa,0)  as sisa  from
            (SELECT obat.id_obat,(obat.stok_obat - terserah.jumlahjual) as sisa  from obat,(SELECT id_obat,nama_obat, jumlahjual FROM obat LEFT JOIN
            (SELECT id_obat AS obat, SUM(jumlah_jual) AS jumlahjual FROM transaksi 
            GROUP BY id_obat)pnj ON(obat.id_obat=pnj.obat))terserah WHERE obat.id_obat=terserah.id_obat)jual, obat o , kategoriobat k, satuanobat s
            where o.id_kategori=k.id_kategori and o.id_satuan=s.id_satuan and o.id_obat=jual.id_obat order by o.id_obat ASC";
             return $this->db->query($sql)->result();

        }
        public function insertdataobat($data){
            $this->db->insert('obat',$data);
        }
        public function editobat($data,$id){
            $this->db->where('id_obat',$id);
            $this->db->update('obat',$data);
        }
        public function getobatdetail($id)
        {
            $this->db->where('id_obat',$id);
            $query = $this->db->get('obat');
            return $query->row();
        }
        public function hapusobat($id)
        {
            $this->db->where('id_obat',$id);
            $this->db->delete('obat');
        }

        //transaksi
        public function tampildatatransaksi(){

            $this->db->order_by('id_transaksi', 'ASC');
            return $this->db->from('transaksi')
              ->join('obat', 'obat.id_obat=transaksi.id_obat')
              ->get()
              ->result();
        }
        public function insertdatatransaksi($data){
            $this->db->insert('transaksi',$data);
        }
        public function edittransaksi($data,$id){
            $this->db->where('id_transaksi',$id);
            $this->db->update('transaksi',$data);
        }
        public function gettransaksidetail($id)
        {
            $this->db->where('id_transaksi',$id);
            $query = $this->db->get('transaksi');
            return $query->row();
        }
        public function hapustransaksi($id)
        {
            $this->db->where('id_transaksi',$id);
            $this->db->delete('transaksi');
        }

        

        //admin

        
        
        public function tampildataadmin(){
            return $this->db->get('admin')->result();
        }
        public function insertdataadmin($data){
            $this->db->insert('admin',$data);
        }
        public function editadmin($data,$id){
            $this->db->where('username',$id);
            $this->db->update('admin',$data);
        }
        public function getadmindetail($id)
        {
            $this->db->where('username',$id);
            $query = $this->db->get('admin');
            return $query->row();
        }
        public function hapusadmin($id)
        {
            $this->db->where('username',$id);
            $this->db->delete('admin');
        }

        //tampilan
        public function jumalajual()
        {
            $sql="SELECT sum(jumlah_jual) from Transaksi where tanggal_transaksi=date(now())";
            $result = $this->db->query($sql);
            return $result->row();
        }
        public function transaksisaatini()
        {
            $sql="SELECT COUNT(*) FROM transaksi WHERE tanggal_transaksi=date(now())";
            $result = $this->db->query($sql);
            return $result->row();
        }
        public function obatsaatini()
        {
            $sql="SELECT COUNT(*) FROM obat";
            $result = $this->db->query($sql);
            return $result->row();
        }
        public function grafik()
        {
            // $tahun=date("Y");
            // $sql="SELECT id,namabulan, jumlahjual FROM bulan LEFT JOIN
            // (SELECT month(tanggal_transaksi) AS bulan, SUM(jumlah_jual) AS jumlahjual FROM transaksi 
            // INNER JOIN obat ON obat.id_obat=transaksi.id_obat
            // WHERE year(tanggal_transaksi)='$tahun'
            // GROUP BY month(tanggal_transaksi))pnj ON(bulan.id=pnj.bulan)";
            $tahun=date("Y");
            $sql="SELECT id,namabulan, jumlahjual FROM bulan LEFT JOIN
            (SELECT month(tanggal_transaksi) AS bulan, SUM(jumlah_jual) AS jumlahjual FROM transaksi 
            INNER JOIN obat ON obat.id_obat=transaksi.id_obat
            WHERE year(tanggal_transaksi)='$tahun'
            GROUP BY month(tanggal_transaksi))pnj ON(bulan.id=pnj.bulan)";
            
            return $this->db->query($sql);
            // $sql="SELECT b.id, b.namabulan, sum(t.jumlah_jual) FROM bulan b, transaksi t where b.id=month(t.tanggal_transaksi) group by month(t.tanggal_Transaksi)";
            // SELECT b.id, b.namabulan, t.jumlah_jual FROM bulan b, transaksi t where t.jumlah_jual=(select sum(jumlah_jual) from transaksi)
            // select sum(jumlah_jual) from transaksi group by month(tanggal_transaksi);
            // select jumlahjual from (SELECT namabulan, jumlahjual FROM bulan LEFT JOIN
            // (SELECT month(tanggal_transaksi) AS bulan, SUM(jumlah_jual) AS jumlahjual FROM transaksi 
            // GROUP BY month(tanggal_transaksi))pnj ON(bulan.id=pnj.bulan)) as jual
        }
        public function nilai(){
            $sql="SELECT jumlahjual from (SELECT namabulan, jumlahjual FROM bulan LEFT JOIN
            (SELECT month(tanggal_transaksi) AS bulan, SUM(jumlah_jual) AS jumlahjual FROM transaksi 
            GROUP BY month(tanggal_transaksi))pnj ON(bulan.id=pnj.bulan)) as jual";
            return $this->db->query($sql);

        }



        // public function total(){
        //     $sql="SELECT id_obat,nama_obat, jumlahjual FROM obat LEFT JOIN
        //     (SELECT id_obat AS obat, SUM(jumlah_jual) AS jumlahjual FROM transaksi 
        //     GROUP BY id_obat)pnj ON(obat.id_obat=pnj.obat)";
        //     return $this->db->query($sql);
        // }
        // public function sisa(){
        //     $sql="SELECT obat.id_obat,(obat.stok_obat - terserah.jumlahjual) as sisa  from obat,(SELECT id_obat,nama_obat, jumlahjual FROM obat LEFT JOIN
        //     (SELECT id_obat AS obat, SUM(jumlah_jual) AS jumlahjual FROM transaksi 
        //     GROUP BY id_obat)pnj ON(obat.id_obat=pnj.obat))terserah WHERE obat.id_obat=terserah.id_obat";
            

            // $sql="SELECT sisa from (SELECT obat.id_obat, (obat.stok_obat - terserah.jumlahjual) as sisa  from obat,(SELECT id_obat,nama_obat, jumlahjual FROM obat LEFT JOIN
            // (SELECT id_obat AS obat, SUM(jumlah_jual) AS jumlahjual FROM transaksi 
            // GROUP BY id_obat)pnj ON(obat.id_obat=pnj.obat))terserah WHERE obat.id_obat=terserah.id_obat)  AS JUAL";
            
            // return $this->db->query($sql)->result();


// SELECT o.id_obat, o.nama_obat, k.kategori_obat, s.satuan_obat, o.stok_obat, jual.sisa from
// (SELECT obat.id_obat,(obat.stok_obat - terserah.jumlahjual) as sisa  from obat,(SELECT id_obat,nama_obat, jumlahjual FROM obat LEFT JOIN
// (SELECT id_obat AS obat, SUM(jumlah_jual) AS jumlahjual FROM transaksi 
// GROUP BY id_obat)pnj ON(obat.id_obat=pnj.obat))terserah WHERE obat.id_obat=terserah.id_obat)jual, obat o , kategoriobat k, satuanobat s
// where o.id_kategori=k.id_kategori and o.id_satuan=s.id_satuan and o.id_obat=jual.id_obat
            
        //}

    }
?>