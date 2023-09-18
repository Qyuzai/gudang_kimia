 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Laporan_Bahan_Kimia_".date("Y_m_d").".xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">

      <thead>
            <tr>
              <th width="10%">No.</th>
              <th align="center">Nama Kimia </th>
              <th align="center">Sifat Kimia </th>
              <th align="center">Jenis Klasifikasi B3 </th>
              <th align="center">Kategori </th>
              <th align="center">Satatus Kimia</th>
              <th align="center">Deskripsi </th>
              <th align="center">Volume Kimia </th>
              <th align="center">Lokasi Simpan </th>
              <th align="center">Harga Dibeli </th>
              <th align="center">Tanggal</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $no=1; foreach($excel as $row){
              // var_dump($row['nota_bkimia']);exit();
            ?>
            <tr>
              <td align="center"><?php echo $no;?> </td>
              <td align="center"><?php echo $row['nama_bkimia'];?> </td>
              <td align="center"><?php echo $row['sifat_bkimia'];?> </td>
              <td align="center"><?php echo $row['kategori_bkimia'];?> </td>
              <td align="center"><?php echo $row['keterangan_bkimia'];?> </td>
              <td align="center"><?php echo $row['statuskimia'];?> </td>
              <td align="center"><?php echo $row['deskripsi'];?> </td>
              <td align="center"><?php echo $row['volume_bkimia'];?> </td>
              <td align="center"><?php echo $row['lokasi_simpan_bkimia'];?> </td>
              <td align="center"><?php echo $row['harga_bkimia'];?> </td>
              <td align="center"><?php echo $row['tanggal_input'];?> </td>
            </tr>
            <?php $no++; } ?>
        </tbody>
 
 </table>