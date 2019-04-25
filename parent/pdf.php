<?php  
require('C:\xampp\htdocs\fpdf\fpdf.php');
include_once('C:\xampp\htdocs\fpdf\font\helveticab.php');
set_include_path('C:\xampp\php\pear');
$db=new PDO('mysql:localhost=localhost;dbname=portal','root','');
class PDF extends FPDF
{
function header()
{
$this->SetFont('Times-Roman','B',16);
$this->Cell(276,5,'STUDENT LEAVE  DETAILS',0,0,'C');
$this->Ln();
}
function footer()
{
$this->SetY(-15);
$this->SetFont('Times-Roman','B',13);
$this->Cell(0,10,'Page'.$this->PageNo(). '/{nb}',0,0,'C');
}
function headerTable()
{}
function viewTable($db)
{
$this->SetFont('Times-Roman','B',13);
$_SESSION['id']=$_GET['registerNumber'];
$id=$_SESSION['registerNumber'];
$sql = 'SELECT * from card where registerNumber=$registerNumber;
$stmt=$db->query($sql);
while($data=$stmt->fetch(PDO::FETCH_OBJ))
{
$this->Cell(40,10,'Name:',0,0,'C');
$this->Cell(40,10,$data->name,0,0,'C');
$this->Ln();

$this->Cell(40,10,'RegisterNumber:',0,0,'C');
$this->Cell(40,10,$data->registerNumber,0,0,'C');
$this->Ln();

$this->Cell(40,10,'roomno:',0,0,'C');
$this->Cell(40,10,$data->roomno,0,0,'C');
$this->Ln();

$this->Cell(40,10,'Branch:',0,0,'C');
$this->Cell(40,10,$data->branch,0,0,'C');
$this->Ln();

$this->Cell(40,10,'Year:',0,0,'C');
$this->Cell(40,10,$data->year,0,0,'C');
$this->Ln();

$this->Cell(40,10,'Place of visit:',0,0,'C');
$this->Cell(40,10,$data->placeofvisit,0,0,'C');
$this->Ln();
$this->Cell(40,10,'Reason of visit:',0,0,'C');
$this->Cell(40,10,$data->reasonofvist,0,0,'C');
$this->Ln();
$this->Cell(40,10,'Arrival date:',0,0,'C');
$this->Cell(40,10,$data->arrival,0,0,'C');
$this->Ln();
$this->Cell(40,10,'Depature:',0,0,'C');
$this->Cell(40,10,$data->depature,0,0,'C');
$this->Ln();
} }
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>
