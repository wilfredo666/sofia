<?php
require_once "../../modelo/conexion.php";

//consulta para extraer datos de la empresa
$stmt=Conexion::conectar()->query("SELECT nombre, nit_ruc, direccion
FROM EMPRESA");
$stmt->execute();
$empresa=$stmt->fetch();

$sql_factura=Conexion::conectar()->query("SELECT nombre, nit_ruc, direccion
FROM EMPRESA");
$sql_factura->execute();
$factura=$sql_factura->fetch();
/// Powered by Evilnapsis go to http://evilnapsis.com

include "fpdf/fpdf.php";

$pdf = new FPDF($orientation='P',$unit='mm');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);    
$textypos = 5;
$pdf->setY(5);
$pdf->setX(10);
// Agregamos los datos de la empresa
$pdf->Cell(5,$textypos,"Casa Matriz");//Nombre de la empresa
$pdf->SetFont('Arial','B',10); 
$pdf->setY(25);$pdf->setX(80);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(5,$textypos,"Factura");
$pdf->setY(30);$pdf->setX(70);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,$textypos,"(Con derecho a credito Fiscal)");
$pdf->SetFont('Arial','B',10);
$pdf->setY(35);$pdf->setX(10);
/*$pdf->Cell(5,$textypos,"DE:");*/

$pdf->SetFont('Arial','',10);    
$pdf->setY(10);$pdf->setX(10);
$pdf->Cell(5,$textypos,"No punto de venta");//Nombre de la empresa
$pdf->setY(15);$pdf->setX(10);
$pdf->Cell(5,$textypos,$empresa["NOMBRE"]);//Direccion de la empresa
$pdf->setY(20);$pdf->setX(10);
$pdf->Cell(5,$textypos,$empresa["DIRECCION"]);//Direccion de la empresa
$pdf->setY(50);$pdf->setX(10);
$pdf->Cell(5,$textypos,$empresa["NIT_RUC"]);//Telefono de la empresa
$pdf->setY(55);$pdf->setX(10);
$pdf->Cell(5,$textypos,"Nombre/Razon Social: SOFIA");//Email de la empresa

// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(30);$pdf->setX(75);
/*$pdf->Cell(5,$textypos,"PARA:");
$pdf->SetFont('Arial','',10);    
$pdf->setY(35);$pdf->setX(75);
$pdf->Cell(5,$textypos,"Nombre del cliente");
$pdf->setY(40);$pdf->setX(75);
$pdf->Cell(5,$textypos,"Direccion del cliente");
$pdf->setY(45);$pdf->setX(75);
$pdf->Cell(5,$textypos,"Telefono del cliente");
$pdf->setY(50);$pdf->setX(75);
$pdf->Cell(5,$textypos,"Email del cliente");*/

// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(5);$pdf->setX(135);
$pdf->Cell(5,$textypos,"NIT:                                 #12345");
$pdf->setY(10);$pdf->setX(135);
$pdf->Cell(5,$textypos,"FACTURA                       #12345");
$pdf->setY(15);$pdf->setX(135);
$pdf->Cell(5,$textypos,"Cod. Autorizacion          #12345");
$pdf->SetFont('Arial','',10);    
$pdf->setY(45);$pdf->setX(135);
/*$pdf->Cell(5,$textypos,"NIT: 7554422867");*/
$pdf->setY(50);$pdf->setX(135);
$pdf->Cell(5,$textypos,"NIT: 7554422867");
$pdf->setY(55);$pdf->setX(135);
$pdf->Cell(5,$textypos,"");
$pdf->setY(60);$pdf->setX(135);
$pdf->Cell(5,$textypos,"");

/// Apartir de aqui empezamos con la tabla de productos
$pdf->setY(60);$pdf->setX(135);
    $pdf->Ln();
/////////////////////////////
//// Array de Cabecera
$header = array("Cod. Producto", "Cantidad","Descripcion","Precio Uni","Descuento","ICE%","ICE ESP","Subtotal");
//// Arrar de Productos
$products = array(
	array("0010", "Producto 1",3,120,0,0),
	array("0024", "Producto 2",5,80,0,0),
	array("0001", "Producto 3",1,40,0,0),
	array("0001", "Producto 3",5,80,0,0),
	array("0001", "Producto 3",4,30,0,0),
	array("0001", "Producto 3",7,80,0,0),
);
/*$this->pdf->Image(FCPATH."Sofia.jpg",20,50,150,170);//logo para membretado*/
				/*$y=$y+25;*/
    // Column widths
    $w = array(25, 30, 20, 20, 25, 25,20,25);
    // Header
    for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C');
    $pdf->Ln();
    // Data
    $total = 0;
    foreach($products as $row)
    {
        $pdf->Cell($w[0],6,$row[0],1);
        $pdf->Cell($w[1],6,$row[1],1);
        $pdf->Cell($w[2],6,number_format($row[2]),'1',0,'R');
        $pdf->Cell($w[3],6,"$ ".number_format($row[3],2,".",","),'1',0,'R');
        $pdf->Cell($w[4],6,"$ ".number_format($row[3]*$row[2],2,".",","),'1',0,'R');
        $pdf->Cell($w[5],6,"$ ".number_format($row[3]*$row[2],2,".",","),'1',0,'R');
        $pdf->Cell($w[6],6,"$ ".number_format($row[3]*$row[2],2,".",","),'1',0,'R');
        $pdf->Cell($w[7],6,"$ ".number_format($row[3]*$row[2],2,".",","),'1',0,'R');
        $pdf->Ln();
        $total+=$row[3]*$row[2];

    }
/////////////////////////////
//// Apartir de aqui esta la tabla con los subtotales y totales
$yposdinamic = 36.4 + (count($products)*10);

$pdf->setY($yposdinamic);
$pdf->setX(210);
    $pdf->Ln();
/////////////////////////////
$header = array("", "");
$data2 = array(
	array("Subtotal",$total),
	array("Descuento", 0),
	array("Impuesto", 0),
	array("Total", $total),
);
    // Column widths
    $w2 = array(40, 40);
    // Header

    $pdf->Ln();
    // Data
    foreach($data2 as $row)
    {
$pdf->setX(120);
        $pdf->Cell($w2[0],6,$row[0],1);
        $pdf->Cell($w2[1],6,"$ ".number_format($row[1], 2, ".",","),'1',0,'R');

        $pdf->Ln();
    }
/////////////////////////////

$yposdinamic += (count($data2)*35);
$pdf->SetFont('Arial','B',7);    

$pdf->setY($yposdinamic);
$pdf->setX(5);
$pdf->Cell(5,$textypos,"ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAIS, EL USO ILICITO SERA SANCIONADO PENALMENTE DE ACUERDO A LEY");
$pdf->SetFont('Arial','',7);    

$pdf->setY($yposdinamic+10);
$pdf->setX(5);
$pdf->Cell(5,$textypos,"Ley Nro. 453: Esta prohibido importar, distribuir o comercializar productos expirados o prontos a expirar.");
$pdf->setY($yposdinamic+20);
$pdf->setX(5);
$pdf->Cell(5,$textypos,"“Este documento es una impresion de un Documento Digital emitido en una Modalidad de Facturacion en Línea”");//Powered by Evilnapsis


$pdf->output();