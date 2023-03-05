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

    $hojaActiva->setCellValue('A2','Nombre del Trabajador');
    $hojaActiva->setCellValue('A3','Fecha de Evaluación');
    
    $hojaActiva->setCellValue('A4','INFORMACIÓN GENERAL DEL TRABAJO');
        $hojaActiva->setCellValue('A5','Descripción de Trabajo');
        $hojaActiva->setCellValue('A6','Objetivo de Trabajo');
        $hojaActiva->setCellValue('A7','Área de trabajo de Cliente');
        $hojaActiva->setCellValue('A8','Persona de Contacto Usuario Final');
        $hojaActiva->setCellValue('A9','Persona de Contacto Logístico');
        $hojaActiva->setCellValue('A10','Ubicación / Localización');
        $hojaActiva->setCellValue('A11','Tiempo de Entrega de Valorización');
        $hojaActiva->setCellValue('A12','Tiempo de Entrega de Trabajo');
        $hojaActiva->setCellValue('A13','Prioridad de Ejecución');
        $hojaActiva->setCellValue('A14','Accesibilidad a área de Trabajo');
        $hojaActiva->setCellValue('A15','Disponibilidad de área, equipo, unidad de trabajo');
        $hojaActiva->setCellValue('A16','Horario de trabajo para trabajo del cliente');
        $hojaActiva->setCellValue('A17','Anticorrupción');
        $hojaActiva->setCellValue('A18','Tipo de Valorización');

    $hojaActiva->setCellValue('A19','INFORMACIÓN ESPECIFICA DEL TRABAJO');
        $hojaActiva->setCellValue('A20','Línea de Negocio');
        $hojaActiva->setCellValue('A21','Tipo de Documentación de alcance de servicio');
        $hojaActiva->setCellValue('A22','Mano de Obra');
        $hojaActiva->setCellValue('A23','Materiales');
        $hojaActiva->setCellValue('A24','Servicios');
        $hojaActiva->setCellValue('A25','Servicios compartidos con Cliente');

    $hojaActiva->setCellValue('A26','SEGURIDAD INDUSTRIAL');
        $hojaActiva->setCellValue('A27','Tipo de Trabajo');
        $hojaActiva->setCellValue('A28','EPP');
        $hojaActiva->setCellValue('A29','Equipos');
        $hojaActiva->setCellValue('A30','Procedimientos Específicos');
        $hojaActiva->setCellValue('A31','Jefe de Seguridad de área y teléfono de contacto');
        $hojaActiva->setCellValue('A32','Riesgos de trabajo específicos');
        $hojaActiva->setCellValue('A33','Observaciones');
    $hojaActiva->setCellValue('A34','APUNTES, MEDIDAS, GRÁFICAS DE CAMPO');


    $rows = $resultado->fetch_assoc();
 
        $hojaActiva->getColumnDimension('B')->setWidth(82);

        $hojaActiva->setCellValue('B1', 'N° '.$rows['id']);

        $hojaActiva->setCellValue('B2', $rows['nombre']);
        $hojaActiva->setCellValue('B3', $rows['fecha']);

        $hojaActiva->setCellValue('B5', $rows['descripcion']);
        $hojaActiva->setCellValue('B6', $rows['objetivo']);
        $hojaActiva->setCellValue('B7', $rows['area']);
        $hojaActiva->setCellValue('B8', $rows['persona']);
        $hojaActiva->setCellValue('B9', $rows['logistico']);
        $hojaActiva->setCellValue('B10', $rows['ubicacion']);
        $hojaActiva->setCellValue('B11', $rows['tiempo']);
        $hojaActiva->setCellValue('B12', $rows['trabajo']);
        $hojaActiva->setCellValue('B13', $rows['prioridad']);
        $hojaActiva->setCellValue('B14', $rows['accesibilidad']);
        $hojaActiva->setCellValue('B15', $rows['disponibilidad']);
        $hojaActiva->setCellValue('B16', $rows['horario']);
        $hojaActiva->setCellValue('B17', $rows['anticorrupcion']);
        $hojaActiva->setCellValue('B18', $rows['valorizacion']);

        $hojaActiva->setCellValue('B20', $rows['negocio']);
        $hojaActiva->setCellValue('B21', $rows['alcance']);
        $hojaActiva->setCellValue('B22', $rows['mano']);
        $hojaActiva->setCellValue('B23', $rows['materiales']);    
        $hojaActiva->setCellValue('B24', $rows['servicios']);
        $hojaActiva->setCellValue('B25', $rows['cliente']);

        $hojaActiva->setCellValue('B27', $rows['tipotrabajo']);
        $hojaActiva->setCellValue('B28', $rows['epp']);
        $hojaActiva->setCellValue('B29', $rows['equipos']);
        $hojaActiva->setCellValue('B30', $rows['procedimientos']);
        $hojaActiva->setCellValue('B31', $rows['jefe']);
        $hojaActiva->setCellValue('B32', $rows['riesgos']);
        $hojaActiva->setCellValue('B33', $rows['observaciones']);
        
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

        $hojaActiva->getStyle('A4:B4')->applyFromArray($let);
        $hojaActiva->getStyle('A19:B19')->applyFromArray($let);
        $hojaActiva->getStyle('A26:B26')->applyFromArray($let);
        $hojaActiva->getStyle('A34:B34')->applyFromArray($let);

        $borde1 = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
        
        $hojaActiva->getStyle('A1:B34')->applyFromArray($borde1);

        $borde2 = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];

        $hojaActiva->getStyle('A33:B200')->applyFromArray($borde2);

        $hojaActiva->mergeCells('A4:B4');
        $hojaActiva->mergeCells('A19:B19');
        $hojaActiva->mergeCells('A26:B26');
        $hojaActiva->mergeCells('A34:B34');
        $hojaActiva->mergeCells('A35:B200');

         
        // function addImage($nombre,$ubicacion,$cordenadas,$hoja){
        //     $hojaActiva = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        //     $hojaActiva->setName($nombre);
        //     $hojaActiva->setPath($ubicacion);
        //     $hojaActiva->setCoordinates($cordenadas);
        //     $hojaActiva->setWorksheet($hoja);
        // }
        
        $hojaActiva = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $hojaActiva->setPath($rows['imagen']);
        $hojaActiva->setCoordinates('A35');
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