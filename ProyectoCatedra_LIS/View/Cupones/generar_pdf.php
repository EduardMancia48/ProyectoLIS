<?php

defined('BASEPATH') OR exit('Acceso no autorizado');

require_once('C:\wamp64\www\ProyectoCatedra_LIS\TCPDF\tcpdf.php'); // Incluye la clase TCPDF

// Crear un nuevo objeto TCPDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Establecer el título del documento
$pdf->SetTitle('Confirmación de Compra');

// Agregar una página
$pdf->AddPage();

// Establecer la fuente y tamaño del texto
$pdf->SetFont('helvetica', '', 12);

// Agregar el contenido al PDF
$pdf->Cell(0, 10, 'Código de cupón: ' . $cupon['cod_cupon'], 0, 1);
$pdf->Cell(0, 10, 'Título de la oferta: ' . $cupon['titulo_oferta'], 0, 1);
$pdf->Cell(0, 10, 'Precio regular $: ' . $cupon['precio_regular'], 0, 1);
$pdf->Cell(0, 10, 'Precio oferta $: ' . $cupon['precio_oferta'], 0, 1);
$pdf->Cell(0, 10, 'Su cupón sobre: ' . $cupon['descripcion'], 0, 1);
$pdf->Cell(0, 10, 'Finaliza: ' . $cupon['fecha_fin'], 0, 1);

// Generar el PDF en el navegador para descargar
$pdf->Output('confirmacion_compra.pdf', 'D');
?>