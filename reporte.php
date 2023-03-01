<?php

    require 'vendor/autoload.php';
    require 'conexion.php';
     $conexion = conexion();
     $idUser = $_REQUEST['id'];
     $query = "SELECT * FROM formulario WHERE id = $idUser;";
     $resultado = $prueba->query($query);

    use PhpOffice\PhpSpreadsheet\{spreadsheet, IOFactory};

    //$id->insert_id;

    $excel = new spreadsheet;
    $hojaActiva = $excel->getActivesheet();
    $hojaActiva->setTitle("Visita Técnica");

    $hojaActiva->getColumnDimension('A')->setWidth(47);

    $hojaActiva->setCellValue('A1','FORMATO DE VISTA TÉCNICA');
    $hojaActiva->setCellValue('A2','INFORMACIÓN GENERAL DEL TRABAJO');

        $hojaActiva->setCellValue('A3','Descripción de Trabajo');
        $hojaActiva->setCellValue('A4','Objetivo de Trabajo');
        $hojaActiva->setCellValue('A5','Área de trabajo de Cliente');
        $hojaActiva->setCellValue('A6','Persona de Contacto Usuario Final');
        $hojaActiva->setCellValue('A7','Persona de Contacto Logístico');
        $hojaActiva->setCellValue('A8','Ubicación / Localización');
        $hojaActiva->setCellValue('A9','Tiempo de Entrega de Valorización');
        $hojaActiva->setCellValue('A10','Tiempo de Entrega de Trabajo');
        $hojaActiva->setCellValue('A11','Prioridad de Ejecución');
        $hojaActiva->setCellValue('A12','Accesibilidad a área de Trabajo');
        $hojaActiva->setCellValue('A13','Disponibilidad de área, equipo, unidad de trabajo');
        $hojaActiva->setCellValue('A14','Horario de trabajo para trabajo del cliente');
        $hojaActiva->setCellValue('A15','Anticorrupción');
        $hojaActiva->setCellValue('A16','Tipo de Valorización');

    $hojaActiva->setCellValue('A17','INFORMACIÓN ESPECIFICA DEL TRABAJO');
        $hojaActiva->setCellValue('A18','Línea de Negocio');
        $hojaActiva->setCellValue('A19','Tipo de Documentación de alcance de servicio');
        $hojaActiva->setCellValue('A20','Mano de Obra');
        $hojaActiva->setCellValue('A21','Materiales');
        $hojaActiva->setCellValue('A22','Servicios');
        $hojaActiva->setCellValue('A23','Servicios compartidos con Cliente');

    $hojaActiva->setCellValue('A24','SEGURIDAD INDUSTRIAL');
        $hojaActiva->setCellValue('A25','Tipo de Trabajo');
        $hojaActiva->setCellValue('A26','EPP');
        $hojaActiva->setCellValue('A27','Equipos');
        $hojaActiva->setCellValue('A28','Procedimientos Específicos');
        $hojaActiva->setCellValue('A29','Jefe de Seguridad de área y teléfono de contacto');
        $hojaActiva->setCellValue('A30','Riesgos de trabajo específicos');
    $hojaActiva->setCellValue('A31','APUNTES, MEDIDAS, GRÁFICAS DE CAMPO');


    $rows = $resultado->fetch_assoc();
 
        $hojaActiva->getColumnDimension('B')->setWidth(82);

        $hojaActiva->setCellValue('B3', $rows['descripcion']);
        $hojaActiva->setCellValue('B4', $rows['objetivo']);
        $hojaActiva->setCellValue('B5', $rows['area']);
        $hojaActiva->setCellValue('B6', $rows['persona']);
        $hojaActiva->setCellValue('B7', $rows['logistico']);
        $hojaActiva->setCellValue('B8', $rows['ubicacion']);
        $hojaActiva->setCellValue('B9', $rows['tiempo']);
        $hojaActiva->setCellValue('B10', $rows['trabajo']);
        $hojaActiva->setCellValue('B11', $rows['prioridad']);
        $hojaActiva->setCellValue('B12', $rows['accesibilidad']);
        $hojaActiva->setCellValue('B13', $rows['disponibilidad']);
        $hojaActiva->setCellValue('B14', $rows['horario']);
        $hojaActiva->setCellValue('B15', $rows['anticorrupcion']);
        $hojaActiva->setCellValue('B16', $rows['valorizacion']);

        $hojaActiva->setCellValue('B18', $rows['negocio']);
        $hojaActiva->setCellValue('B19', $rows['alcance']);
        $hojaActiva->setCellValue('B20', $rows['mano']);
        $hojaActiva->setCellValue('B21', $rows['materiales']);    
        $hojaActiva->setCellValue('B22', $rows['servicios']);
        $hojaActiva->setCellValue('B23', $rows['cliente']);

        $hojaActiva->setCellValue('B25', $rows['tipotrabajo']);
        $hojaActiva->setCellValue('B26', $rows['epp']);
        $hojaActiva->setCellValue('B27', $rows['equipos']);
        $hojaActiva->setCellValue('B28', $rows['procedimientos']);
        $hojaActiva->setCellValue('B29', $rows['jefe']);
        $hojaActiva->setCellValue('B30', $rows['riesgos']);

        $ubicacion = $rows['riesgos'];
        
        $for = [
            'font' => [
                'size' => 16,
                'bold' => true,
            ],
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'AEB6BF',
                ],
            ],
        ];

        $hojaActiva->getStyle('A1')->applyFromArray($for);

        $for2 = [
            'font' => [
                'size' => 16,
                'bold' => true,
            ],
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'AEB6BF',
                ],
            ],
        ];

        $hojaActiva->getStyle('B1')->applyFromArray($for2);

        $let = [
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'font' => [
                'bold' => true,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => '5DADE2',
                ],
            ],
        ];

        $hojaActiva->getStyle('A2:B2')->applyFromArray($let);
        $hojaActiva->getStyle('A17:B17')->applyFromArray($let);
        $hojaActiva->getStyle('A24:B24')->applyFromArray($let);
        $hojaActiva->getStyle('A31:B31')->applyFromArray($let);

        $borde1 = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
        
        $hojaActiva->getStyle('A1:B31')->applyFromArray($borde1);

        $borde2 = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];

        $hojaActiva->getStyle('A32:B200')->applyFromArray($borde2);

        $hojaActiva->mergeCells('A2:B2');
        $hojaActiva->mergeCells('A17:B17');
        $hojaActiva->mergeCells('A24:B24');
        $hojaActiva->mergeCells('A31:B31');
        $hojaActiva->mergeCells('A32:B200');

         
        // function addImage($nombre,$ubicacion,$cordenadas,$hoja){
        //     $hojaActiva = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        //     $hojaActiva->setName($nombre);
        //     $hojaActiva->setPath($ubicacion);
        //     $hojaActiva->setCoordinates($cordenadas);
        //     $hojaActiva->setWorksheet($hoja);
        // }
        
        $hojaActiva = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $hojaActiva->setPath($rows['imagen']);
        $hojaActiva->setCoordinates('A32');
        $hojaActiva->setWidthAndHeight(800, 800);
        $hojaActiva->setWorksheet($excel->getActiveSheet());

        //$rows['imagen'];
        // addImage('Visita Tecnica','files/143/visita tecnica.jpg','A32',$excel->getActiveSheet());
        

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Visita Técnica.xlsx"');
    header('Cache-Control: max-age=0');

    $writer = IOFactory::createWriter($excel, 'Xlsx');
    $writer->save('php://output');
    exit;

?>