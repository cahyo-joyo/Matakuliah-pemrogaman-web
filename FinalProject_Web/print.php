
<?php include 'config/config.php';
$id=$_SESSION['id'];
$result=tampilpendaftar($id);
?>

            <h3>Bukti Pendaftaran MI Matholiul Anwar</h3>
       
                <table width=90%>
                    <?php while ($row=mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td>No Formulir : <?php echo preg_replace('/[^a-zA-Z0-9 ]/','',$row['tgl_daftar']."000".$row['id']);?> </td>
                    </tr>
                    <tr>
                        <td>Kepada : <?php echo strtoupper($row['nama_lengkap']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Pengisian Formulir : <?php echo $row['tgl_daftar'] ?>
                        </td>
                    </tr>
                </table>
<br>
                    <table >

                        <thead>
                            <tr>
                                <th>Biaya</th>
                                <th style="width:25%;">Nominal (Rp.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>Formulir</strong></div>
                                </td>
                                <td class="angka" style="border:0">
                                    50.000 </td>
                            </tr>

                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>Seragam</strong></div>
                                </td>
                                <td class="angka" style="border:0">
                                    200.000 </td>
                            </tr>

                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>Bangunan</strong></div>
                                </td>
                                <td class="angka" style="border:0">
                                    1.000.000 </td>
                            </tr>
                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>SSP (Sumbangan Pembinaan Pendidikan) 1</strong></div>
                                </td>
                                <td class="angka ssp" style="border:0">
                                    150.000 </td>
                            </tr>

                            <tr id="total-bea">
                                <td>TOTAL BIAYA PENDAFTARAN:</td>
                                <td> 1.400.000</td>
                            </tr>
                            <tr>
                                <td>Status Pembayaran</td>
                                <?php if($_SESSION['statusbayar']==1){ ?>
                                <td style="color: green; font-style: italic; text-decoration: underline;"> LUNAS</td>
                                <?php }else {?>
                                <td style="color: red; font-style: italic; text-decoration: underline;">BELUM LUNAS</td> 
                                <?php }?>
                            </tr>
                        </tbody>                        
                    </table>
                    <p>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
                    <p>TTD</p>
                    <br>
                    <p>Panitia PPDB MIMA</p>
                    <br>
                  <script type="text/javascript">
                        window.print();
                    </script>

                
<?php } ?>