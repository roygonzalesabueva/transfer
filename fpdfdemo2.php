



<?php
require ('fpdf.php');
class PDF extends FPDF{
	
	
	
	
	function Header(){
	 // Logo
    $this->Image('logo2.png',37,6,'C');
    $this->Line(10,34,199,34); //top
    $this->Ln(30);
		
		
		$this->SetFont('Arial','B',12);
$this->Cell(195,4,'REGISTRY OF QUALIFIED APPLICANTS',0,0,'C');
$this->Ln();
$this->SetFont('Times','B',10);
$this->Cell(195,3,'SENIOR HIGH SCHOOL',0,0,'C');
$this->Ln();
		
$this->SetFont('Times','B',10);
$this->Cell(195,4,'S.Y. 2021-2022',0,0,'C');
$this->Ln();	

$this->SetFont('Times','B',10);
$this->Cell(195,4,'Pursuant of to Deped  Order No.3, s.2016',0,0,'C');
$this->Ln(12);	
		
		
		
		
		
		
		
		$this->SetFont('Arial','B',10);
		
		$this->Cell(40,10,'Applicant Profile',0,0,'C');
		$this->Cell(40,10,'Education (15)',0,0,'C');
		$this->Cell(40,10,'Experience (15)',0,0,'C');
		$this->Cell(40,10,'Specialized Traning (15)',0,0,'C');
		$this->Cell(40,10,'Interview (15)',0,1);
		$y = $this->GetY(); //next to top line
		
		$this->Line(10,62,199,62); //top
		$this->Line(10,62,10,200);//left
		$this->Line(199,62,199,200);//right
		$this->Line(10,200,199,200);//bottom
		$this->Line(10,$y,199,$y);//next to top line
		$this->Line(50,62,50,200); //vertical line
		$this->Line(90,62,90,200);// next vertical line
		$this->Line(130,62,130,200);// next vertical
		$this->Line(170,62,170,200);// next vertical
	}
	
	
	
	
	
	
// Page footer
function Footer()
{
	
	
	
	
		$this->SetFont('Arial','B',8);
$this->Cell(40,150,'DIVISION SELECTION COMMITTEE',0,0);

	
	
	
		$this->SetFont('Arial','B',8);
$this->Cell(20,170,'Education Program Supervisor',0,0);
$this->Cell(100,270,'Assisstant Schools Division Superintendent',0,0,'C');	
	

	
	
	
	
	
	
	$this->Image('logo3.png',10,270,'C');
	$this->SetFont('Times','B',10);
	$this->Cell(10,285,'Website: http://depeddavsurhr.com',0,0,'C');
	
	$this->SetFont('Times','B',10);
	$this->Cell(-10,295,'Email: depeddavsur@outlook.com',0,0,'C');
	$this->Ln();
	
	
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'',0,0,'C');
}
	
	
	
	
	
	
	
	
	
	
	
	
	
}

$pdf = new PDF();
$pdf->AddPage();

$pdf->SetFont('Arial','',10);
$con = mysqli_connect("localhost","root","","db_transfer");
$sql = "SELECT * FROM member1 where  trackid='{$_POST['trackid']}'";
$result = mysqli_query($con,$sql);
$h=5;

while($rows=mysqli_fetch_array($result)){
$pdf->Cell(40,$h,$rows['mem_id'],0,0,'C');
$pdf->Cell(40,$h,$rows['date_created'],0,0,'C');	
$pdf->Cell(40,$h,$rows['firstname'],0,0,'C');


$y=$pdf->GetY();
$pdf->MultiCell(60,$h,$rows['lastname'],0,'L');
$y1=$pdf->GetY();
$pdf->SetY($y);
$pdf->Cell(170,$h,'');
$pdf->Cell(10,$h,$rows['section'],0,1);
$pdf->Line(10,$y1+2,199,$y1+2);

$pdf->SetY($y1+5);






}








    
$conn->close();

$pdf->Output('output.pdf', 'F');



$pdf->Output();
?>