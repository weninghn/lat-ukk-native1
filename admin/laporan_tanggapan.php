<?php 
require ('../fpdf/fpdf.php');
require ('../koneksi.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Tanggapan Data Pengaduan Masyarakat');

$pdf->Cell(40, 10, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 6, 'No', 1, 0);
$pdf->Cell(35, 6, 'ID Pengaduan', 1, 0);
$pdf->Cell(40, 6, 'Tanggal Tanggapan', 1, 0);
$pdf->Cell(80, 6, 'Isi Tanggapan Pengaduan', 1, 0);
$pdf->Cell(25, 6, 'ID Petugas', 1, 1);

$pdf->SetFont('Arial', '', 10);

$no = 1;
$tampil = mysqli_query($koneksi, "SELECT * FROM tanggapan");
while($data = mysqli_fetch_array($tampil))
{
    $pdf->Cell(10, 6, $no++, 1, 0);
    $pdf->Cell(35, 6, $data['id_pengaduan'], 1, 0);
    $pdf->Cell(40, 6, $data['tgl_tanggapan'], 1, 0);
    $pdf->Cell(80, 6, $data['tanggapan'], 1, 0);
    $pdf->Cell(25, 6, $data['id_petugas'], 1, 1);
}
$pdf->Output();
?>