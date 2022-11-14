<?php
    require('fpdf.php');

    session_start();
    if(!isset($_SESSION["username"])){
        // echo "Anda harus login dulu <br><a href='login.php'>Klik Disini</a>";
        header("Location:index.php");
        exit;
    }

    
    
    $id=$_SESSION["id"];
    $nama=$_SESSION["nama"];
    $username=$_SESSION["username"];
    $password=$_SESSION["password"];


    $db = new PDO('mysql:host=localhost;dbname=panorama', 'root', '');

    
    // $pdf = new FPDF();
    // $pdf->AddPage();
    // $pdf->SetFont('Arial', 'B', 18);
    // $pdf->Cell(100,20,"Panorama Cafe's Invoice", 1, 0, 'C');
    // $pdf->output()
    class myPDF extends FPDF{
        function header(){
            $this -> SetFont('Arial', 'B', 16);
            $this -> Cell(276, 5, "Panorama Cafe's Invoice", 0, 0, 'C');
            $this -> Ln();
            $this -> SetFont('Times', '', 12);
            $this -> Cell(276, 5, "Jl. H. Jahrah, Sungai Keledang, Kec. Samarinda Seberang", 0, 0, 'C');
            $this -> Ln(20);
        }
        function footer(){
            $this -> setY(-15);
            $this -> SetFont('Arial', '', 8);
            $this -> Cell(0, 10, 'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');   
        }
        function headerTable(){
            $this -> SetFont('Times', 'B', 12);
            $this -> Cell(35, 10, 'ID', 1, 0, 'C');
            $this -> Cell(60, 10, 'Fullname', 1, 0, 'C');
            $this -> Cell(60, 10, 'Coffee', 1, 0, 'C');
            $this -> Cell(60, 10, 'Harga', 1, 0, 'C');
            $this -> Cell(60, 10, 'Status', 1, 0, 'C');
            $this -> Ln();
        }
        function show($db){
            $this -> SetFont('Times', '', 12);
            // mysqli_query($db, "ALTER TABLE daftar_pesanan auto_increment = 1");
            $stmt = $db->query('SELECT * FROM daftar_pesanan');
            while($data = $stmt->fetch(PDO::FETCH_OBJ)){
                $this -> Cell(35, 10, $data->id, 1, 0, 'C');
                $this -> Cell(60, 10, $data->fullname, 1, 0, 'L');
                $this -> Cell(60, 10, $data->coffee, 1, 0, 'L');
                $this -> Cell(60, 10, $data->harga, 1, 0, 'L');
                $this -> Cell(60, 10, $data->status, 1, 0, 'L');
                $this -> Ln();  
            }
        }
    }


$pdf = new myPDF();
$pdf -> AliasNbPages();
$pdf -> AddPage('L', 'A4', 0);
$pdf -> headerTable();
$pdf -> show($db);
$pdf -> Output();
?>  