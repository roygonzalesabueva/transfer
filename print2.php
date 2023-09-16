











<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_transfer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn = mysqli_connect("localhost","root","","db_transfer");
$sql = "SELECT * FROM applicant WHERE trackid='{$_POST['trackid']}'";
$result = mysqli_query($conn,$sql);


require('fpdf.php');

class MyPDF extends FPDF {
   
	function Header(){

       
      
	
    $this->Image('logo2.PNG',76,2,56,0);
    $this->SetFont('Times','B',18);
    $this->Cell(0,70,'___________________________________________________________',0,0,'C');
 
    $this->Ln();
                
        $this->SetFont('Times','B',12);
        $this->Cell(60,-55,'Office of the Division Records',0,0,'C');
     
        $this->Ln();
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 55, date("d-m-Y "), 0, 0, 'R');
        $this->Ln();
       
        $this->SetFont('Times','B',18);

        
      
        $this->Cell(195,20,'-----CLAIM STUB-----',0,0,'C');	
        $this->Ln();	
       
		
        
        

	}


// Page footer
function Footer()
{
	
	
	
    $this->Image('sds.jpg',65,200,80,0);
	
		$this->SetFont('Arial','B',12);
$this->Cell(195,190,'',0,0,'C');
$this->SetFont('Arial','',12);
$this->Cell(-195,200,'',0,0,'C');	
	

	
	
	
	
	
	
$this->Image('logo.png',10,278,15,0);
	$this->SetFont('Times','B',10);
    $this->Cell(110,320,'Address: Northern Paligue, Padada, Davao del Sur',0,0,'C');
	$this->Cell(-132,330,'Website: www.depeddavaodelsur.ph',0,0,'C');
	
	
	$this->Cell(152,340,'Email Address: depeddavaodelsur@outlook.com',0,0,'C');
	$this->Ln();
	
	
}
	
	
	
	













}

$pdf = new MyPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16); // Font for table headers
$pdf->SetFont('Arial', '', 10); // Font for table content

$pdf->Cell(40, 10, 'Tracking ID', 1, 0, 'C');
$pdf->Cell(60, 10, 'Date Created', 1, 0, 'C');
$pdf->Cell(40, 10, 'Full Name ', 1, 0, 'C');
$pdf->Cell(40, 10, 'Course', 1, 1, 'C');


require'conn.php';

$query=mysqli_query($conn, "SELECT * FROM `applicant` WHERE trackid='{$_POST['trackid']}'  ") or die(mysqli_error());

while($rows=mysqli_fetch_array($query)){

    
    $pdf->Cell(40, 10, $rows['trackid'], 1, 0, 'C');
    $pdf->Cell(60, 10, $rows['date_created'], 1, 0, 'C');
    $pdf->Cell(40, 10, $rows['firstname'], 1, 0, 'C');
    $pdf->Cell(40, 10, $rows['lastname'], 1, 1, 'C');
 
       
						}
					


$conn->close();

$pdf->Output('output.pdf', 'F');

$pdf->Output();

?>