








<?php
$servername = "localhost";
$username = "root";
$password = "@DavaosurDB2023";
$dbname = "db_transfer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn = mysqli_connect("localhost","root","@DavaosurDB2023","db_transfer");
$sql = "SELECT * FROM memberclient WHERE trackid='{$_POST['trackid']}'";
$result = mysqli_query($conn,$sql);


require('fpdf.php');

class MyPDF extends FPDF {
   
	function Header(){

       
      
	
    $this->Image('logo2.PNG',30,1,150,0);
    $this->SetFont('Times','B',18);
    $this->Cell(0,70,'___________________________________________________________',0,0,'C');
 
    $this->Ln();
                
        $this->SetFont('Times','B',12);
        $this->Cell(60,-55,'Office of the Division Records',0,0,'C');
        $this->Ln();
        
       
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 55, date("d-m-Y "), 0, 0, 'R');


        $this->Image('history.png',73,60,60,0);
        
        $this->Ln();

        // $this->Ln();	
        // $this->Ln();	
       
        	
       
		
        

	}

   


// Page footer
function Footer()
{
	
	$this->Image('STAMP.png',10,250,60,0);
	
   // $this->Image('sds.jpg',120,235,80,0);
		$this->Image('logo4.png',120,250,60,0);
		$this->SetFont('Arial','B',12);
$this->Cell(195,190,'',0,0,'C');
$this->SetFont('Arial','',12);
$this->Cell(-195,200,'',0,0,'C');	
	

	
	
	

	
	
$this->Image('logo3.png',25,270,160,0);
	//$this->SetFont('Times','B',10);
  //  $this->Cell(110,320,'Address: Northern Paligue, Padada, Davao del Sur',0,0,'C');
//	$this->Cell(-132,330,'Website: www.depeddavaodelsur.ph',0,0,'C');
	
	
//	$this->Cell(152,340,'Email Address: depeddavaodelsur@outlook.com',0,0,'C');
	//$this->Ln();
	
	
}
	
	
	
	













}

$pdf = new MyPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 12); // Font for table headers
$pdf->SetFont ('Arial', '', 8); // Font for table content

$pdf->Cell(28, 8, 'Transaction ID', 1, 0,  'C');
$pdf->Cell(30, 8, 'Sender/Client', 1, 0, 'C');
$pdf->Cell(45, 8, 'Transaction/Description', 1, 0, 'C');
$pdf->Cell(28, 8, 'Receiver', 1, 0, 'C');
$pdf->Cell(35, 8, 'Date/Time', 1, 0, 'C');
$pdf->Cell(26, 8, 'Remarks', 1, 1, 'C');


require'conn.php';

$query=mysqli_query($conn, "SELECT * FROM `memberclient` WHERE trackid='{$_POST['trackid']}'  ") or die(mysqli_error());
$h=5;
while($rows=mysqli_fetch_array($query)){

   
    $pdf->Cell(28, $h, $rows['trackid'], 1, 0, 'C');
    $y= $pdf->GetY();
    

    $pdf->MultiCell(30, $h, $rows['firstname'], 1, 'C');
    $y1= $pdf->GetY();
    $pdf->SetY($y);
    $pdf->Cell(58,$h,'');
    $pdf->MultiCell(45, $h, $rows['lastname'], 1, 'C');
     $y4= $pdf->GetY();
    // $pdf->SetY($y);
    $pdf->Cell(103,$h,'');
    $pdf->MultiCell(28, $h, $rows['section'], 1,'C');
    
    $y2= $pdf->GetY();
    $pdf->SetY($y);
    $pdf->Cell(131,$h,'');

    
    $pdf->Cell(35, $h, $rows['date_created'], 1, 0, 'C');

  

    
    $pdf->MultiCell(26, $h, $rows['address'], 1, 'C');
   
    $pdf->SetY($y1+0);
    
   
  
       
						}
					


$conn->close();

$pdf->Output('output.pdf', 'F');

$pdf->Output();

?>