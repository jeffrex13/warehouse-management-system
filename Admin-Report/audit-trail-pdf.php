<?php
    require('../fpdf183/fpdf.php');
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'warehouse_management_system');


    class PDF extends FPDF {
        function Header(){
            $this -> SetFont('Helvetica', 'B', 25);
            $this->SetTextColor(40, 181, 181);
            $this -> Cell(0, 20, 'Warehouse Management System', 0, 0, 'C');
            $this->Ln();
            $this -> SetFont('Helvetica', '', 12);
            $this->SetTextColor(40, 181, 181);
            $this -> Cell(0, 0, 'Antipolo City', 0, 0, 'C');
            $this->Ln();
            $this -> SetFont('Helvetica', 'B', 15);
            $this -> Cell(0, 10, 'Audit Trail Report', 0, 2, 'C');
            $this->Ln(5);

            $this->SetFont('Arial','B',11);
            $this->SetDrawColor(180,180,255);
            $this->Cell(25,10,'Username',1,0,'C');
            $this->Cell(30,10,'First Name',1,0,'C');
            $this->Cell(30,10,'Last Name',1,0,'C');
            $this->Cell(30,10,'Middle Name',1,0,'C');
            $this->Cell(25,10,'Time In',1,0,'C');
            $this->Cell(25,10,'Time Out',1,0,'C');
            $this->Cell(25,10,'Date',1,1,'C');
        }
        function Footer(){
            $this->Cell(190,0,'','T',1,'',true);
            
            $this->SetY(-15);
                    
            $this->SetFont('Arial','',8);
            
            $this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
            $this->Cell(-20,10,'Printed By: Admin',0,0,'C');
        }
    }

    $pdf = new PDF('P','mm','A4');

    $pdf->AliasNbPages('{pages}');

    $pdf->SetAutoPageBreak(true,15);
    $pdf->AddPage();

    $pdf->SetFont('Arial','',9);
    $pdf->SetDrawColor(180,180,255);

    $query=mysqli_query($con,"select * from tbl_audit_trail");
    while($data=mysqli_fetch_array($query)){
        $pdf->Cell(25,5,$data['username'],'LRT',0);
        $pdf->Cell(30,5,$data['firstname'],'LRT',0);
        $pdf->Cell(30,5,$data['lastname'],'LRT',0);
        $pdf->Cell(30,5,$data['middlename'],'LRT',0);
        $pdf->Cell(25,5,$data['timein'],'LRT',0);
        $pdf->Cell(25,5,$data['timeout'],'LRT',0);
        $pdf->Cell(25,5,$data['date'],'LRT',1);
    }
    $pdf->Output();
?>