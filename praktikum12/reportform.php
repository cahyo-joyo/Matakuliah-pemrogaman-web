<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from formpeserta");
$html = '<center><h3>Daftar Siswa Yang Telah Registrasi</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Jenis Kelamis</th>
 <th>NISN</th>
 <th>NIK</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>No Akta Lahir</th>
 <th>Agama</th>
 <th>Kewarganegaraan</th>
 <th>WNA</th>
 <th>Berkebutuhan Khusus</th>
 <th>Alamat Tinggal</th>
 <th>RT</th>
 <th>RW</th>
 <th>Dusun</th>
 <th>Kelurahan</th>
 <th>Kecamatan</th>
 <th>Kode Pos</th>
 <th>Lintang</th>
 <th>Bujur</th>
 <th>Tempat Tinggal</th>
 <th>Moda Transportasi</th>
 <th>No KKS</th>
 <th>Anak Ke-</th>
 <th>Penerima KPS</th>
 <th>No KPS</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['kelamin']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['tempatlhr']."</td>
 <td>".$row['tanggallhr']."</td>
 <td>".$row['akta']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['kewarganegaraan']."</td>
 <td>".$row['wna']."</td>
 <td>".$row['berkebutuhan']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['dusun']."</td>
 <td>".$row['kecamatan']."</td>
 <td>".$row['kelurahan']."</td>
 <td>".$row['kodepos']."</td>
 <td>".$row['lintang']."</td>
 <td>".$row['bujur']."</td>
 <td>".$row['tinggal']."</td>
 <td>".$row['transportasi']."</td>
 <td>".$row['kks']."</td>
 <td>".$row['anak']."</td>
 <td>".$row['kps']."</td>
 <td>".$row['nokps']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('B0', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('data_pendaftar.pdf');
?>