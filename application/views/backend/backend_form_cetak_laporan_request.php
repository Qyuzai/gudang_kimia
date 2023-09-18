 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Laporan_Request_Kimia_".date("Y_m_d").".xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">

      <thead>
            <tr>
              <th width="10%">No. Nota</th>
              <th align="center">Nama Kimia </th>
              <th align="center">Nama MK </th>
              <th align="center">NIM </th>
              <th align="center">Nama </th>
              <th align="center">Nama Labs </th>
              <th align="center">No. Tlpn</th>
              <th align="center">Volume </th>
              <th align="center">Tanggal Request</th>
              <th align="center">Tanggal Digunakan</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $no=1; foreach($excel as $row){
              // var_dump($row['nota_bkimia']);exit();
            ?>
            <tr>
              <td align="center"><?php echo $row['nota_bkimia'];?> </td>
              <td align="center"><?php echo $row['nama_bkimia'];?> </td>
              <td align="center"><?php echo $row['nama_mk'];?> </td>
              <td align="center"><?php echo $row['nim_request'];?> </td>
              <td align="center"><?php echo $row['nama_request'];?> </td>
              <td align="center"><?php echo $row['nama_labs'];?> </td>
              <td align="center"><?php echo $row['nohp_request'];?> </td>
              <td align="center"><?php echo $row['volume_bkimia'];?> </td>
              <td align="center"><?php echo $row['tanggal_request'];?> </td>
              <td align="center"><?php echo $row['tanggal_digunakan'];?> </td>
            </tr>
            <?php $no++; } ?>
        </tbody>
 
 </table>