<?php
require("fpdf/fpdf.php");

require_once "../../modelo/ventaModelo.php";
require_once "../../controlador/ventaControlador.php";
$codVenta=$_GET["codVenta"]; //cod de venta FCTROLF.NUM


//datos de la empresa emisora
$stmt=Conexion::conectar()->query("SELECT nombre, nit_ruc, telefono, direccion
FROM EMPRESA");
$stmt->execute();
$empresa=$stmt->fetch();

//datos de la factura emitida
$factura=controladorVenta::ctrInfoVenta($codVenta);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->cell(100,20,utf8_decode($empresa["NOMBRE"]),0,1);
$pdf->Line(10, 25, 180, 25);
$pdf->SetFont('Arial','',10);
$pdf->cell(50,8,"NIT: ".$empresa["NIT_RUC"],0,0);
$pdf->setX(110);
$pdf->cell(50,8,"Nro. de Factura: ".$factura[0]["NFAC"],0,1);
$pdf->cell(50,8,utf8_decode("Teléfono(s): ").$empresa["TELEFONO"],0,0);
$pdf->setX(110);
$pdf->cell(80,8,utf8_decode("Fecha de emisión: ").$factura[0]["FECHA"],0,1);
$pdf->cell(50,8,"Emitido por: ".$factura[0]["USUARIO"],0,1);
$pdf->cell(150,8,utf8_decode("Dirección: ").$empresa["DIRECCION"],0,1);
$pdf->cell(50,10,"",0,1);
$pdf->cell(100,8,"Nombre: ".utf8_decode($factura[0]["NOMFACT"]),0,1);
$pdf->cell(50,8,"NIT/CI: ".$factura[0]["NITCLI"],0,1);

$pdf->SetFont('Arial','B',14);
$pdf->cell(180,20,"",0,1);
$pdf->cell(180,10,"Detalle",0,1, "C");

$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(75,98,241);
$pdf->SetTextColor(255,255,255);
$pdf->cell(100,8,utf8_decode("Descripción"),1,0,"L",true);
$pdf->cell(20,8,"Cantidad",1,0,"L",true);
$pdf->cell(20,8,"P. Unitario",1,0,"L",true);
$pdf->cell(20,8,"Descuento",1,0,"L",true);
$pdf->cell(20,8,"P. Total",1,1,"L",true);
foreach($factura as $value){

  $pdf->SetFont('Arial','',10);
  $pdf->SetTextColor(0,0,0);
  $pdf->cell(100,8,$value["CONCEPTO"],1,0);
  $pdf->cell(20,8,$value["CANTIDAD"],1,0);
  $pdf->cell(20,8,$value["PRECIO"],1,0);
  $pdf->cell(20,8,$value["DESCTO"],1,0);
  $pdf->cell(20,8,$value["TOTAL"],1,1);
}
$pdf->SetFont('Arial','B',10);
$pdf->cell(160,8,"Total(Bs.) ",1,0);
$pdf->cell(20,8,$factura[0]["MONTO"],1,0);

$pdf->Output();
?>