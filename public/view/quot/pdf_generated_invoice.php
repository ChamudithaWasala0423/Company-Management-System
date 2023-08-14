<?php require_once "main_data_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        padding: 20px;
    }
    table, th, td {
      border: 3px solid black;
      border-collapse: collapse;
      font-family:sans-serif;
      align-items: center;
    }
    </style>
<body>

<?php
include_once('../main/tcpdf/tcpdf.php');

$EMPJC_ID = $_GET['EMPJC_ID'];

$inv_mst_query = "SELECT * FROM invoices   WHERE invoice='".$EMPJC_ID ."' ";

$inv_mst_results = mysqli_query($con,$inv_mst_query );

$count = mysqli_num_rows($inv_mst_results); 

if($count > 0 ) {
    $inv_mst_data_row = mysqli_fetch_array($inv_mst_results, MYSQLI_ASSOC);
 
  

	//----- Code for generate pdf
	$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetCreator(PDF_CREATOR);  
	//$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
	$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	$pdf->SetDefaultMonospacedFont('helvetica');  
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
	$pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
	$pdf->setPrintHeader(false);  
	$pdf->setPrintFooter(false);  
	$pdf->SetAutoPageBreak(TRUE, 10);  
	$pdf->SetFont('helvetica', '', 12);  
	$pdf->AddPage();

    $content = ""; 

    $content .= '
    <style type="text/css">
	body{
        padding: 20px;
    }
    table,  th,  td{
      
      border-collapse: collapse;
      font-family:sans-serif;
      align-items: center;
    }

    table.uder_table{
      border: 1px solid #2e2e2e;
      border-collapse: collapse;
      font-family:sans-serif;
      align-items: center;
    }

    table.uder_table th{
        padding: 20px;
        background-color: #acacac;
        white-space: nowrap;        
        font-weight: normal;
        text-align: center;
        font-size: 10px;
        border: 1px solid black;
    }
    table.uder_table td{
        padding: 20px;
        color: #4a4a4a;
        white-space: nowrap;        
        font-weight: left;
        font-size: 10px;
        border: 1px solid black;
    }

    th#uder_table_th{
        width:400px;
    }

    th#uder_table_th_am{
        width:100px;
    }
	</style>    
	
	<table style="width:100%;">
      
        <tr>
            <th style="text-align: center; font-size: 20px;" colspan="2"><img src="./invoice_img/Screenshot 2023-06-21 180549.jpg"></th>
        </tr>
        <br><br>
        <tr>
            <th style="font-size: 10px;"><b><i>Account to</i></b></th>
            <th style="font-size: 10px; text-align: right;"><b><i>Date : </i></b></th>

        </tr>
        <tr>
            <th style="font-size: 10px;">
            The Chairman <br>
            Liyara Technology Group <br>
            No.67/5 <br>
            G.H.Perera Mawatha, Raththanapitiya.<br></th>
            <th style="font-size: 10px; text-align: right;"><b>Q Job file Ref #  <br> Job Ref #</b></th>
        </tr>
        <tr>
            <th style="font-size: 10px;">Dear Sir, </th>
        </tr>
        <tr>
            <th style="font-size: 10px; text-align: center;" colspan="2"><b><u>Quotation for Flex panel</u></b></th>
        </tr>
        <br>
        <tr>
            <th  style="font-size: 10px; text-align: left;" colspan="2">This is further with refer to your invitation for the branding job & site visit , we are pleased to offer our quotation for the above work,</th>
        </tr>
        <br><br>

        <table class="uder_table">
        <tr>
            <th id="uder_table_th"><b>DESCRIPTION</b></th>
            <th id="uder_table_th_am"><b>AMOUNT</b></th>
        </tr>
        <tr>
        <th colspan="2" style=" text-align: left;"><b>OPTION</b></th>
        </tr>
    
        <tr>
            <td>(01). Fabricating 88" x 48" Polycarbonate sheets with aluminium white colour beading.All inclusive of Manufacturing &
            Transportation charges.</td>
            <td style=" text-align: center;">120000.00</td>
        </tr>
        <tr>
            <th style=" text-align: left;"><b>Total</b></th>
            <th>120000.00</th>
        </tr>
        
    </table>
    <br><br>
        <tr>
            <th style="text-align: center; font-size: 20px;" colspan="2"><img src="./invoice_img/Screenshot 2023-06-22 171312.jpg"></th>
        </tr>
   
    </table>';


}


$pdf->writeHTML($content);

$datetime=date('dmY_hms');
$file_name = "JC_".$datetime.".pdf";
ob_end_clean();

if($_GET['ACTION']=='VIEW') 
{
	$pdf->Output($file_name, 'I'); // I means Inline view
} 
else if($_GET['ACTION']=='DOWNLOAD')
{
	$pdf->Output($file_name, 'D'); // D means download
}
else if($_GET['ACTION']=='UPLOAD')
{
$pdf->Output($file_location.$file_name, 'F'); // F means upload PDF file on some folder
echo "Upload successfully!!";
}

// <img src="../Design_images/'.$inv_mst_data_row['design_image'].'" style="width:300px;">

    ?>
    
</body>
</html>