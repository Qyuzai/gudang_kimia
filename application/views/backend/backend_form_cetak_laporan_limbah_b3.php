 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Laporan_Limbah_B3_".date("Y_m_d").".xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">

      <thead>
            <tr>
              <th width="10%">No.</th>
              <th align="center">Kode Limbah </th>
              <th align="center">Deskripsi </th>
              <th align="center">Sifat Zat </th>
              <th align="center">Jenis Klasifikasi B3 </th>
              <th align="center">Keterangan Kimia </th>
              <th align="center">Asal Limbah</th>
              <th align="center">Volume </th>
              <th align="center">Tanggal Pengisian</th>
              <th align="center">Nama Laboran</th>
              <th align="center">Lokasi Di Simpan</th>
              <th align="center">Status Limbah</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $no=1; foreach($excel as $row){
              // var_dump($row['nota_bkimia']);exit();
            ?>
            <tr>
              <td align="center"><?php echo $no;?> </td>
              <td align="center"><?php echo $row['kode_nama_limbah'];?> </td>
              <td align="center"><?php echo $row['keterangan_limbah'];?> </td>
              <td align="center"><?php echo $row['sifat_kimia'];?> </td>
              <td align="center"><?php echo $row['jenis_klasifikasi_limbah'];?> </td>
              <td align="center"><?php echo $row['keterangan_bkimia'];?> </td>
              <td align="center"><?php echo $row['asal_limbah_lab'];?> </td>
              <td align="center"><?php echo $row['volume_limbah'];?> </td>
              <td align="center"><?php echo $row['tanggal_pengisian'];?> </td>
              <td align="center"><?php echo $row['nama_laboran'];?> </td>
              <td align="center"><?php echo $row['lokasi_simpan_limbah'];?> </td>
              <td align="center"><?php echo $row['status_lokasi'];?> </td>
            </tr>
            <?php $no++; } ?>
        </tbody>
 
 </table>