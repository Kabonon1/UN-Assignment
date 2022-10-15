<html>
<head>
</head>
<body>
<?php
require_once "PHPExcel-1.8/Classes/PHPExcel.php";
        $tmpfname = "2022 - Application Development and Support - Exam-data.xlsx";
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $excelObj = $excelReader->load($tmpfname);
        $worksheet = $excelObj->getSheet(0);//
        $lastRow = $worksheet->getHighestRow();

     

          $data = [];
        for ($row = 2; $row <= $lastRow; $row++) {
			
		 $status="completed";
		
		if(strpos($worksheet->getCell('M'.$row)->getValue(), $status) !== false)	
		{	

                    $data[] = [									
					
'Project Ref' => $worksheet->getCell('A'.$row)->getValue(),
'Country' => $worksheet->getCell('B'.$row)->getValue(),
'Implementing Office' => $worksheet->getCell('C'.$row)->getValue(),
'Project-Title' => $worksheet->getCell('D'.$row)->getValue(),
'Grant amount (USD)' => $worksheet->getCell('E'.$row)->getValue(),
'Dates from GCF' => $worksheet->getCell('F'.$row)->getValue(),
'Start Date' => $worksheet->getCell('G'.$row)->getValue(),
'Duration (months)' => $worksheet->getCell('H'.$row)->getValue(),
'End Date' => $worksheet->getCell('I'.$row)->getValue(),
'Readiness or NAP' => $worksheet->getCell('J'.$row)->getValue(),
'Type of readiness' => $worksheet->getCell('K'.$row)->getValue(),
'First disbursement amount' => $worksheet->getCell('L'.$row)->getValue(),
'Status' => $worksheet->getCell('M'.$row)->getValue()

				

             ];
			 
		
		
		}
			 
        }

echo json_encode($data);

?>

</body>
</html>