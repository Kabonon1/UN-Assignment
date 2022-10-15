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
        for ($row = 1; $row <= $lastRow; $row++) {
             $data[] = [
                'A' => $worksheet->getCell('A'.$row)->getValue(),
                'B' => $worksheet->getCell('B'.$row)->getValue()
             ];
        }

echo json_encode($data);

?>

</body>
</html>