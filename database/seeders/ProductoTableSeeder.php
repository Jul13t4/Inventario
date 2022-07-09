<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('producto')->delete();
        
        \DB::table('producto')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_solicitud' => NULL,
                'codigo' => '4236',
                'elemento' => 'ALMOHADILLA DACTILAR',
                'id_clasificacion' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'id_solicitud' => NULL,
                'codigo' => '4237',
                'elemento' => 'ALMOHADILLA PARA SELLO',
                'id_clasificacion' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'id_solicitud' => NULL,
                'codigo' => '4312',
                'elemento' => 'BANDAS DE CAUCHO',
                'id_clasificacion' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'id_solicitud' => NULL,
                'codigo' => '4312-1',
                'elemento' => 'BANDAS DE CAUCHO BOLSA',
                'id_clasificacion' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'id_solicitud' => NULL,
                'codigo' => '4312-2',
                'elemento' => 'BANDAS DE CAUCHO CAJA',
                'id_clasificacion' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'id_solicitud' => NULL,
                'codigo' => '8455',
                'elemento' => 'BISTURI',
                'id_clasificacion' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'id_solicitud' => NULL,
                'codigo' => '4333',
                'elemento' => 'BLOCK',
                'id_clasificacion' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'id_solicitud' => NULL,
                'codigo' => '10912',
                'elemento' => 'BOLIGRAFO-LAPICERO',
                'id_clasificacion' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'id_solicitud' => NULL,
                'codigo' => '18526',
                'elemento' => 'BOLSILLO/ESTUCHE PARA CD',
                'id_clasificacion' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'id_solicitud' => NULL,
                'codigo' => '4208',
                'elemento' => 'BORRADOR',
                'id_clasificacion' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'id_solicitud' => NULL,
                'codigo' => '16897',
                'elemento' => 'CAJA DE CARTON',
                'id_clasificacion' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'id_solicitud' => NULL,
                'codigo' => '10004',
                'elemento' => 'CARPETA',
                'id_clasificacion' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'id_solicitud' => NULL,
                'codigo' => '10004-1',
                'elemento' => 'CARPETA ADMINISTRATIVA',
                'id_clasificacion' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'id_solicitud' => NULL,
                'codigo' => '10004-2',
                'elemento' => 'CARPETA HISTORIAS',
                'id_clasificacion' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'id_solicitud' => NULL,
                'codigo' => '4425',
                'elemento' => 'CARTUCHO DE TINTA',
                'id_clasificacion' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'id_solicitud' => NULL,
                'codigo' => '17675',
                'elemento' => 'CD-RW',
                'id_clasificacion' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'id_solicitud' => NULL,
                'codigo' => '8655',
                'elemento' => 'CHINCHONES',
                'id_clasificacion' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'id_solicitud' => NULL,
                'codigo' => '7755',
                'elemento' => 'CINTA DE ENMASCARAR',
                'id_clasificacion' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'id_solicitud' => NULL,
                'codigo' => '7755-1',
                'elemento' => 'CINTA DE ENMASCARAR GRANDE',
                'id_clasificacion' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'id_solicitud' => NULL,
                'codigo' => '7755-2',
                'elemento' => 'CINTA DE ENMASCARAR PEQUEÑA',
                'id_clasificacion' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'id_solicitud' => NULL,
                'codigo' => '4512',
                'elemento' => 'CINTA PARA IMPRESORA',
                'id_clasificacion' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'id_solicitud' => NULL,
                'codigo' => '12362',
            'elemento' => 'CINTA TRASFERENCIA TERMICA(AZUL)',
                'id_clasificacion' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'id_solicitud' => NULL,
                'codigo' => '9107',
                'elemento' => 'CINTA TRASPARENTE',
                'id_clasificacion' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'id_solicitud' => NULL,
                'codigo' => '9107-3',
                'elemento' => 'CINTA TRASPARENTE GRANDE',
                'id_clasificacion' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'id_solicitud' => NULL,
                'codigo' => '9107-2',
                'elemento' => 'CINTA TRASPARENTE MEDIANA',
                'id_clasificacion' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'id_solicitud' => NULL,
                'codigo' => '9107-1',
                'elemento' => 'CINTA TRASPARENTE PEQUEÑA',
                'id_clasificacion' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'id_solicitud' => NULL,
                'codigo' => '4317',
                'elemento' => 'CLIP',
                'id_clasificacion' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'id_solicitud' => NULL,
                'codigo' => '4320',
                'elemento' => 'CLIP MARIPOSA',
                'id_clasificacion' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'id_solicitud' => NULL,
                'codigo' => '4320-2',
                'elemento' => 'CLIP MARIPOSA GRANDE',
                'id_clasificacion' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'id_solicitud' => NULL,
                'codigo' => '4317',
                'elemento' => 'CLIP PEQUEÑO',
                'id_clasificacion' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'id_solicitud' => NULL,
                'codigo' => '10912-4',
                'elemento' => 'COLORES SURTIDOS',
                'id_clasificacion' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'id_solicitud' => NULL,
                'codigo' => '4215',
                'elemento' => 'CORRECTOR EN LAPIZ',
                'id_clasificacion' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'id_solicitud' => NULL,
                'codigo' => '27784',
                'elemento' => 'CORRECTOR LIQUIDO',
                'id_clasificacion' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'id_solicitud' => NULL,
                'codigo' => '9094',
                'elemento' => 'COSEDORA',
                'id_clasificacion' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'id_solicitud' => NULL,
                'codigo' => '10037',
                'elemento' => 'CUADERNO',
                'id_clasificacion' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'id_solicitud' => NULL,
                'codigo' => '10037-2',
                'elemento' => 'CUADERNO GRANDE',
                'id_clasificacion' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'id_solicitud' => NULL,
                'codigo' => '10037-1',
                'elemento' => 'CUADERNO PEQUEÑO',
                'id_clasificacion' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'id_solicitud' => NULL,
                'codigo' => '4178',
                'elemento' => 'FOLDER COLGANTE',
                'id_clasificacion' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'id_solicitud' => NULL,
                'codigo' => '10409',
                'elemento' => 'FUELLE ARCHIVADOR',
                'id_clasificacion' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'id_solicitud' => NULL,
                'codigo' => '4328',
                'elemento' => 'GANCHO - GRAPA PARA COSEDORA',
                'id_clasificacion' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'id_solicitud' => NULL,
                'codigo' => '9117',
                'elemento' => 'GANCHO LEGAJADOR',
                'id_clasificacion' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'id_solicitud' => NULL,
                'codigo' => '18370',
            'elemento' => 'GANCHOS (LOTERO)',
                'id_clasificacion' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'id_solicitud' => NULL,
                'codigo' => '18370-3',
                'elemento' => 'GANCHOS GRANDES',
                'id_clasificacion' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'id_solicitud' => NULL,
                'codigo' => '18370-2',
                'elemento' => 'GANCHOS MEDIANOS',
                'id_clasificacion' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'id_solicitud' => NULL,
                'codigo' => '18370-1',
                'elemento' => 'GANCHOS PEQUEÑOS',
                'id_clasificacion' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'id_solicitud' => NULL,
                'codigo' => '4125',
                'elemento' => 'HOJAS - CUCHILLA DE BISTURI',
                'id_clasificacion' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'id_solicitud' => NULL,
                'codigo' => '9327',
                'elemento' => 'HUMEDECEDOR DE DEDOS',
                'id_clasificacion' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'id_solicitud' => NULL,
                'codigo' => '20970',
                'elemento' => 'LAMINA PARA CARNET',
                'id_clasificacion' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'id_solicitud' => NULL,
                'codigo' => '4250',
                'elemento' => 'LAPIZ',
                'id_clasificacion' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'id_solicitud' => NULL,
                'codigo' => '4250-1',
                'elemento' => 'LAPIZ NEGRO',
                'id_clasificacion' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'id_solicitud' => NULL,
                'codigo' => '4250-2',
                'elemento' => 'LAPIZ ROJO',
                'id_clasificacion' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'id_solicitud' => NULL,
                'codigo' => '4250-3',
                'elemento' => 'LAPIZ VERDE',
                'id_clasificacion' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'id_solicitud' => NULL,
                'codigo' => '4258',
                'elemento' => 'MARCADOR',
                'id_clasificacion' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'id_solicitud' => NULL,
                'codigo' => '4258-2',
                'elemento' => 'MARCADOR BORRABLE',
                'id_clasificacion' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'id_solicitud' => NULL,
                'codigo' => '4258-3',
                'elemento' => 'MARCADOR PERMANENTE',
                'id_clasificacion' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'id_solicitud' => NULL,
                'codigo' => '4258-1',
                'elemento' => 'MARCADOR SHARPIE NEGRO',
                'id_clasificacion' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'id_solicitud' => NULL,
                'codigo' => '4275',
                'elemento' => 'MICROPUNTA',
                'id_clasificacion' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'id_solicitud' => NULL,
                'codigo' => '4285',
                'elemento' => 'MINAS',
                'id_clasificacion' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'id_solicitud' => NULL,
                'codigo' => '4285-2',
                'elemento' => 'MINAS 0.5 mm',
                'id_clasificacion' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'id_solicitud' => NULL,
                'codigo' => '4285-1',
                'elemento' => 'MINAS 0.7 mm',
                'id_clasificacion' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'id_solicitud' => NULL,
                'codigo' => '10912-1',
                'elemento' => 'NEGRO',
                'id_clasificacion' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'id_solicitud' => NULL,
                'codigo' => '10912-2',
                'elemento' => 'NEGRO FINO',
                'id_clasificacion' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'id_solicitud' => NULL,
                'codigo' => '9130',
                'elemento' => 'NOTAS ADHESIVAS',
                'id_clasificacion' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'id_solicitud' => NULL,
                'codigo' => '9130-3',
                'elemento' => 'NOTAS ADHESIVAS GRANDES',
                'id_clasificacion' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'id_solicitud' => NULL,
                'codigo' => '9130-2',
                'elemento' => 'NOTAS ADHESIVAS MEDIANAS',
                'id_clasificacion' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'id_solicitud' => NULL,
                'codigo' => '9130-1',
                'elemento' => 'NOTAS ADHESIVAS PEQUEÑAS',
                'id_clasificacion' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'id_solicitud' => NULL,
                'codigo' => '4365',
                'elemento' => 'PAPEL CARTA',
                'id_clasificacion' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'id_solicitud' => NULL,
                'codigo' => '4369',
                'elemento' => 'PAPEL CONTAC',
                'id_clasificacion' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'id_solicitud' => NULL,
                'codigo' => '16447',
                'elemento' => 'PAPEL ELECTROCARDIOGRAMA',
                'id_clasificacion' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'id_solicitud' => NULL,
                'codigo' => '4375',
                'elemento' => 'PAPEL OFICIO',
                'id_clasificacion' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'id_solicitud' => NULL,
                'codigo' => '4166',
                'elemento' => 'PEGANTE',
                'id_clasificacion' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'id_solicitud' => NULL,
                'codigo' => '4166-1',
                'elemento' => 'PEGANTE COLBON',
                'id_clasificacion' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'id_solicitud' => NULL,
                'codigo' => '4166-2',
                'elemento' => 'PEGANTE PEGASTIC',
                'id_clasificacion' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'id_solicitud' => NULL,
                'codigo' => '9095',
                'elemento' => 'PERFORADORA',
                'id_clasificacion' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'id_solicitud' => NULL,
                'codigo' => '20979',
                'elemento' => 'PILA',
                'id_clasificacion' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'id_solicitud' => NULL,
                'codigo' => '20979-2',
                'elemento' => 'PILA AA',
                'id_clasificacion' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'id_solicitud' => NULL,
                'codigo' => '20979-1',
                'elemento' => 'PILA AAA',
                'id_clasificacion' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'id_solicitud' => NULL,
                'codigo' => '20979-3',
                'elemento' => 'PILA CUADRADA',
                'id_clasificacion' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'id_solicitud' => NULL,
                'codigo' => '4279',
                'elemento' => 'PORTAMINAS',
                'id_clasificacion' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'id_solicitud' => NULL,
                'codigo' => '8928',
                'elemento' => 'REGLA',
                'id_clasificacion' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'id_solicitud' => NULL,
                'codigo' => '8928-2',
                'elemento' => 'REGLA GRANDE',
                'id_clasificacion' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'id_solicitud' => NULL,
                'codigo' => '8928-1',
                'elemento' => 'REGLA PEQUEÑA',
                'id_clasificacion' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'id_solicitud' => NULL,
                'codigo' => '16831',
                'elemento' => 'RESALTADOR',
                'id_clasificacion' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'id_solicitud' => NULL,
                'codigo' => '10912-3',
                'elemento' => 'ROJO',
                'id_clasificacion' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'id_solicitud' => NULL,
                'codigo' => '10363',
                'elemento' => 'ROTULO ADHESIVO',
                'id_clasificacion' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'id_solicitud' => NULL,
                'codigo' => '4137',
                'elemento' => 'SACA GANCHO',
                'id_clasificacion' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'id_solicitud' => NULL,
                'codigo' => '4137-2',
                'elemento' => 'SACA GANCHO GRANDE',
                'id_clasificacion' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'id_solicitud' => NULL,
                'codigo' => '4137-1',
                'elemento' => 'SACA GANCHO UÑA',
                'id_clasificacion' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'id_solicitud' => NULL,
                'codigo' => '16582',
                'elemento' => 'SEPARADOR DE HOJAS',
                'id_clasificacion' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'id_solicitud' => NULL,
                'codigo' => '9161',
                'elemento' => 'SOBRE',
                'id_clasificacion' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'id_solicitud' => NULL,
                'codigo' => '7995',
                'elemento' => 'SOBRE DE MANILA',
                'id_clasificacion' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'id_solicitud' => NULL,
                'codigo' => '7995-1',
                'elemento' => 'SOBRE DE MANILA 1/2 ',
                'id_clasificacion' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'id_solicitud' => NULL,
                'codigo' => '7995-2',
                'elemento' => 'SOBRE DE MANILA CARTA',
                'id_clasificacion' => 1,
            ),
            93 => 
            array (
                'id' => 94,
                'id_solicitud' => NULL,
                'codigo' => '7995-3',
                'elemento' => 'SOBRE DE MANILA OFICIO',
                'id_clasificacion' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'id_solicitud' => NULL,
                'codigo' => '22749',
                'elemento' => 'SOPORTE DE DOCUMENTOS',
                'id_clasificacion' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'id_solicitud' => NULL,
                'codigo' => '8960',
                'elemento' => 'TIJERA',
                'id_clasificacion' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'id_solicitud' => NULL,
                'codigo' => '2356',
                'elemento' => 'TINTA PARA SELLO',
                'id_clasificacion' => 1,
            ),
            97 => 
            array (
                'id' => 98,
                'id_solicitud' => NULL,
                'codigo' => '2356-1',
                'elemento' => 'TINTA PARA SELLO NEGRO',
                'id_clasificacion' => 1,
            ),
            98 => 
            array (
                'id' => 99,
                'id_solicitud' => NULL,
                'codigo' => '2356-2',
                'elemento' => 'TINTA PARA SELLO ROJO',
                'id_clasificacion' => 1,
            ),
            99 => 
            array (
                'id' => 100,
                'id_solicitud' => NULL,
                'codigo' => '16581',
                'elemento' => 'TIQUETES',
                'id_clasificacion' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'id_solicitud' => NULL,
                'codigo' => '4559',
                'elemento' => 'TONER',
                'id_clasificacion' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'id_solicitud' => NULL,
                'codigo' => '16435',
                'elemento' => 'ACEITE MINERAL',
                'id_clasificacion' => 2,
            ),
            102 => 
            array (
                'id' => 103,
                'id_solicitud' => NULL,
                'codigo' => '22106',
                'elemento' => 'AGUA DESTILADA 5 ML ',
                'id_clasificacion' => 2,
            ),
            103 => 
            array (
                'id' => 104,
                'id_solicitud' => NULL,
                'codigo' => '7254',
                'elemento' => 'AGUA OXIGENADA',
                'id_clasificacion' => 2,
            ),
            104 => 
            array (
                'id' => 105,
                'id_solicitud' => NULL,
                'codigo' => '7254-1',
            'elemento' => 'AGUA OXIGENADA AL 30 % (PERBORATO DE HIDROGENO AL 30%) FRASCO NACIONAL',
                'id_clasificacion' => 2,
            ),
            105 => 
            array (
                'id' => 106,
                'id_solicitud' => NULL,
                'codigo' => '7254-2',
                'elemento' => 'AGUA OXIGENADA fco de 120 ml., NACIONAL ',
                'id_clasificacion' => 2,
            ),
            106 => 
            array (
                'id' => 107,
                'id_solicitud' => NULL,
                'codigo' => '18435',
                'elemento' => 'AGUJA HIPODERMICA',
                'id_clasificacion' => 2,
            ),
            107 => 
            array (
                'id' => 108,
                'id_solicitud' => NULL,
                'codigo' => '18435-1',
                'elemento' => 'AGUJA HIPODERMICA 20"',
                'id_clasificacion' => 2,
            ),
            108 => 
            array (
                'id' => 109,
                'id_solicitud' => NULL,
                'codigo' => '18435-2',
                'elemento' => 'AGUJA HIPODERMICA 21"',
                'id_clasificacion' => 2,
            ),
            109 => 
            array (
                'id' => 110,
                'id_solicitud' => NULL,
                'codigo' => '18435-3',
                'elemento' => 'AGUJA HIPODERMICA 23"',
                'id_clasificacion' => 2,
            ),
            110 => 
            array (
                'id' => 111,
                'id_solicitud' => NULL,
                'codigo' => '4960',
                'elemento' => 'ALCOHOL ANTISEPTICO',
                'id_clasificacion' => 2,
            ),
            111 => 
            array (
                'id' => 112,
                'id_solicitud' => NULL,
                'codigo' => '10382',
                'elemento' => 'ALGODÓN',
                'id_clasificacion' => 2,
            ),
            112 => 
            array (
                'id' => 113,
                'id_solicitud' => NULL,
                'codigo' => '10382-1',
                'elemento' => 'ALGODÓN TORUNDA',
                'id_clasificacion' => 2,
            ),
            113 => 
            array (
                'id' => 114,
                'id_solicitud' => NULL,
                'codigo' => '10179',
                'elemento' => 'APLICADOR ',
                'id_clasificacion' => 2,
            ),
            114 => 
            array (
                'id' => 115,
                'id_solicitud' => NULL,
                'codigo' => '10179-1',
                'elemento' => 'APLICADOR ALGODÓN',
                'id_clasificacion' => 2,
            ),
            115 => 
            array (
                'id' => 116,
                'id_solicitud' => NULL,
                'codigo' => '7980',
                'elemento' => 'BAJALENGUAS',
                'id_clasificacion' => 2,
            ),
            116 => 
            array (
                'id' => 117,
                'id_solicitud' => NULL,
                'codigo' => '7980-1',
                'elemento' => 'BAJALENGUAS PLASTICO',
                'id_clasificacion' => 2,
            ),
            117 => 
            array (
                'id' => 118,
                'id_solicitud' => NULL,
                'codigo' => '17535',
                'elemento' => 'BURETA',
                'id_clasificacion' => 2,
            ),
            118 => 
            array (
                'id' => 119,
                'id_solicitud' => NULL,
                'codigo' => '16436',
                'elemento' => 'BURETROL',
                'id_clasificacion' => 2,
            ),
            119 => 
            array (
                'id' => 120,
                'id_solicitud' => NULL,
                'codigo' => '9336',
                'elemento' => 'CANULA',
                'id_clasificacion' => 2,
            ),
            120 => 
            array (
                'id' => 121,
                'id_solicitud' => NULL,
                'codigo' => '9336-1',
                'elemento' => 'CANULA DE GUEDEL Nº 1',
                'id_clasificacion' => 2,
            ),
            121 => 
            array (
                'id' => 122,
                'id_solicitud' => NULL,
                'codigo' => '9336-2',
                'elemento' => 'CANULA DE GUEDEL Nº 2',
                'id_clasificacion' => 2,
            ),
            122 => 
            array (
                'id' => 123,
                'id_solicitud' => NULL,
                'codigo' => '9336-3',
                'elemento' => 'CANULA DE GUEDEL Nº 3',
                'id_clasificacion' => 2,
            ),
            123 => 
            array (
                'id' => 124,
                'id_solicitud' => NULL,
                'codigo' => '9336-4',
                'elemento' => 'CANULA DE GUEDEL Nº 4',
                'id_clasificacion' => 2,
            ),
            124 => 
            array (
                'id' => 125,
                'id_solicitud' => NULL,
                'codigo' => '9336-5',
                'elemento' => 'CANULA DE GUEDEL Nº 5',
                'id_clasificacion' => 2,
            ),
            125 => 
            array (
                'id' => 126,
                'id_solicitud' => NULL,
                'codigo' => '9336-1',
                'elemento' => 'CANULA NASAL ADULTO',
                'id_clasificacion' => 2,
            ),
            126 => 
            array (
                'id' => 127,
                'id_solicitud' => NULL,
                'codigo' => '9336-2',
                'elemento' => 'CANULA NASAL PEDIATRICO',
                'id_clasificacion' => 2,
            ),
            127 => 
            array (
                'id' => 128,
                'id_solicitud' => NULL,
                'codigo' => '17184',
                'elemento' => 'CATETER INTRAVENOSO',
                'id_clasificacion' => 2,
            ),
            128 => 
            array (
                'id' => 129,
                'id_solicitud' => NULL,
                'codigo' => '17184-1',
                'elemento' => 'CATETER INTRAVENOSO 18',
                'id_clasificacion' => 2,
            ),
            129 => 
            array (
                'id' => 130,
                'id_solicitud' => NULL,
                'codigo' => '17184-2',
                'elemento' => 'CATETER INTRAVENOSO 20',
                'id_clasificacion' => 2,
            ),
            130 => 
            array (
                'id' => 131,
                'id_solicitud' => NULL,
                'codigo' => '17184-3',
                'elemento' => 'CATETER INTRAVENOSO 22',
                'id_clasificacion' => 2,
            ),
            131 => 
            array (
                'id' => 132,
                'id_solicitud' => NULL,
                'codigo' => '17184-4',
                'elemento' => 'CATETER INTRAVENOSO 24',
                'id_clasificacion' => 2,
            ),
            132 => 
            array (
                'id' => 133,
                'id_solicitud' => NULL,
                'codigo' => '1237',
                'elemento' => 'CONTRANGULOS',
                'id_clasificacion' => 2,
            ),
            133 => 
            array (
                'id' => 134,
                'id_solicitud' => NULL,
                'codigo' => '22110',
                'elemento' => 'CURA STANDARD',
                'id_clasificacion' => 2,
            ),
            134 => 
            array (
                'id' => 135,
                'id_solicitud' => NULL,
                'codigo' => '11759',
                'elemento' => 'DISPOSITIVO INTRAUTERINO ',
                'id_clasificacion' => 2,
            ),
            135 => 
            array (
                'id' => 136,
                'id_solicitud' => NULL,
                'codigo' => '22627',
                'elemento' => 'ELECTRODOS PARA DESFIBRILADOR ',
                'id_clasificacion' => 2,
            ),
            136 => 
            array (
                'id' => 137,
                'id_solicitud' => NULL,
                'codigo' => '22627-2',
                'elemento' => 'ELECTRODOS PARA DESFIBRILADOR ADULTO',
                'id_clasificacion' => 2,
            ),
            137 => 
            array (
                'id' => 138,
                'id_solicitud' => NULL,
                'codigo' => '22627-1',
                'elemento' => 'ELECTRODOS PARA DESFIBRILADOR PEDATRICO',
                'id_clasificacion' => 2,
            ),
            138 => 
            array (
                'id' => 139,
                'id_solicitud' => NULL,
                'codigo' => '18035',
                'elemento' => 'ELECTRODOS PARA MONITORIZACIÓN',
                'id_clasificacion' => 2,
            ),
            139 => 
            array (
                'id' => 140,
                'id_solicitud' => NULL,
                'codigo' => '16439',
                'elemento' => 'EQUIPO MACROGOTEO',
                'id_clasificacion' => 2,
            ),
            140 => 
            array (
                'id' => 141,
                'id_solicitud' => NULL,
                'codigo' => '17191',
                'elemento' => 'ESPADADRAPO MICROPIEL',
                'id_clasificacion' => 2,
            ),
            141 => 
            array (
                'id' => 142,
                'id_solicitud' => NULL,
                'codigo' => '17191-2',
                'elemento' => 'ESPADADRAPO MICROPIEL 1 1/2"',
                'id_clasificacion' => 2,
            ),
            142 => 
            array (
                'id' => 143,
                'id_solicitud' => NULL,
                'codigo' => '17191-1',
                'elemento' => 'ESPADADRAPO MICROPIEL 1"',
                'id_clasificacion' => 2,
            ),
            143 => 
            array (
                'id' => 144,
                'id_solicitud' => NULL,
                'codigo' => '17191-3',
                'elemento' => 'ESPADADRAPO MICROPIEL 2"',
                'id_clasificacion' => 2,
            ),
            144 => 
            array (
                'id' => 145,
                'id_solicitud' => NULL,
                'codigo' => '10360',
                'elemento' => 'ESPECULO VAGINAL',
                'id_clasificacion' => 2,
            ),
            145 => 
            array (
                'id' => 146,
                'id_solicitud' => NULL,
                'codigo' => '10360-2',
                'elemento' => 'ESPECULO VAGINAL TALLA M',
                'id_clasificacion' => 2,
            ),
            146 => 
            array (
                'id' => 147,
                'id_solicitud' => NULL,
                'codigo' => '10360-1',
                'elemento' => 'ESPECULO VAGINAL TALLA S',
                'id_clasificacion' => 2,
            ),
            147 => 
            array (
                'id' => 148,
                'id_solicitud' => NULL,
                'codigo' => '22390',
                'elemento' => 'EXTENSIONES DE ANESTESIA REF. 1139',
                'id_clasificacion' => 2,
            ),
            148 => 
            array (
                'id' => 149,
                'id_solicitud' => NULL,
                'codigo' => '16441',
                'elemento' => 'FIJADOR DE CITOLOGIA',
                'id_clasificacion' => 2,
            ),
            149 => 
            array (
                'id' => 150,
                'id_solicitud' => NULL,
                'codigo' => '17678',
                'elemento' => 'FRASCO RECOLECTOR DE ORINA',
                'id_clasificacion' => 2,
            ),
            150 => 
            array (
                'id' => 151,
                'id_solicitud' => NULL,
                'codigo' => '23043',
                'elemento' => 'FUNDA PARA CIRUGIA',
                'id_clasificacion' => 2,
            ),
            151 => 
            array (
                'id' => 152,
                'id_solicitud' => NULL,
                'codigo' => '7979',
                'elemento' => 'GASA',
                'id_clasificacion' => 2,
            ),
            152 => 
            array (
                'id' => 153,
                'id_solicitud' => NULL,
                'codigo' => '7979-1',
            'elemento' => 'GASA PRECORTADA ESTERIL DE (7.5CM x 7.5CM) 3" X 3" SOBRE X 3 UNDS ',
                'id_clasificacion' => 2,
            ),
            153 => 
            array (
                'id' => 154,
                'id_solicitud' => NULL,
                'codigo' => '16443',
                'elemento' => 'GEL CONDUCTOR ',
                'id_clasificacion' => 2,
            ),
            154 => 
            array (
                'id' => 155,
                'id_solicitud' => NULL,
                'codigo' => '16477',
                'elemento' => 'HOJAS DE LARINGOSCOPIO ',
                'id_clasificacion' => 2,
            ),
            155 => 
            array (
                'id' => 156,
                'id_solicitud' => NULL,
                'codigo' => '16477-1',
                'elemento' => 'HOJAS DE LARINGOSCOPIO Nº 1 RECTA',
                'id_clasificacion' => 2,
            ),
            156 => 
            array (
                'id' => 157,
                'id_solicitud' => NULL,
                'codigo' => '16477-2',
                'elemento' => 'HOJAS DE LARINGOSCOPIO Nº 2 RECTA',
                'id_clasificacion' => 2,
            ),
            157 => 
            array (
                'id' => 158,
                'id_solicitud' => NULL,
                'codigo' => '16477-3',
                'elemento' => 'HOJAS DE LARINGOSCOPIO Nº 3 RECTA',
                'id_clasificacion' => 2,
            ),
            158 => 
            array (
                'id' => 159,
                'id_solicitud' => NULL,
                'codigo' => '27790',
                'elemento' => 'HUMIDIFICADOR PLASTICO',
                'id_clasificacion' => 2,
            ),
            159 => 
            array (
                'id' => 160,
                'id_solicitud' => NULL,
                'codigo' => '16445',
                'elemento' => 'INHALOCAMARA',
                'id_clasificacion' => 2,
            ),
            160 => 
            array (
                'id' => 161,
                'id_solicitud' => NULL,
                'codigo' => '16445-2',
                'elemento' => 'INHALOCAMARA ADULTO',
                'id_clasificacion' => 2,
            ),
            161 => 
            array (
                'id' => 162,
                'id_solicitud' => NULL,
                'codigo' => '16445-1',
                'elemento' => 'INHALOCAMARA PEDIATRICO',
                'id_clasificacion' => 2,
            ),
            162 => 
            array (
                'id' => 163,
                'id_solicitud' => NULL,
                'codigo' => '10379',
                'elemento' => 'JERINGA',
                'id_clasificacion' => 2,
            ),
            163 => 
            array (
                'id' => 164,
                'id_solicitud' => NULL,
                'codigo' => '10379-1',
                'elemento' => 'JERINGA 1 ml',
                'id_clasificacion' => 2,
            ),
            164 => 
            array (
                'id' => 165,
                'id_solicitud' => NULL,
                'codigo' => '10379-4',
                'elemento' => 'JERINGA 10 ml',
                'id_clasificacion' => 2,
            ),
            165 => 
            array (
                'id' => 166,
                'id_solicitud' => NULL,
                'codigo' => '10379-5',
                'elemento' => 'JERINGA 20 ml',
                'id_clasificacion' => 2,
            ),
            166 => 
            array (
                'id' => 167,
                'id_solicitud' => NULL,
                'codigo' => '10379-2',
                'elemento' => 'JERINGA 3 ml',
                'id_clasificacion' => 2,
            ),
            167 => 
            array (
                'id' => 168,
                'id_solicitud' => NULL,
                'codigo' => '10379-3',
                'elemento' => 'JERINGA 5 ml',
                'id_clasificacion' => 2,
            ),
            168 => 
            array (
                'id' => 169,
                'id_solicitud' => NULL,
                'codigo' => '18438',
                'elemento' => 'KIT ULTRACITOLOGICO TALLA M, LAMINA ESMERILADA',
                'id_clasificacion' => 2,
            ),
            169 => 
            array (
                'id' => 170,
                'id_solicitud' => NULL,
                'codigo' => '18438-1',
                'elemento' => 'KIT ULTRACITOLOGICO TALLA S, LAMINA ESMERILADA',
                'id_clasificacion' => 2,
            ),
            170 => 
            array (
                'id' => 171,
                'id_solicitud' => NULL,
                'codigo' => '19461',
            'elemento' => 'LANCETA SAFE-T-PRO PLUS AUTOMATICA, (NO REQUIERE DE DISPOSITIVO DE PUNCION)',
                'id_clasificacion' => 2,
            ),
            171 => 
            array (
                'id' => 172,
                'id_solicitud' => NULL,
                'codigo' => '19461-1',
                'elemento' => 'LANCETA X 200 UNIDADES',
                'id_clasificacion' => 2,
            ),
            172 => 
            array (
                'id' => 173,
                'id_solicitud' => NULL,
                'codigo' => '7339',
                'elemento' => 'MANGO BISTURI',
                'id_clasificacion' => 2,
            ),
            173 => 
            array (
                'id' => 174,
                'id_solicitud' => NULL,
                'codigo' => '17199',
                'elemento' => 'MASCARA DE OXIGENO ',
                'id_clasificacion' => 2,
            ),
            174 => 
            array (
                'id' => 175,
                'id_solicitud' => NULL,
                'codigo' => '17199-1',
                'elemento' => 'MASCARA OXIGENO PEDIATRICO',
                'id_clasificacion' => 2,
            ),
            175 => 
            array (
                'id' => 176,
                'id_solicitud' => NULL,
                'codigo' => '17199-2',
                'elemento' => 'MASCARA OXIGENO ADULTO',
                'id_clasificacion' => 2,
            ),
            176 => 
            array (
                'id' => 177,
                'id_solicitud' => NULL,
                'codigo' => '16446',
                'elemento' => 'MICRONEBULIZADOR',
                'id_clasificacion' => 2,
            ),
            177 => 
            array (
                'id' => 178,
                'id_solicitud' => NULL,
                'codigo' => '16446-1',
                'elemento' => 'MICRONEBULIZADOR ADULTO',
                'id_clasificacion' => 2,
            ),
            178 => 
            array (
                'id' => 179,
                'id_solicitud' => NULL,
                'codigo' => '16446-2',
                'elemento' => 'MICRONEBULIZADOR PEDIATRICO',
                'id_clasificacion' => 2,
            ),
            179 => 
            array (
                'id' => 180,
                'id_solicitud' => NULL,
                'codigo' => '16447',
                'elemento' => 'PAPEL ELECTROCARDIOGRAMA',
                'id_clasificacion' => 2,
            ),
            180 => 
            array (
                'id' => 181,
                'id_solicitud' => NULL,
                'codigo' => '16567',
                'elemento' => 'PELICULA RX',
                'id_clasificacion' => 2,
            ),
            181 => 
            array (
                'id' => 182,
                'id_solicitud' => NULL,
                'codigo' => '16489',
                'elemento' => 'PINZA ALGODONERA',
                'id_clasificacion' => 2,
            ),
            182 => 
            array (
                'id' => 183,
                'id_solicitud' => NULL,
                'codigo' => '27783',
                'elemento' => 'REPUESTOS CONO OTOSCOPIO',
                'id_clasificacion' => 2,
            ),
            183 => 
            array (
                'id' => 184,
                'id_solicitud' => NULL,
                'codigo' => '16451',
                'elemento' => 'SONDA MEDICO QUIRURGICA',
                'id_clasificacion' => 2,
            ),
            184 => 
            array (
                'id' => 185,
                'id_solicitud' => NULL,
                'codigo' => '4984',
                'elemento' => 'SUTURA',
                'id_clasificacion' => 2,
            ),
            185 => 
            array (
                'id' => 186,
                'id_solicitud' => NULL,
                'codigo' => '4985',
                'elemento' => 'TAPABOCA DESECHABLE',
                'id_clasificacion' => 2,
            ),
            186 => 
            array (
                'id' => 187,
                'id_solicitud' => NULL,
                'codigo' => '22148',
            'elemento' => 'TOALLA HUMEDA ALCOHOL (ISOPAÑIN)',
                'id_clasificacion' => 2,
            ),
            187 => 
            array (
                'id' => 188,
                'id_solicitud' => NULL,
                'codigo' => '6310',
                'elemento' => 'TUBO ENDOTRAQUEAL # 6.0',
                'id_clasificacion' => 2,
            ),
            188 => 
            array (
                'id' => 189,
                'id_solicitud' => NULL,
                'codigo' => '6310-1',
                'elemento' => 'TUBO ENDOTRAQUEAL # 6.5 REF. 1-7333-65',
                'id_clasificacion' => 2,
            ),
            189 => 
            array (
                'id' => 190,
                'id_solicitud' => NULL,
                'codigo' => '6310-2',
                'elemento' => 'TUBO ENDOTRAQUEAL # 7.0',
                'id_clasificacion' => 2,
            ),
            190 => 
            array (
                'id' => 191,
                'id_solicitud' => NULL,
                'codigo' => '6310-3',
                'elemento' => 'TUBO ENDOTRAQUEAL # 7.5',
                'id_clasificacion' => 2,
            ),
            191 => 
            array (
                'id' => 192,
                'id_solicitud' => NULL,
                'codigo' => '6310-4',
                'elemento' => 'TUBO ENDOTRAQUEAL # 8.0',
                'id_clasificacion' => 2,
            ),
            192 => 
            array (
                'id' => 193,
                'id_solicitud' => NULL,
                'codigo' => '6310-5',
                'elemento' => 'TUBO ENDOTRAQUEAL # 8.5',
                'id_clasificacion' => 2,
            ),
            193 => 
            array (
                'id' => 194,
                'id_solicitud' => NULL,
                'codigo' => '21119',
                'elemento' => 'VASELINA PURA USP',
                'id_clasificacion' => 2,
            ),
            194 => 
            array (
                'id' => 195,
                'id_solicitud' => NULL,
                'codigo' => '6343',
                'elemento' => 'VENDA',
                'id_clasificacion' => 2,
            ),
            195 => 
            array (
                'id' => 196,
                'id_solicitud' => NULL,
                'codigo' => '6343-1',
                'elemento' => 'VENDA DE ALGODON LAMINADO 4 X 5',
                'id_clasificacion' => 2,
            ),
            196 => 
            array (
                'id' => 197,
                'id_solicitud' => NULL,
                'codigo' => '6343-2',
                'elemento' => 'VENDA DE ALGODON LAMINADO 5 X 5',
                'id_clasificacion' => 2,
            ),
            197 => 
            array (
                'id' => 198,
                'id_solicitud' => NULL,
                'codigo' => '6343-3',
                'elemento' => 'VENDA ELASTICA DE 3 x 5 YARDAS',
                'id_clasificacion' => 2,
            ),
            198 => 
            array (
                'id' => 199,
                'id_solicitud' => NULL,
                'codigo' => '6343-4',
                'elemento' => 'VENDA ELASTICA DE 4 x 5 YARDAS',
                'id_clasificacion' => 2,
            ),
            199 => 
            array (
                'id' => 200,
                'id_solicitud' => NULL,
                'codigo' => '6343-5',
                'elemento' => 'VENDA ELASTICA DE 5 x 5 YARDAS',
                'id_clasificacion' => 2,
            ),
            200 => 
            array (
                'id' => 201,
                'id_solicitud' => NULL,
                'codigo' => '6343-6',
                'elemento' => 'VENDA ELASTICA DE 6 x 5 YARDAS',
                'id_clasificacion' => 2,
            ),
            201 => 
            array (
                'id' => 202,
                'id_solicitud' => NULL,
                'codigo' => '23514',
                'elemento' => 'ABREBOCAS',
                'id_clasificacion' => 3,
            ),
            202 => 
            array (
                'id' => 203,
                'id_solicitud' => NULL,
                'codigo' => '27783',
                'elemento' => 'ABRECORONAS',
                'id_clasificacion' => 3,
            ),
            203 => 
            array (
                'id' => 204,
                'id_solicitud' => NULL,
                'codigo' => '4951',
                'elemento' => 'AGUJA',
                'id_clasificacion' => 3,
            ),
            204 => 
            array (
                'id' => 205,
                'id_solicitud' => NULL,
                'codigo' => '4951-1',
            'elemento' => 'AGUJA CORTA (ODONTOLOGICA)',
                'id_clasificacion' => 3,
            ),
            205 => 
            array (
                'id' => 206,
                'id_solicitud' => NULL,
                'codigo' => '4956',
                'elemento' => 'AGUJA DE SUTURA 15',
                'id_clasificacion' => 3,
            ),
            206 => 
            array (
                'id' => 207,
                'id_solicitud' => NULL,
                'codigo' => '22068',
                'elemento' => 'AGUJA ENDEZE/IRRIGACONDUCTOS',
                'id_clasificacion' => 3,
            ),
            207 => 
            array (
                'id' => 208,
                'id_solicitud' => NULL,
                'codigo' => '4951-2',
            'elemento' => 'AGUJA LARGA (ODONTOLOGICA)',
                'id_clasificacion' => 3,
            ),
            208 => 
            array (
                'id' => 209,
                'id_solicitud' => NULL,
                'codigo' => '7979',
                'elemento' => 'ALGODÓN ROLLO/TACOS',
                'id_clasificacion' => 3,
            ),
            209 => 
            array (
                'id' => 210,
                'id_solicitud' => NULL,
                'codigo' => '12448',
                'elemento' => 'ALKACIDE GLUTARALDEHIDO POTENCIALIZADO',
                'id_clasificacion' => 3,
            ),
            210 => 
            array (
                'id' => 211,
                'id_solicitud' => NULL,
                'codigo' => '4989',
                'elemento' => 'ANESTESIA',
                'id_clasificacion' => 3,
            ),
            211 => 
            array (
                'id' => 212,
                'id_solicitud' => NULL,
                'codigo' => '4989-1 ',
                'elemento' => 'ANESTESIA LIDOCAINA',
                'id_clasificacion' => 3,
            ),
            212 => 
            array (
                'id' => 213,
                'id_solicitud' => NULL,
                'codigo' => '4989-2',
                'elemento' => 'ANESTESIA ONDONTOCAINA 3%',
                'id_clasificacion' => 3,
            ),
            213 => 
            array (
                'id' => 214,
                'id_solicitud' => NULL,
                'codigo' => '4989-3',
                'elemento' => 'ANESTESIA ROXICAINA FRASCO CON SPRAY ',
                'id_clasificacion' => 3,
            ),
            214 => 
            array (
                'id' => 215,
                'id_solicitud' => NULL,
                'codigo' => '10179-2',
            'elemento' => 'APLICADOR (ODONTOLOGIA)',
                'id_clasificacion' => 3,
            ),
            215 => 
            array (
                'id' => 216,
                'id_solicitud' => NULL,
                'codigo' => '7244',
                'elemento' => 'APLICADOR DE DYCAL',
                'id_clasificacion' => 3,
            ),
            216 => 
            array (
                'id' => 217,
                'id_solicitud' => NULL,
                'codigo' => '7244',
                'elemento' => 'APLICADOR RESINA LIQUIDA',
                'id_clasificacion' => 3,
            ),
            217 => 
            array (
                'id' => 218,
                'id_solicitud' => NULL,
                'codigo' => '4967',
                'elemento' => 'BABEROS',
                'id_clasificacion' => 3,
            ),
            218 => 
            array (
                'id' => 219,
                'id_solicitud' => NULL,
                'codigo' => '22068',
                'elemento' => 'BANDA METALICA',
                'id_clasificacion' => 3,
            ),
            219 => 
            array (
                'id' => 220,
                'id_solicitud' => NULL,
                'codigo' => '22068-1',
                'elemento' => 'BANDA METALICA / ANCHA',
                'id_clasificacion' => 3,
            ),
            220 => 
            array (
                'id' => 221,
                'id_solicitud' => NULL,
                'codigo' => '22068-2',
                'elemento' => 'BANDA METALICA / ANGOSTA',
                'id_clasificacion' => 3,
            ),
            221 => 
            array (
                'id' => 222,
                'id_solicitud' => NULL,
                'codigo' => '7245',
                'elemento' => 'BANDA PORTA MATRIZ',
                'id_clasificacion' => 3,
            ),
            222 => 
            array (
                'id' => 223,
                'id_solicitud' => NULL,
                'codigo' => '25577',
                'elemento' => 'BARNIZ DE FLUOR',
                'id_clasificacion' => 3,
            ),
            223 => 
            array (
                'id' => 224,
                'id_solicitud' => NULL,
                'codigo' => '5238',
                'elemento' => 'BICARBONATO',
                'id_clasificacion' => 3,
            ),
            224 => 
            array (
                'id' => 225,
                'id_solicitud' => NULL,
                'codigo' => '17248',
                'elemento' => 'CAMPO QURURGICO ODONTOLOGICO',
                'id_clasificacion' => 3,
            ),
            225 => 
            array (
                'id' => 226,
                'id_solicitud' => NULL,
                'codigo' => '16463-1',
                'elemento' => 'CEMENTO FOSFATO KIT',
                'id_clasificacion' => 3,
            ),
            226 => 
            array (
                'id' => 227,
                'id_solicitud' => NULL,
                'codigo' => '16463-3',
                'elemento' => 'CEMENTO M.T.A - ANGELUS',
                'id_clasificacion' => 3,
            ),
            227 => 
            array (
                'id' => 228,
                'id_solicitud' => NULL,
                'codigo' => '16463-2',
            'elemento' => 'CEMENTO OBTURACION CONDUCTOS ( TOP-SEAL)',
                'id_clasificacion' => 3,
            ),
            228 => 
            array (
                'id' => 229,
                'id_solicitud' => NULL,
                'codigo' => '16463',
                'elemento' => 'CEMENTO ODONTOLOGICO',
                'id_clasificacion' => 3,
            ),
            229 => 
            array (
                'id' => 230,
                'id_solicitud' => NULL,
                'codigo' => '16463-4',
                'elemento' => 'CEMENTO QUIRURGICO CJA COE PAK',
                'id_clasificacion' => 3,
            ),
            230 => 
            array (
                'id' => 231,
                'id_solicitud' => NULL,
                'codigo' => '16463-5',
                'elemento' => 'CEMENTO TEMPORAL TEMP BOND',
                'id_clasificacion' => 3,
            ),
            231 => 
            array (
                'id' => 232,
                'id_solicitud' => NULL,
                'codigo' => '4995',
                'elemento' => 'CEPILLO PARA PROFILAXIS',
                'id_clasificacion' => 3,
            ),
            232 => 
            array (
                'id' => 233,
                'id_solicitud' => NULL,
                'codigo' => '10446',
                'elemento' => 'CINTA CONTROL ESTERILIZACION',
                'id_clasificacion' => 3,
            ),
            233 => 
            array (
                'id' => 234,
                'id_solicitud' => NULL,
                'codigo' => '12372',
                'elemento' => 'COLTOSOL. FRASCO COLTENE',
                'id_clasificacion' => 3,
            ),
            234 => 
            array (
                'id' => 235,
                'id_solicitud' => NULL,
                'codigo' => '16466',
                'elemento' => 'CONOS DE GUTAPERCHA',
                'id_clasificacion' => 3,
            ),
            235 => 
            array (
                'id' => 236,
                'id_solicitud' => NULL,
                'codigo' => '16466-1',
                'elemento' => 'CONOS DE GUTAPERCHA 15',
                'id_clasificacion' => 3,
            ),
            236 => 
            array (
                'id' => 237,
                'id_solicitud' => NULL,
                'codigo' => '16466-2',
                'elemento' => 'CONOS DE GUTAPERCHA 20',
                'id_clasificacion' => 3,
            ),
            237 => 
            array (
                'id' => 238,
                'id_solicitud' => NULL,
                'codigo' => '16466-3',
                'elemento' => 'CONOS DE GUTAPERCHA 25',
                'id_clasificacion' => 3,
            ),
            238 => 
            array (
                'id' => 239,
                'id_solicitud' => NULL,
                'codigo' => '16466-4',
                'elemento' => 'CONOS DE GUTAPERCHA 30',
                'id_clasificacion' => 3,
            ),
            239 => 
            array (
                'id' => 240,
                'id_solicitud' => NULL,
                'codigo' => '16466-5',
                'elemento' => 'CONOS DE GUTAPERCHA 35',
                'id_clasificacion' => 3,
            ),
            240 => 
            array (
                'id' => 241,
                'id_solicitud' => NULL,
                'codigo' => '16466-6',
                'elemento' => 'CONOS DE GUTAPERCHA 40',
                'id_clasificacion' => 3,
            ),
            241 => 
            array (
                'id' => 242,
                'id_solicitud' => NULL,
                'codigo' => '16466-7',
                'elemento' => 'CONOS DE GUTAPERCHA 45',
                'id_clasificacion' => 3,
            ),
            242 => 
            array (
                'id' => 243,
                'id_solicitud' => NULL,
                'codigo' => '16466-8',
                'elemento' => 'CONOS DE GUTAPERCHA 55',
                'id_clasificacion' => 3,
            ),
            243 => 
            array (
                'id' => 244,
                'id_solicitud' => NULL,
                'codigo' => '16466-9',
                'elemento' => 'CONOS DE GUTAPERCHA 60',
                'id_clasificacion' => 3,
            ),
            244 => 
            array (
                'id' => 245,
                'id_solicitud' => NULL,
                'codigo' => '16467',
                'elemento' => 'CUBETAS DESECHABLES PARA FLUOR M',
                'id_clasificacion' => 3,
            ),
            245 => 
            array (
                'id' => 246,
                'id_solicitud' => NULL,
                'codigo' => '16467-1',
                'elemento' => 'CUBETAS DESECHABLES PARA FLUOR S',
                'id_clasificacion' => 3,
            ),
            246 => 
            array (
                'id' => 247,
                'id_solicitud' => NULL,
                'codigo' => '27785',
                'elemento' => 'CUCHILLAS BISTURI N・15',
                'id_clasificacion' => 3,
            ),
            247 => 
            array (
                'id' => 248,
                'id_solicitud' => NULL,
                'codigo' => '7248',
                'elemento' => 'CUÑA ODONTOLOGICA',
                'id_clasificacion' => 3,
            ),
            248 => 
            array (
                'id' => 249,
                'id_solicitud' => NULL,
                'codigo' => '7248-1',
                'elemento' => 'CUÑAS DE MADERA PAQUE TE X 100',
                'id_clasificacion' => 3,
            ),
            249 => 
            array (
                'id' => 250,
                'id_solicitud' => NULL,
                'codigo' => '21567',
                'elemento' => 'CURETA 17/18 HU FRIDEY',
                'id_clasificacion' => 3,
            ),
            250 => 
            array (
                'id' => 251,
                'id_solicitud' => NULL,
                'codigo' => '19481',
            'elemento' => 'DESAMANCHADOR DENTAL (DETARTROL)',
                'id_clasificacion' => 3,
            ),
            251 => 
            array (
                'id' => 252,
                'id_solicitud' => NULL,
                'codigo' => '19481',
                'elemento' => 'DESMANCHADOR DENTAL',
                'id_clasificacion' => 3,
            ),
            252 => 
            array (
                'id' => 253,
                'id_solicitud' => NULL,
                'codigo' => '4997',
                'elemento' => 'DESMINERALIZANTE',
                'id_clasificacion' => 3,
            ),
            253 => 
            array (
                'id' => 254,
                'id_solicitud' => NULL,
                'codigo' => '4997-1',
                'elemento' => 'DESMINERALIZANTE EN GEL',
                'id_clasificacion' => 3,
            ),
            254 => 
            array (
                'id' => 255,
                'id_solicitud' => NULL,
                'codigo' => '5004',
            'elemento' => 'DETARFAR (PASTA PARA PROFILAXIS X 50GM) TUBO COLAPSIBLE',
                'id_clasificacion' => 3,
            ),
            255 => 
            array (
                'id' => 256,
                'id_solicitud' => NULL,
                'codigo' => '12301',
                'elemento' => 'DETERGENTE ENZIMATICO',
                'id_clasificacion' => 3,
            ),
            256 => 
            array (
                'id' => 257,
                'id_solicitud' => NULL,
                'codigo' => '12373',
                'elemento' => 'DISCOS SOFLEX M / CAJA X 100',
                'id_clasificacion' => 3,
            ),
            257 => 
            array (
                'id' => 258,
                'id_solicitud' => NULL,
                'codigo' => '25073',
                'elemento' => 'EMPACADORES ENDODONTICOS',
                'id_clasificacion' => 3,
            ),
            258 => 
            array (
                'id' => 259,
                'id_solicitud' => NULL,
                'codigo' => '27301',
                'elemento' => 'EMULADOR',
                'id_clasificacion' => 3,
            ),
            259 => 
            array (
                'id' => 260,
                'id_solicitud' => NULL,
                'codigo' => '27301-1',
                'elemento' => 'EMULADOR EMULADOR',
                'id_clasificacion' => 3,
            ),
            260 => 
            array (
                'id' => 261,
                'id_solicitud' => NULL,
                'codigo' => '27301-2',
                'elemento' => 'EMULADOR INTEGRADOR',
                'id_clasificacion' => 3,
            ),
            261 => 
            array (
                'id' => 262,
                'id_solicitud' => NULL,
                'codigo' => '6309',
                'elemento' => 'ENHEBRADORES',
                'id_clasificacion' => 3,
            ),
            262 => 
            array (
                'id' => 263,
                'id_solicitud' => NULL,
                'codigo' => '6309-1',
                'elemento' => 'ENHEBRADORES SEDA DENTAL / / PAQUETE',
                'id_clasificacion' => 3,
            ),
            263 => 
            array (
                'id' => 264,
                'id_solicitud' => NULL,
                'codigo' => '18309',
                'elemento' => 'ENJUAGUE BUCAL',
                'id_clasificacion' => 3,
            ),
            264 => 
            array (
                'id' => 265,
                'id_solicitud' => NULL,
                'codigo' => '18309-1',
                'elemento' => 'ENJUAGUE BUCAL CLOREX',
                'id_clasificacion' => 3,
            ),
            265 => 
            array (
                'id' => 266,
                'id_solicitud' => NULL,
                'codigo' => '18309-2',
                'elemento' => 'ENJUAGUE BUCAL COLGATE',
                'id_clasificacion' => 3,
            ),
            266 => 
            array (
                'id' => 267,
                'id_solicitud' => NULL,
                'codigo' => '4998',
                'elemento' => 'ESPEJO BUCAL',
                'id_clasificacion' => 3,
            ),
            267 => 
            array (
                'id' => 268,
                'id_solicitud' => NULL,
                'codigo' => '8527',
                'elemento' => 'ESPEJO ODONTOLOGICO',
                'id_clasificacion' => 3,
            ),
            268 => 
            array (
                'id' => 269,
                'id_solicitud' => NULL,
                'codigo' => '4998',
                'elemento' => 'ESPEJO SIN MANGO LUNA X 12',
                'id_clasificacion' => 3,
            ),
            269 => 
            array (
                'id' => 270,
                'id_solicitud' => NULL,
                'codigo' => '5000',
                'elemento' => 'ESPONJA PARA EXODONCIA',
                'id_clasificacion' => 3,
            ),
            270 => 
            array (
                'id' => 271,
                'id_solicitud' => NULL,
                'codigo' => '5000-1',
                'elemento' => 'ESPONJA QUIRURGICAS / HEMOSTATICA /',
                'id_clasificacion' => 3,
            ),
            271 => 
            array (
                'id' => 272,
                'id_solicitud' => NULL,
                'codigo' => '5001',
                'elemento' => 'EUGENOL',
                'id_clasificacion' => 3,
            ),
            272 => 
            array (
                'id' => 273,
                'id_solicitud' => NULL,
                'codigo' => '6751',
                'elemento' => 'EXPLORADOR DOBLE',
                'id_clasificacion' => 3,
            ),
            273 => 
            array (
                'id' => 274,
                'id_solicitud' => NULL,
                'codigo' => '6751-1',
                'elemento' => 'EXPLORADORES DE CONDUCTOS',
                'id_clasificacion' => 3,
            ),
            274 => 
            array (
                'id' => 275,
                'id_solicitud' => NULL,
                'codigo' => '6759',
                'elemento' => 'EYECTOR / DESECHABLE',
                'id_clasificacion' => 3,
            ),
            275 => 
            array (
                'id' => 276,
                'id_solicitud' => NULL,
                'codigo' => '17260-1',
                'elemento' => 'FLUOR ACIDULADO EN GEL FRASO',
                'id_clasificacion' => 3,
            ),
            276 => 
            array (
                'id' => 277,
                'id_solicitud' => NULL,
                'codigo' => '25577',
                'elemento' => 'FLUOR BARNIZ / TUBO DURAPHAT FRASCO',
                'id_clasificacion' => 3,
            ),
            277 => 
            array (
                'id' => 278,
                'id_solicitud' => NULL,
                'codigo' => '17260',
            'elemento' => 'FLUOR EN GEL (FLORURO DE SODIO) FRASCO X 240 EUFAR',
                'id_clasificacion' => 3,
            ),
            278 => 
            array (
                'id' => 279,
                'id_solicitud' => NULL,
                'codigo' => '23338',
                'elemento' => 'FP3',
                'id_clasificacion' => 3,
            ),
            279 => 
            array (
                'id' => 280,
                'id_solicitud' => NULL,
                'codigo' => '27583',
                'elemento' => 'FRESA QUIRUGICA',
                'id_clasificacion' => 3,
            ),
            280 => 
            array (
                'id' => 281,
                'id_solicitud' => NULL,
                'codigo' => '27583-2',
                'elemento' => 'FRESA QUIRUGICA CARBURO',
                'id_clasificacion' => 3,
            ),
            281 => 
            array (
                'id' => 282,
                'id_solicitud' => NULL,
                'codigo' => '27583-2-1',
                'elemento' => 'FRESA QUIRUGICA CARBURO 703 PM',
                'id_clasificacion' => 3,
            ),
            282 => 
            array (
                'id' => 283,
                'id_solicitud' => NULL,
                'codigo' => '27583-2-2',
                'elemento' => 'FRESA QUIRUGICA CARBURO F68',
                'id_clasificacion' => 3,
            ),
            283 => 
            array (
                'id' => 284,
                'id_solicitud' => NULL,
                'codigo' => '27583-2-3',
                'elemento' => 'FRESA QUIRUGICA CARBURO ROMPECORONA',
                'id_clasificacion' => 3,
            ),
            284 => 
            array (
                'id' => 285,
                'id_solicitud' => NULL,
                'codigo' => '27583-1',
                'elemento' => 'FRESA QUIRUGICA DIAMANTADA ',
                'id_clasificacion' => 3,
            ),
            285 => 
            array (
                'id' => 286,
                'id_solicitud' => NULL,
                'codigo' => '27583-1-1',
                'elemento' => 'FRESA QUIRUGICA DIAMANTADA 1014',
                'id_clasificacion' => 3,
            ),
            286 => 
            array (
                'id' => 287,
                'id_solicitud' => NULL,
                'codigo' => '27583-1-2',
                'elemento' => 'FRESA QUIRUGICA DIAMANTADA 1015',
                'id_clasificacion' => 3,
            ),
            287 => 
            array (
                'id' => 288,
                'id_solicitud' => NULL,
                'codigo' => '27583-1-3',
                'elemento' => 'FRESA QUIRUGICA DIAMANTADA 1016',
                'id_clasificacion' => 3,
            ),
            288 => 
            array (
                'id' => 289,
                'id_solicitud' => NULL,
                'codigo' => '27583-1-4',
                'elemento' => 'FRESA QUIRUGICA DIAMANTADA 2200',
                'id_clasificacion' => 3,
            ),
            289 => 
            array (
                'id' => 290,
                'id_solicitud' => NULL,
                'codigo' => '27583-1-5',
                'elemento' => 'FRESA QUIRUGICA DIAMANTADA 30-15',
                'id_clasificacion' => 3,
            ),
            290 => 
            array (
                'id' => 291,
                'id_solicitud' => NULL,
                'codigo' => '27583-1-6',
                'elemento' => 'FRESA QUIRUGICA DIAMANTADA 3118',
                'id_clasificacion' => 3,
            ),
            291 => 
            array (
                'id' => 292,
                'id_solicitud' => NULL,
                'codigo' => '27583-1-7',
                'elemento' => 'FRESA QUIRUGICA DIAMANTADA 3203 FF',
                'id_clasificacion' => 3,
            ),
            292 => 
            array (
                'id' => 293,
                'id_solicitud' => NULL,
                'codigo' => '27583-4',
                'elemento' => 'FRESA QUIRUGICA GATES',
                'id_clasificacion' => 3,
            ),
            293 => 
            array (
                'id' => 294,
                'id_solicitud' => NULL,
                'codigo' => '27583-4-1',
                'elemento' => 'FRESA QUIRUGICA GATES #1',
                'id_clasificacion' => 3,
            ),
            294 => 
            array (
                'id' => 295,
                'id_solicitud' => NULL,
                'codigo' => '27583-4-2',
                'elemento' => 'FRESA QUIRUGICA GATES #2',
                'id_clasificacion' => 3,
            ),
            295 => 
            array (
                'id' => 296,
                'id_solicitud' => NULL,
                'codigo' => '27583-4-3',
                'elemento' => 'FRESA QUIRUGICA GATES #3',
                'id_clasificacion' => 3,
            ),
            296 => 
            array (
                'id' => 297,
                'id_solicitud' => NULL,
                'codigo' => '27583-8',
                'elemento' => 'FRESA QUIRUGICA GORDA',
                'id_clasificacion' => 3,
            ),
            297 => 
            array (
                'id' => 298,
                'id_solicitud' => NULL,
                'codigo' => '27583-8-1',
                'elemento' => 'FRESA QUIRUGICA GORDA 861-014XF',
                'id_clasificacion' => 3,
            ),
            298 => 
            array (
                'id' => 299,
                'id_solicitud' => NULL,
                'codigo' => '27583-8-2',
                'elemento' => 'FRESA QUIRUGICA GORDA 862-012',
                'id_clasificacion' => 3,
            ),
            299 => 
            array (
                'id' => 300,
                'id_solicitud' => NULL,
                'codigo' => '27583-8-3',
                'elemento' => 'FRESA QUIRUGICA GORDA 862-014 XF',
                'id_clasificacion' => 3,
            ),
            300 => 
            array (
                'id' => 301,
                'id_solicitud' => NULL,
                'codigo' => '27583-5',
                'elemento' => 'FRESA QUIRUGICA LARGO ',
                'id_clasificacion' => 3,
            ),
            301 => 
            array (
                'id' => 302,
                'id_solicitud' => NULL,
                'codigo' => '27583-5-1',
                'elemento' => 'FRESA QUIRUGICA LARGO 701',
                'id_clasificacion' => 3,
            ),
            302 => 
            array (
                'id' => 303,
                'id_solicitud' => NULL,
                'codigo' => '27583-5-2',
                'elemento' => 'FRESA QUIRUGICA LARGO 702',
                'id_clasificacion' => 3,
            ),
            303 => 
            array (
                'id' => 304,
                'id_solicitud' => NULL,
                'codigo' => '27583-5-3',
                'elemento' => 'FRESA QUIRUGICA LARGO 703',
                'id_clasificacion' => 3,
            ),
            304 => 
            array (
                'id' => 305,
                'id_solicitud' => NULL,
                'codigo' => '27583-3',
                'elemento' => 'FRESA QUIRUGICA PERA FINA 018',
                'id_clasificacion' => 3,
            ),
            305 => 
            array (
                'id' => 306,
                'id_solicitud' => NULL,
                'codigo' => '27583-7',
                'elemento' => 'FRESA QUIRUGICA PISO',
                'id_clasificacion' => 3,
            ),
            306 => 
            array (
                'id' => 307,
                'id_solicitud' => NULL,
                'codigo' => '27583-7-1',
                'elemento' => 'FRESA QUIRUGICA PISO #1',
                'id_clasificacion' => 3,
            ),
            307 => 
            array (
                'id' => 308,
                'id_solicitud' => NULL,
                'codigo' => '27583-7-2',
                'elemento' => 'FRESA QUIRUGICA PISO #2',
                'id_clasificacion' => 3,
            ),
            308 => 
            array (
                'id' => 309,
                'id_solicitud' => NULL,
                'codigo' => '27583-6',
                'elemento' => 'FRESA QUIRUGICA ZECRIA CIRUGIA',
                'id_clasificacion' => 3,
            ),
            309 => 
            array (
                'id' => 310,
                'id_solicitud' => NULL,
                'codigo' => '27583-6-1',
                'elemento' => 'FRESA QUIRUGICA ZECRIA CIRUGIA 700',
                'id_clasificacion' => 3,
            ),
            310 => 
            array (
                'id' => 311,
                'id_solicitud' => NULL,
                'codigo' => '27583-6-2',
                'elemento' => 'FRESA QUIRUGICA ZECRIA CIRUGIA 703',
                'id_clasificacion' => 3,
            ),
            311 => 
            array (
                'id' => 312,
                'id_solicitud' => NULL,
                'codigo' => '27583-9',
                'elemento' => 'FRESA QUIRURGICA LENTULOS ',
                'id_clasificacion' => 3,
            ),
            312 => 
            array (
                'id' => 313,
                'id_solicitud' => NULL,
                'codigo' => '23043',
                'elemento' => 'FUNDA PARA CIRUGIA',
                'id_clasificacion' => 3,
            ),
            313 => 
            array (
                'id' => 314,
                'id_solicitud' => NULL,
                'codigo' => '23852',
                'elemento' => 'GRAPAS HUFRIEDY',
                'id_clasificacion' => 3,
            ),
            314 => 
            array (
                'id' => 315,
                'id_solicitud' => NULL,
                'codigo' => '23852-1',
                'elemento' => 'GRAPAS MARIPOSA # 0',
                'id_clasificacion' => 3,
            ),
            315 => 
            array (
                'id' => 316,
                'id_solicitud' => NULL,
                'codigo' => '23852-2',
                'elemento' => 'GRAPAS MARIPOSA # 00',
                'id_clasificacion' => 3,
            ),
            316 => 
            array (
                'id' => 317,
                'id_solicitud' => NULL,
                'codigo' => '23852-3',
                'elemento' => 'GRAPAS MARIPOSA # 27',
                'id_clasificacion' => 3,
            ),
            317 => 
            array (
                'id' => 318,
                'id_solicitud' => NULL,
                'codigo' => '23852-4',
                'elemento' => 'GRAPAS MARIPOSA # 6',
                'id_clasificacion' => 3,
            ),
            318 => 
            array (
                'id' => 319,
                'id_solicitud' => NULL,
                'codigo' => '7252',
                'elemento' => 'HEMOSTATICA LIQUIDA',
                'id_clasificacion' => 3,
            ),
            319 => 
            array (
                'id' => 320,
                'id_solicitud' => NULL,
                'codigo' => '7252-1',
                'elemento' => 'HEMOSTATICO CLORURO ALUMINIO',
                'id_clasificacion' => 3,
            ),
            320 => 
            array (
                'id' => 321,
                'id_solicitud' => NULL,
                'codigo' => '5192',
                'elemento' => 'HIDROXIDO DE CALCIO',
                'id_clasificacion' => 3,
            ),
            321 => 
            array (
                'id' => 322,
                'id_solicitud' => NULL,
                'codigo' => '24516',
                'elemento' => 'INDICADOR BIOLOGICO',
                'id_clasificacion' => 3,
            ),
            322 => 
            array (
                'id' => 323,
                'id_solicitud' => NULL,
                'codigo' => '23338',
                'elemento' => 'INSTRUMENTO FP3',
                'id_clasificacion' => 3,
            ),
            323 => 
            array (
                'id' => 324,
                'id_solicitud' => NULL,
                'codigo' => '17717',
                'elemento' => 'IONOMERO KETAC MOLAR',
                'id_clasificacion' => 3,
            ),
            324 => 
            array (
                'id' => 325,
                'id_solicitud' => NULL,
                'codigo' => '17717-1',
                'elemento' => 'IONOMERO VITREBOND ',
                'id_clasificacion' => 3,
            ),
            325 => 
            array (
                'id' => 326,
                'id_solicitud' => NULL,
                'codigo' => '17717-2',
                'elemento' => 'IONOMERO VITREMER / KIT',
                'id_clasificacion' => 3,
            ),
            326 => 
            array (
                'id' => 327,
                'id_solicitud' => NULL,
                'codigo' => '10379',
                'elemento' => 'JERINGA TUBERCULINA 1 ML',
                'id_clasificacion' => 3,
            ),
            327 => 
            array (
                'id' => 328,
                'id_solicitud' => NULL,
                'codigo' => '16476-21',
                'elemento' => 'LIMA 15 - 40 PIEMRA SERIE 25 MM BLISTER',
                'id_clasificacion' => 3,
            ),
            328 => 
            array (
                'id' => 329,
                'id_solicitud' => NULL,
                'codigo' => '16476-22',
                'elemento' => 'LIMA 15 - 40 PIEMRA SERIE 28 MM BLISTER',
                'id_clasificacion' => 3,
            ),
            329 => 
            array (
                'id' => 330,
                'id_solicitud' => NULL,
                'codigo' => '16476-23',
                'elemento' => 'LIMA 15 - 40 PIEMRA SERIE 31 MM BLISTER',
                'id_clasificacion' => 3,
            ),
            330 => 
            array (
                'id' => 331,
                'id_solicitud' => NULL,
                'codigo' => '16476-24',
                'elemento' => 'LIMA 45-80 SEGUNDA SERIE 25 MM BLISTER',
                'id_clasificacion' => 3,
            ),
            331 => 
            array (
                'id' => 332,
                'id_solicitud' => NULL,
                'codigo' => '16476-25',
                'elemento' => 'LIMA 45-80 SEGUNDA SERIE 28 MM BLISTER',
                'id_clasificacion' => 3,
            ),
            332 => 
            array (
                'id' => 333,
                'id_solicitud' => NULL,
                'codigo' => '16476-26',
                'elemento' => 'LIMA 45-80 SEGUNDA SERIE 31 MM BLISTER',
                'id_clasificacion' => 3,
            ),
            333 => 
            array (
                'id' => 334,
                'id_solicitud' => NULL,
                'codigo' => '23889',
                'elemento' => 'LIMA DE HUESO',
                'id_clasificacion' => 3,
            ),
            334 => 
            array (
                'id' => 335,
                'id_solicitud' => NULL,
                'codigo' => '16476',
                'elemento' => 'LIMA ODONTOLOGICA',
                'id_clasificacion' => 3,
            ),
            335 => 
            array (
                'id' => 336,
                'id_solicitud' => NULL,
                'codigo' => '16476-3',
                'elemento' => 'LIMA ODONTOLOGICA 10',
                'id_clasificacion' => 3,
            ),
            336 => 
            array (
                'id' => 337,
                'id_solicitud' => NULL,
                'codigo' => '16476-4',
                'elemento' => 'LIMA ODONTOLOGICA 15',
                'id_clasificacion' => 3,
            ),
            337 => 
            array (
                'id' => 338,
                'id_solicitud' => NULL,
                'codigo' => '16476-5',
                'elemento' => 'LIMA ODONTOLOGICA 20',
                'id_clasificacion' => 3,
            ),
            338 => 
            array (
                'id' => 339,
                'id_solicitud' => NULL,
                'codigo' => '16476-6',
                'elemento' => 'LIMA ODONTOLOGICA 25',
                'id_clasificacion' => 3,
            ),
            339 => 
            array (
                'id' => 340,
                'id_solicitud' => NULL,
                'codigo' => '16476-7',
                'elemento' => 'LIMA ODONTOLOGICA 30',
                'id_clasificacion' => 3,
            ),
            340 => 
            array (
                'id' => 341,
                'id_solicitud' => NULL,
                'codigo' => '16476-8',
                'elemento' => 'LIMA ODONTOLOGICA 35',
                'id_clasificacion' => 3,
            ),
            341 => 
            array (
                'id' => 342,
                'id_solicitud' => NULL,
                'codigo' => '16476-9',
                'elemento' => 'LIMA ODONTOLOGICA 40',
                'id_clasificacion' => 3,
            ),
            342 => 
            array (
                'id' => 343,
                'id_solicitud' => NULL,
                'codigo' => '16476-10',
                'elemento' => 'LIMA ODONTOLOGICA 45',
                'id_clasificacion' => 3,
            ),
            343 => 
            array (
                'id' => 344,
                'id_solicitud' => NULL,
                'codigo' => '16476-11',
                'elemento' => 'LIMA ODONTOLOGICA 50',
                'id_clasificacion' => 3,
            ),
            344 => 
            array (
                'id' => 345,
                'id_solicitud' => NULL,
                'codigo' => '16476-12',
                'elemento' => 'LIMA ODONTOLOGICA 55',
                'id_clasificacion' => 3,
            ),
            345 => 
            array (
                'id' => 346,
                'id_solicitud' => NULL,
                'codigo' => '16476-1',
                'elemento' => 'LIMA ODONTOLOGICA 6',
                'id_clasificacion' => 3,
            ),
            346 => 
            array (
                'id' => 347,
                'id_solicitud' => NULL,
                'codigo' => '16476-2',
                'elemento' => 'LIMA ODONTOLOGICA 8',
                'id_clasificacion' => 3,
            ),
            347 => 
            array (
                'id' => 348,
                'id_solicitud' => NULL,
                'codigo' => '16476-13',
                'elemento' => 'LIMA ODONTOLOGICA No 15 / FLEXOFILE X 28 MM BLSITER',
                'id_clasificacion' => 3,
            ),
            348 => 
            array (
                'id' => 349,
                'id_solicitud' => NULL,
                'codigo' => '16476-14',
                'elemento' => 'LIMA ODONTOLOGICA No 15 / FLEXOFILE X 31 MM BLSITER',
                'id_clasificacion' => 3,
            ),
            349 => 
            array (
                'id' => 350,
                'id_solicitud' => NULL,
                'codigo' => '16476-15',
                'elemento' => 'LIMA ODONTOLOGICA No 20 / FLEXOFILE 28 MM BLISTER',
                'id_clasificacion' => 3,
            ),
            350 => 
            array (
                'id' => 351,
                'id_solicitud' => NULL,
                'codigo' => '16476-17',
                'elemento' => 'LIMA ODONTOLOGICA No 25 / FLEXOFILE X 28 MM BLSTER',
                'id_clasificacion' => 3,
            ),
            351 => 
            array (
                'id' => 352,
                'id_solicitud' => NULL,
                'codigo' => '16476-18',
                'elemento' => 'LIMA ODONTOLOGICA No 25 / FLEXOFILE X 31 MM BLSTER',
                'id_clasificacion' => 3,
            ),
            352 => 
            array (
                'id' => 353,
                'id_solicitud' => NULL,
                'codigo' => '16476-16',
                'elemento' => 'LIMA ODONTOLOGICA No. 20 / FLEXOFILE 31 MM BLISTER',
                'id_clasificacion' => 3,
            ),
            353 => 
            array (
                'id' => 354,
                'id_solicitud' => NULL,
                'codigo' => '16476-19',
                'elemento' => 'LIMA ODONTOLOGICA No. 30 / FLEXOFILE 28 MM BLISTER',
                'id_clasificacion' => 3,
            ),
            354 => 
            array (
                'id' => 355,
                'id_solicitud' => NULL,
                'codigo' => '16476-20',
                'elemento' => 'LIMA ODONTOLOGICA No. 30 / FLEXOFILE 31 MM BLSITER',
                'id_clasificacion' => 3,
            ),
            355 => 
            array (
                'id' => 356,
                'id_solicitud' => NULL,
                'codigo' => '16485',
                'elemento' => 'LUBRICANTE ODONTOLOGICO RP PREC',
                'id_clasificacion' => 3,
            ),
            356 => 
            array (
                'id' => 357,
                'id_solicitud' => NULL,
                'codigo' => '7339',
                'elemento' => 'MANGO DE BISTURI',
                'id_clasificacion' => 3,
            ),
            357 => 
            array (
                'id' => 358,
                'id_solicitud' => NULL,
                'codigo' => '23904',
                'elemento' => 'MICRO ESPEJO QUIRURGICO',
                'id_clasificacion' => 3,
            ),
            358 => 
            array (
                'id' => 359,
                'id_solicitud' => NULL,
                'codigo' => '7244',
            'elemento' => 'MICROAPLICADOR PROTEK PARA RESINA CAJA X 100 (FINE)',
                'id_clasificacion' => 3,
            ),
            359 => 
            array (
                'id' => 360,
                'id_solicitud' => NULL,
                'codigo' => '6361',
                'elemento' => 'PAPEL ARTICULAR',
                'id_clasificacion' => 3,
            ),
            360 => 
            array (
                'id' => 361,
                'id_solicitud' => NULL,
                'codigo' => '6361',
                'elemento' => 'PAPEL DE ARTICULAR BLEU RED / CAJA X 12 CUADERNILLOS',
                'id_clasificacion' => 3,
            ),
            361 => 
            array (
                'id' => 362,
                'id_solicitud' => NULL,
                'codigo' => '16540',
                'elemento' => 'PAPEL TERMICO PARA IMPRESORA AUTOCLAVE E9 ME',
                'id_clasificacion' => 3,
            ),
            362 => 
            array (
                'id' => 363,
                'id_solicitud' => NULL,
                'codigo' => '16480',
                'elemento' => 'PAPEL VINIL CONTRAINFECCION',
                'id_clasificacion' => 3,
            ),
            363 => 
            array (
                'id' => 364,
                'id_solicitud' => NULL,
                'codigo' => '5004',
                'elemento' => 'PASTA PARA PROFILAXIS',
                'id_clasificacion' => 3,
            ),
            364 => 
            array (
                'id' => 365,
                'id_solicitud' => NULL,
                'codigo' => '17597',
                'elemento' => 'PERBORATO DE HIDROGENO FRASCO',
                'id_clasificacion' => 3,
            ),
            365 => 
            array (
                'id' => 366,
                'id_solicitud' => NULL,
                'codigo' => '6874',
                'elemento' => 'PERBORATO DE SODIO /FV 09/2008 FRASCO, PRODONT',
                'id_clasificacion' => 3,
            ),
            366 => 
            array (
                'id' => 367,
                'id_solicitud' => NULL,
                'codigo' => '6760',
                'elemento' => 'PIEDRAS BLANCAS',
                'id_clasificacion' => 3,
            ),
            367 => 
            array (
                'id' => 368,
                'id_solicitud' => NULL,
                'codigo' => '16484',
                'elemento' => 'PORTA AMALGAMA',
                'id_clasificacion' => 3,
            ),
            368 => 
            array (
                'id' => 369,
                'id_solicitud' => NULL,
                'codigo' => '6329',
                'elemento' => 'PUNTA DE PAPEL',
                'id_clasificacion' => 3,
            ),
            369 => 
            array (
                'id' => 370,
                'id_solicitud' => NULL,
                'codigo' => '16605',
                'elemento' => 'PUNTA JERINGA',
                'id_clasificacion' => 3,
            ),
            370 => 
            array (
                'id' => 371,
                'id_solicitud' => NULL,
                'codigo' => '6757',
                'elemento' => 'PUNTAS DE CAVITRION',
                'id_clasificacion' => 3,
            ),
            371 => 
            array (
                'id' => 372,
                'id_solicitud' => NULL,
                'codigo' => '6329-1',
                'elemento' => 'PUNTAS DE PAPEL PARA ENDODONCIA 15 - 40 CAJA X 120 NEW STEECTIC',
                'id_clasificacion' => 3,
            ),
            372 => 
            array (
                'id' => 373,
                'id_solicitud' => NULL,
                'codigo' => '6329-2',
                'elemento' => 'PUNTAS DE PAPEL PARA ENDODONCIA 30',
                'id_clasificacion' => 3,
            ),
            373 => 
            array (
                'id' => 374,
                'id_solicitud' => NULL,
                'codigo' => '6329-3',
                'elemento' => 'PUNTAS DE PAPEL PARA ENDODONCIA 35',
                'id_clasificacion' => 3,
            ),
            374 => 
            array (
                'id' => 375,
                'id_solicitud' => NULL,
                'codigo' => '6329-4',
                'elemento' => 'PUNTAS DE PAPEL PARA ENDODONCIA 40',
                'id_clasificacion' => 3,
            ),
            375 => 
            array (
                'id' => 376,
                'id_solicitud' => NULL,
                'codigo' => '6329-5',
                'elemento' => 'PUNTAS DE PAPEL PARA ENDODONCIA 45,80 CAJA X 120 NEW STEECTIC',
                'id_clasificacion' => 3,
            ),
            376 => 
            array (
                'id' => 377,
                'id_solicitud' => NULL,
                'codigo' => '16605',
                'elemento' => 'PUNTAS JERINGA TRIPLE',
                'id_clasificacion' => 3,
            ),
            377 => 
            array (
                'id' => 378,
                'id_solicitud' => NULL,
                'codigo' => '16468',
            'elemento' => 'REFRIGERANTE ODONTOLOGICO (ENDO ICE) / SPRAY / 200ML',
                'id_clasificacion' => 3,
            ),
            378 => 
            array (
                'id' => 379,
                'id_solicitud' => NULL,
                'codigo' => '5006',
                'elemento' => 'RESINA',
                'id_clasificacion' => 3,
            ),
            379 => 
            array (
                'id' => 380,
                'id_solicitud' => NULL,
                'codigo' => '5006-11',
                'elemento' => 'RESINA FLUIDA / JERIGA A2',
                'id_clasificacion' => 3,
            ),
            380 => 
            array (
                'id' => 381,
                'id_solicitud' => NULL,
                'codigo' => '5006-12',
                'elemento' => 'RESINA FLUIDA / JERIGA A3',
                'id_clasificacion' => 3,
            ),
            381 => 
            array (
                'id' => 382,
                'id_solicitud' => NULL,
                'codigo' => '5006-7',
            'elemento' => 'RESINA P60 / JERINGA (A2) 4 GRS',
                'id_clasificacion' => 3,
            ),
            382 => 
            array (
                'id' => 383,
                'id_solicitud' => NULL,
                'codigo' => '5006-8',
            'elemento' => 'RESINA P60 / JERINGA (A3) / 4 GRS',
                'id_clasificacion' => 3,
            ),
            383 => 
            array (
                'id' => 384,
                'id_solicitud' => NULL,
                'codigo' => '5006-9',
            'elemento' => 'RESINA P60 / JERINGA (B2) / 4 GRS',
                'id_clasificacion' => 3,
            ),
            384 => 
            array (
                'id' => 385,
                'id_solicitud' => NULL,
                'codigo' => '5006-10',
            'elemento' => 'RESINA P60 / JERINGA (C2) / 4 GRS',
                'id_clasificacion' => 3,
            ),
            385 => 
            array (
                'id' => 386,
                'id_solicitud' => NULL,
                'codigo' => '5006-1',
                'elemento' => 'RESINA Z350 A2B',
                'id_clasificacion' => 3,
            ),
            386 => 
            array (
                'id' => 387,
                'id_solicitud' => NULL,
                'codigo' => '5006-3',
                'elemento' => 'RESINA Z350 A3.5B',
                'id_clasificacion' => 3,
            ),
            387 => 
            array (
                'id' => 388,
                'id_solicitud' => NULL,
                'codigo' => '5006-2',
                'elemento' => 'RESINA Z350 A3B',
                'id_clasificacion' => 3,
            ),
            388 => 
            array (
                'id' => 389,
                'id_solicitud' => NULL,
                'codigo' => '5006-4',
                'elemento' => 'RESINA Z350 B2B',
                'id_clasificacion' => 3,
            ),
            389 => 
            array (
                'id' => 390,
                'id_solicitud' => NULL,
                'codigo' => '5006-5',
                'elemento' => 'RESINA Z350 B3B',
                'id_clasificacion' => 3,
            ),
            390 => 
            array (
                'id' => 391,
                'id_solicitud' => NULL,
                'codigo' => '5006-6',
                'elemento' => 'RESINA Z350 C2B',
                'id_clasificacion' => 3,
            ),
            391 => 
            array (
                'id' => 392,
                'id_solicitud' => NULL,
                'codigo' => '5016',
                'elemento' => 'REVELADOR DE PLACA',
                'id_clasificacion' => 3,
            ),
            392 => 
            array (
                'id' => 393,
                'id_solicitud' => NULL,
                'codigo' => '6881',
                'elemento' => 'SEDA DENTAL',
                'id_clasificacion' => 3,
            ),
            393 => 
            array (
                'id' => 394,
                'id_solicitud' => NULL,
                'codigo' => '5015',
                'elemento' => 'SELLANTE DE FOTOCURADO KIT',
                'id_clasificacion' => 3,
            ),
            394 => 
            array (
                'id' => 395,
                'id_solicitud' => NULL,
                'codigo' => '15391',
                'elemento' => 'SONDA PERIODONTAL',
                'id_clasificacion' => 3,
            ),
            395 => 
            array (
                'id' => 396,
                'id_solicitud' => NULL,
                'codigo' => '11187',
                'elemento' => 'SULTAFO DE SODIO',
                'id_clasificacion' => 3,
            ),
            396 => 
            array (
                'id' => 397,
                'id_solicitud' => NULL,
                'codigo' => '4984',
                'elemento' => 'SUTURA ',
                'id_clasificacion' => 3,
            ),
            397 => 
            array (
                'id' => 398,
                'id_solicitud' => NULL,
                'codigo' => '4984-1',
                'elemento' => 'SUTURA CARRETE DE SUTURA # 3.0',
                'id_clasificacion' => 3,
            ),
            398 => 
            array (
                'id' => 399,
                'id_solicitud' => NULL,
                'codigo' => '1984-3',
                'elemento' => 'SUTURA DE SEDA /5/0/',
                'id_clasificacion' => 3,
            ),
            399 => 
            array (
                'id' => 400,
                'id_solicitud' => NULL,
                'codigo' => '4984-2',
                'elemento' => 'SUTURA SEDA  / 3/0 / ',
                'id_clasificacion' => 3,
            ),
            400 => 
            array (
                'id' => 401,
                'id_solicitud' => NULL,
                'codigo' => '4984-3',
                'elemento' => 'SUTURA SEDA  / 4/0 /',
                'id_clasificacion' => 3,
            ),
            401 => 
            array (
                'id' => 402,
                'id_solicitud' => NULL,
                'codigo' => '16488',
                'elemento' => 'TELA CAUCHO',
                'id_clasificacion' => 3,
            ),
            402 => 
            array (
                'id' => 403,
                'id_solicitud' => NULL,
                'codigo' => '16488-1',
                'elemento' => 'TELA DE CAUCHO 5X5',
                'id_clasificacion' => 3,
            ),
            403 => 
            array (
                'id' => 404,
                'id_solicitud' => NULL,
                'codigo' => '16488-2',
                'elemento' => 'TELA DE CAUCHO 6X6',
                'id_clasificacion' => 3,
            ),
            404 => 
            array (
                'id' => 405,
                'id_solicitud' => NULL,
                'codigo' => '5018',
                'elemento' => 'TIRAS DE LIJA METALICA',
                'id_clasificacion' => 3,
            ),
            405 => 
            array (
                'id' => 406,
                'id_solicitud' => NULL,
                'codigo' => '17308',
                'elemento' => 'TIRAS MYLAR',
                'id_clasificacion' => 3,
            ),
            406 => 
            array (
                'id' => 407,
                'id_solicitud' => NULL,
                'codigo' => '25578',
                'elemento' => 'TOPES PARA LIMAS',
                'id_clasificacion' => 3,
            ),
            407 => 
            array (
                'id' => 408,
                'id_solicitud' => NULL,
                'codigo' => '6360',
                'elemento' => 'VASO DAPPEN',
                'id_clasificacion' => 3,
            ),
            408 => 
            array (
                'id' => 409,
                'id_solicitud' => NULL,
                'codigo' => '6360-1',
                'elemento' => 'VASO DAPPEN PLASTICO',
                'id_clasificacion' => 3,
            ),
            409 => 
            array (
                'id' => 410,
                'id_solicitud' => NULL,
                'codigo' => '6360-2',
                'elemento' => 'VASO DAPPEN VIDRIO',
                'id_clasificacion' => 3,
            ),
            410 => 
            array (
                'id' => 411,
                'id_solicitud' => NULL,
                'codigo' => '5438',
                'elemento' => 'VASOS PLASTICOS PEQUEÑOS PAQ. X 50',
                'id_clasificacion' => 3,
            ),
            411 => 
            array (
                'id' => 412,
                'id_solicitud' => NULL,
                'codigo' => '16492',
                'elemento' => 'XILOL DISOLVENTE',
                'id_clasificacion' => 3,
            ),
            412 => 
            array (
                'id' => 413,
                'id_solicitud' => NULL,
                'codigo' => '12448',
                'elemento' => 'ALKACIDE GLUTARALDEHIDO POTENCIALIZADO',
                'id_clasificacion' => 4,
            ),
            413 => 
            array (
                'id' => 414,
                'id_solicitud' => NULL,
                'codigo' => '17535',
                'elemento' => 'BURETA',
                'id_clasificacion' => 4,
            ),
            414 => 
            array (
                'id' => 415,
                'id_solicitud' => NULL,
                'codigo' => '10446',
                'elemento' => 'CINTA CONTROL ESTERILIZACION',
                'id_clasificacion' => 4,
            ),
            415 => 
            array (
                'id' => 416,
                'id_solicitud' => NULL,
                'codigo' => '27722',
                'elemento' => 'FILTRO',
                'id_clasificacion' => 4,
            ),
            416 => 
            array (
                'id' => 417,
                'id_solicitud' => NULL,
                'codigo' => '24516',
                'elemento' => 'INDICADOR BIOLOGICO',
                'id_clasificacion' => 5,
            ),
            417 => 
            array (
                'id' => 418,
                'id_solicitud' => NULL,
                'codigo' => '16489',
                'elemento' => 'PINZA ALGODONERA',
                'id_clasificacion' => 5,
            ),
            418 => 
            array (
                'id' => 419,
                'id_solicitud' => NULL,
                'codigo' => '17312',
                'elemento' => 'PUNTAS LABORATORIO',
                'id_clasificacion' => 5,
            ),
            419 => 
            array (
                'id' => 420,
                'id_solicitud' => NULL,
                'codigo' => '16619',
                'elemento' => 'ROLLO PLASTICO VAPOR',
                'id_clasificacion' => 5,
            ),
            420 => 
            array (
                'id' => 421,
                'id_solicitud' => NULL,
                'codigo' => '16619-1',
                'elemento' => 'ROLLO PLASTICO VAPOR  5',
                'id_clasificacion' => 5,
            ),
            421 => 
            array (
                'id' => 422,
                'id_solicitud' => NULL,
                'codigo' => '16619-2',
                'elemento' => 'ROLLO PLASTICO VAPOR 10',
                'id_clasificacion' => 5,
            ),
            422 => 
            array (
                'id' => 423,
                'id_solicitud' => NULL,
                'codigo' => '16619-3',
                'elemento' => 'ROLLO PLASTICO VAPOR 20',
                'id_clasificacion' => 5,
            ),
            423 => 
            array (
                'id' => 424,
                'id_solicitud' => NULL,
                'codigo' => '16994',
                'elemento' => 'CARETA',
                'id_clasificacion' => 6,
            ),
            424 => 
            array (
                'id' => 425,
                'id_solicitud' => NULL,
                'codigo' => '16994-1',
                'elemento' => 'CARETA REPUESTO',
                'id_clasificacion' => 6,
            ),
            425 => 
            array (
                'id' => 426,
                'id_solicitud' => NULL,
                'codigo' => '8902',
                'elemento' => 'MONOGAFAS',
                'id_clasificacion' => 6,
            ),
            426 => 
            array (
                'id' => 427,
                'id_solicitud' => NULL,
                'codigo' => '18388',
                'elemento' => 'POLAINA',
                'id_clasificacion' => 6,
            ),
            427 => 
            array (
                'id' => 428,
                'id_solicitud' => NULL,
                'codigo' => '4985',
                'elemento' => 'TAPABOCAS ELASTICO',
                'id_clasificacion' => 6,
            ),
            428 => 
            array (
                'id' => 429,
                'id_solicitud' => NULL,
                'codigo' => '4985-1',
                'elemento' => 'TAPABOCAS DESECHABLE SIN FILTRO N95',
                'id_clasificacion' => 6,
            ),
            429 => 
            array (
                'id' => 430,
                'id_solicitud' => NULL,
                'codigo' => '8902',
            'elemento' => 'GAFAS DE PROTECCION (MONOGAFAS)',
                'id_clasificacion' => 6,
            ),
            430 => 
            array (
                'id' => 431,
                'id_solicitud' => NULL,
                'codigo' => '16472',
                'elemento' => 'GORRO',
                'id_clasificacion' => 6,
            ),
            431 => 
            array (
                'id' => 432,
                'id_solicitud' => NULL,
                'codigo' => '10384',
                'elemento' => 'GUANTE QUIRURGICO',
                'id_clasificacion' => 6,
            ),
            432 => 
            array (
                'id' => 433,
                'id_solicitud' => NULL,
                'codigo' => '10384-1',
                'elemento' => 'GUANTE QUIRURGICO ESTERIL 6 1/2',
                'id_clasificacion' => 6,
            ),
            433 => 
            array (
                'id' => 434,
                'id_solicitud' => NULL,
                'codigo' => '10384-2',
                'elemento' => 'GUANTE QUIRURGICO ESTERIL 7 1/2',
                'id_clasificacion' => 6,
            ),
            434 => 
            array (
                'id' => 435,
                'id_solicitud' => NULL,
                'codigo' => '10384-3',
                'elemento' => 'GUANTE QUIRURGICO LATEX L',
                'id_clasificacion' => 6,
            ),
            435 => 
            array (
                'id' => 436,
                'id_solicitud' => NULL,
                'codigo' => '10384-4',
                'elemento' => 'GUANTE QUIRURGICO LATEX M',
                'id_clasificacion' => 6,
            ),
            436 => 
            array (
                'id' => 437,
                'id_solicitud' => NULL,
                'codigo' => '10384-5',
                'elemento' => 'GUANTE QUIRURGICO LATEX S',
                'id_clasificacion' => 6,
            ),
            437 => 
            array (
                'id' => 438,
                'id_solicitud' => NULL,
                'codigo' => '10384-6',
                'elemento' => 'GUANTE QUIRURGICO LATEX XS',
                'id_clasificacion' => 6,
            ),
            438 => 
            array (
                'id' => 439,
                'id_solicitud' => NULL,
                'codigo' => '10384-7',
                'elemento' => 'GUANTE QUIRURGICO NITRILO L',
                'id_clasificacion' => 6,
            ),
            439 => 
            array (
                'id' => 440,
                'id_solicitud' => NULL,
                'codigo' => '10384-8',
                'elemento' => 'GUANTE QUIRURGICO NITRILO M',
                'id_clasificacion' => 6,
            ),
            440 => 
            array (
                'id' => 441,
                'id_solicitud' => NULL,
                'codigo' => '10384-9',
                'elemento' => 'GUANTE QUIRURGICO NITRILO S',
                'id_clasificacion' => 6,
            ),
            441 => 
            array (
                'id' => 442,
                'id_solicitud' => NULL,
                'codigo' => '10384-10',
                'elemento' => 'GUANTE QUIRURGICO NITRILO XS',
                'id_clasificacion' => 6,
            ),
            442 => 
            array (
                'id' => 443,
                'id_solicitud' => NULL,
                'codigo' => '10384-11',
                'elemento' => 'GUANTE TRASPARANTE',
                'id_clasificacion' => 6,
            ),
            443 => 
            array (
                'id' => 444,
                'id_solicitud' => NULL,
                'codigo' => '10575',
                'elemento' => 'ANIOSURF NPC LIMPIADOR Y DESINFECTANTE DE PISOS, PAREDES Y SUPERFICIES DE AREAS DE ALTO RIESGO X 5 LTS',
                'id_clasificacion' => 7,
            ),
            444 => 
            array (
                'id' => 445,
                'id_solicitud' => NULL,
                'codigo' => '8602-1',
                'elemento' => 'BOLSA PARA DESECHO PATOGENO X 100',
                'id_clasificacion' => 7,
            ),
            445 => 
            array (
                'id' => 446,
                'id_solicitud' => NULL,
                'codigo' => '8602',
            'elemento' => 'BOLSA PLASTICA (ROJAS)',
                'id_clasificacion' => 7,
            ),
            446 => 
            array (
                'id' => 447,
                'id_solicitud' => NULL,
                'codigo' => '16464',
                'elemento' => 'CEPILLO DE LIMPIEZA',
                'id_clasificacion' => 7,
            ),
            447 => 
            array (
                'id' => 448,
                'id_solicitud' => NULL,
                'codigo' => '16464-1',
                'elemento' => 'CEPILLO PARA LAVAR ESCUPIDERA',
                'id_clasificacion' => 7,
            ),
            448 => 
            array (
                'id' => 449,
                'id_solicitud' => NULL,
                'codigo' => '16464-2',
                'elemento' => 'CEPILLO PARA LAVAR INSTRUMENTAL',
                'id_clasificacion' => 7,
            ),
            449 => 
            array (
                'id' => 450,
                'id_solicitud' => NULL,
                'codigo' => '18310',
                'elemento' => 'CREMA DENTAL',
                'id_clasificacion' => 7,
            ),
            450 => 
            array (
                'id' => 451,
                'id_solicitud' => NULL,
                'codigo' => '18310-1',
                'elemento' => 'CREMA DENTAL DENTAGEL ',
                'id_clasificacion' => 7,
            ),
            451 => 
            array (
                'id' => 452,
                'id_solicitud' => NULL,
                'codigo' => '6922',
                'elemento' => 'DETERGENTE',
                'id_clasificacion' => 7,
            ),
            452 => 
            array (
                'id' => 453,
                'id_solicitud' => NULL,
                'codigo' => '6922-1',
                'elemento' => 'DETERGENTE AJAX',
                'id_clasificacion' => 7,
            ),
            453 => 
            array (
                'id' => 454,
                'id_solicitud' => NULL,
                'codigo' => '6922-2',
                'elemento' => 'DETERGENTE ARIEL',
                'id_clasificacion' => 7,
            ),
            454 => 
            array (
                'id' => 455,
                'id_solicitud' => NULL,
                'codigo' => '12301',
                'elemento' => 'DETERGENTE TRIENZIMATICO -ANIOZIME PLA II',
                'id_clasificacion' => 7,
            ),
            455 => 
            array (
                'id' => 456,
                'id_solicitud' => NULL,
                'codigo' => '16462',
                'elemento' => 'DETERGENTE ZETA 3 FOAM',
                'id_clasificacion' => 7,
            ),
            456 => 
            array (
                'id' => 457,
                'id_solicitud' => NULL,
                'codigo' => '6985',
                'elemento' => 'ESPONJILLA',
                'id_clasificacion' => 7,
            ),
            457 => 
            array (
                'id' => 458,
                'id_solicitud' => NULL,
                'codigo' => '6655',
                'elemento' => 'GEL ANTIBACTERIAL NEUTRO CON VIT. A Y E 500ML',
                'id_clasificacion' => 7,
            ),
            458 => 
            array (
                'id' => 459,
                'id_solicitud' => NULL,
                'codigo' => '7975',
            'elemento' => 'JABON (ROJO)',
                'id_clasificacion' => 7,
            ),
            459 => 
            array (
                'id' => 460,
                'id_solicitud' => NULL,
                'codigo' => '16618',
                'elemento' => 'PALILLOS',
                'id_clasificacion' => 7,
            ),
            460 => 
            array (
                'id' => 461,
                'id_solicitud' => NULL,
                'codigo' => '6676',
                'elemento' => 'PAPEL ALUMINIO',
                'id_clasificacion' => 7,
            ),
            461 => 
            array (
                'id' => 462,
                'id_solicitud' => NULL,
                'codigo' => '16619',
                'elemento' => 'ROLLO PLASTICO VAPOR',
                'id_clasificacion' => 7,
            ),
            462 => 
            array (
                'id' => 463,
                'id_solicitud' => NULL,
                'codigo' => '16619-1',
                'elemento' => 'ROLLO PLASTICO VAPOR  5',
                'id_clasificacion' => 7,
            ),
            463 => 
            array (
                'id' => 464,
                'id_solicitud' => NULL,
                'codigo' => '16619-2',
                'elemento' => 'ROLLO PLASTICO VAPOR 10',
                'id_clasificacion' => 7,
            ),
            464 => 
            array (
                'id' => 465,
                'id_solicitud' => NULL,
                'codigo' => '16619-3',
                'elemento' => 'ROLLO PLASTICO VAPOR 20',
                'id_clasificacion' => 7,
            ),
            465 => 
            array (
                'id' => 466,
                'id_solicitud' => NULL,
                'codigo' => '6881',
                'elemento' => 'SEDA DENTAL',
                'id_clasificacion' => 7,
            ),
            466 => 
            array (
                'id' => 467,
                'id_solicitud' => NULL,
                'codigo' => '5198',
                'elemento' => 'HIPOCLORITO DE SODIO',
                'id_clasificacion' => 7,
            ),
            467 => 
            array (
                'id' => 468,
                'id_solicitud' => NULL,
                'codigo' => '4967',
                'elemento' => 'BABERO DESECHABLE - POLIPROPILENO 35 GR.',
                'id_clasificacion' => 8,
            ),
            468 => 
            array (
                'id' => 469,
                'id_solicitud' => NULL,
                'codigo' => '17230',
                'elemento' => 'BATA DESECHABLE',
                'id_clasificacion' => 8,
            ),
            469 => 
            array (
                'id' => 470,
                'id_solicitud' => NULL,
                'codigo' => '17230-1',
                'elemento' => 'BATA DESECHABLE TIPO CIRUJANO - POLIPROPILENO 35 GR.',
                'id_clasificacion' => 8,
            ),
            470 => 
            array (
                'id' => 471,
                'id_solicitud' => NULL,
                'codigo' => '17230-2',
                'elemento' => 'BATA DESECHABLE TIPO DIRECTOR - POLIPROPILENO 40 GR.',
                'id_clasificacion' => 8,
            ),
            471 => 
            array (
                'id' => 472,
                'id_solicitud' => NULL,
                'codigo' => '17230-3',
                'elemento' => 'BATA PACIENTE ADULTO CON MANGAS - POLIPROPILENO 35 GR.',
                'id_clasificacion' => 8,
            ),
            472 => 
            array (
                'id' => 473,
                'id_solicitud' => NULL,
                'codigo' => '17230-4',
                'elemento' => 'BATA PACIENTE ADULTO SIN MANGAS - POLIPROPILENO 35 GR.',
                'id_clasificacion' => 8,
            ),
            473 => 
            array (
                'id' => 474,
                'id_solicitud' => NULL,
                'codigo' => '16437',
                'elemento' => 'CAMPO QUIRURGICO',
                'id_clasificacion' => 8,
            ),
            474 => 
            array (
                'id' => 475,
                'id_solicitud' => NULL,
                'codigo' => '16437-1',
                'elemento' => 'CAMPO QUIRURGICO AUXILIAR 74CM X 74CM - POLIPROPILENO 35 GR.',
                'id_clasificacion' => 8,
            ),
            475 => 
            array (
                'id' => 476,
                'id_solicitud' => NULL,
                'codigo' => '17248',
                'elemento' => 'CAMPO QUIRURGICO ODONTOLOGICOS - POLIPROPILENO 35 GR.',
                'id_clasificacion' => 8,
            ),
            476 => 
            array (
                'id' => 477,
                'id_solicitud' => NULL,
                'codigo' => '23043',
                'elemento' => 'FUNDA PARA CIRUGIA',
                'id_clasificacion' => 8,
            ),
            477 => 
            array (
                'id' => 478,
                'id_solicitud' => NULL,
                'codigo' => '23043',
                'elemento' => 'FUNDA SENCILLA - POLIPROPILENO 35 GR.',
                'id_clasificacion' => 8,
            ),
            478 => 
            array (
                'id' => 479,
                'id_solicitud' => NULL,
                'codigo' => '17873',
                'elemento' => 'OVEROL',
                'id_clasificacion' => 8,
            ),
            479 => 
            array (
                'id' => 480,
                'id_solicitud' => NULL,
                'codigo' => '18388',
                'elemento' => 'POLAINA DESECHABLE EN TELA QUIRURGICA SENCILLA',
                'id_clasificacion' => 8,
            ),
            480 => 
            array (
                'id' => 481,
                'id_solicitud' => NULL,
                'codigo' => '10966',
                'elemento' => 'SABANA',
                'id_clasificacion' => 8,
            ),
            481 => 
            array (
                'id' => 482,
                'id_solicitud' => NULL,
                'codigo' => '10966-1',
            'elemento' => 'SABANAS DESECHABLES 2,10 MTS X 90 CM - POLIPROPILENO 35 GR.(PEQUEÑA)',
                'id_clasificacion' => 8,
            ),
            482 => 
            array (
                'id' => 483,
                'id_solicitud' => NULL,
                'codigo' => '10966-2',
            'elemento' => 'SABANAS DESECHABLES 2,20 MTS X 1,23 MTS - POLIPROPILENO 35 GR.(GRANDE)',
                'id_clasificacion' => 8,
            ),
            483 => 
            array (
                'id' => 486,
                'id_solicitud' => NULL,
                'codigo' => '4250-3',
                'elemento' => 'LAPIZ VERDE',
                'id_clasificacion' => 1,
            ),
            484 => 
            array (
                'id' => 487,
                'id_solicitud' => NULL,
                'codigo' => '4258',
                'elemento' => 'MARCADOR',
                'id_clasificacion' => 1,
            ),
            485 => 
            array (
                'id' => 488,
                'id_solicitud' => NULL,
                'codigo' => '4258-2',
                'elemento' => 'MARCADOR BORRABLE',
                'id_clasificacion' => 1,
            ),
            486 => 
            array (
                'id' => 489,
                'id_solicitud' => NULL,
                'codigo' => '4258-3',
                'elemento' => 'MARCADOR PERMANENTE',
                'id_clasificacion' => 1,
            ),
            487 => 
            array (
                'id' => 490,
                'id_solicitud' => NULL,
                'codigo' => '4258-1',
                'elemento' => 'MARCADOR SHARPIE NEGRO',
                'id_clasificacion' => 1,
            ),
            488 => 
            array (
                'id' => 491,
                'id_solicitud' => NULL,
                'codigo' => '4275',
                'elemento' => 'MICROPUNTA',
                'id_clasificacion' => 1,
            ),
            489 => 
            array (
                'id' => 492,
                'id_solicitud' => NULL,
                'codigo' => '4285',
                'elemento' => 'MINAS',
                'id_clasificacion' => 1,
            ),
            490 => 
            array (
                'id' => 493,
                'id_solicitud' => NULL,
                'codigo' => '4285-2',
                'elemento' => 'MINAS 0.5 mm',
                'id_clasificacion' => 1,
            ),
            491 => 
            array (
                'id' => 494,
                'id_solicitud' => NULL,
                'codigo' => '4285-1',
                'elemento' => 'MINAS 0.7 mm',
                'id_clasificacion' => 1,
            ),
            492 => 
            array (
                'id' => 495,
                'id_solicitud' => NULL,
                'codigo' => '10912-1',
                'elemento' => 'NEGRO',
                'id_clasificacion' => 1,
            ),
            493 => 
            array (
                'id' => 496,
                'id_solicitud' => NULL,
                'codigo' => '10912-2',
                'elemento' => 'NEGRO FINO',
                'id_clasificacion' => 1,
            ),
            494 => 
            array (
                'id' => 497,
                'id_solicitud' => NULL,
                'codigo' => '9130',
                'elemento' => 'NOTAS ADHESIVAS',
                'id_clasificacion' => 1,
            ),
            495 => 
            array (
                'id' => 498,
                'id_solicitud' => NULL,
                'codigo' => '9130-3',
                'elemento' => 'NOTAS ADHESIVAS GRANDES',
                'id_clasificacion' => 1,
            ),
            496 => 
            array (
                'id' => 499,
                'id_solicitud' => NULL,
                'codigo' => '9130-2',
                'elemento' => 'NOTAS ADHESIVAS MEDIANAS',
                'id_clasificacion' => 1,
            ),
            497 => 
            array (
                'id' => 500,
                'id_solicitud' => NULL,
                'codigo' => '9130-1',
                'elemento' => 'NOTAS ADHESIVAS PEQUEÑAS',
                'id_clasificacion' => 1,
            ),
            498 => 
            array (
                'id' => 501,
                'id_solicitud' => NULL,
                'codigo' => '4365',
                'elemento' => 'PAPEL CARTA',
                'id_clasificacion' => 1,
            ),
            499 => 
            array (
                'id' => 502,
                'id_solicitud' => NULL,
                'codigo' => '4369',
                'elemento' => 'PAPEL CONTAC',
                'id_clasificacion' => 1,
            ),
        ));
        \DB::table('producto')->insert(array (
            0 => 
            array (
                'id' => 503,
                'id_solicitud' => NULL,
                'codigo' => '16447',
                'elemento' => 'PAPEL ELECTROCARDIOGRAMA',
                'id_clasificacion' => 1,
            ),
            1 => 
            array (
                'id' => 504,
                'id_solicitud' => NULL,
                'codigo' => '4375',
                'elemento' => 'PAPEL OFICIO',
                'id_clasificacion' => 1,
            ),
            2 => 
            array (
                'id' => 505,
                'id_solicitud' => NULL,
                'codigo' => '4166',
                'elemento' => 'PEGANTE',
                'id_clasificacion' => 1,
            ),
            3 => 
            array (
                'id' => 506,
                'id_solicitud' => NULL,
                'codigo' => '4166-1',
                'elemento' => 'PEGANTE COLBON',
                'id_clasificacion' => 1,
            ),
            4 => 
            array (
                'id' => 507,
                'id_solicitud' => NULL,
                'codigo' => '4166-2',
                'elemento' => 'PEGANTE PEGASTIC',
                'id_clasificacion' => 1,
            ),
            5 => 
            array (
                'id' => 508,
                'id_solicitud' => NULL,
                'codigo' => '9095',
                'elemento' => 'PERFORADORA',
                'id_clasificacion' => 1,
            ),
            6 => 
            array (
                'id' => 509,
                'id_solicitud' => NULL,
                'codigo' => '20979',
                'elemento' => 'PILA',
                'id_clasificacion' => 1,
            ),
            7 => 
            array (
                'id' => 510,
                'id_solicitud' => NULL,
                'codigo' => '20979-2',
                'elemento' => 'PILA AA',
                'id_clasificacion' => 1,
            ),
            8 => 
            array (
                'id' => 511,
                'id_solicitud' => NULL,
                'codigo' => '20979-1',
                'elemento' => 'PILA AAA',
                'id_clasificacion' => 1,
            ),
            9 => 
            array (
                'id' => 512,
                'id_solicitud' => NULL,
                'codigo' => '20979-3',
                'elemento' => 'PILA CUADRADA',
                'id_clasificacion' => 1,
            ),
            10 => 
            array (
                'id' => 513,
                'id_solicitud' => NULL,
                'codigo' => '4279',
                'elemento' => 'PORTAMINAS',
                'id_clasificacion' => 1,
            ),
            11 => 
            array (
                'id' => 514,
                'id_solicitud' => NULL,
                'codigo' => '8928',
                'elemento' => 'REGLA',
                'id_clasificacion' => 1,
            ),
            12 => 
            array (
                'id' => 515,
                'id_solicitud' => NULL,
                'codigo' => '8928-2',
                'elemento' => 'REGLA GRANDE',
                'id_clasificacion' => 1,
            ),
            13 => 
            array (
                'id' => 516,
                'id_solicitud' => NULL,
                'codigo' => '8928-1',
                'elemento' => 'REGLA PEQUEÑA',
                'id_clasificacion' => 1,
            ),
            14 => 
            array (
                'id' => 517,
                'id_solicitud' => NULL,
                'codigo' => '16831',
                'elemento' => 'RESALTADOR',
                'id_clasificacion' => 1,
            ),
            15 => 
            array (
                'id' => 518,
                'id_solicitud' => NULL,
                'codigo' => '10912-3',
                'elemento' => 'ROJO',
                'id_clasificacion' => 1,
            ),
            16 => 
            array (
                'id' => 519,
                'id_solicitud' => NULL,
                'codigo' => '10363',
                'elemento' => 'ROTULO ADHESIVO',
                'id_clasificacion' => 1,
            ),
            17 => 
            array (
                'id' => 520,
                'id_solicitud' => NULL,
                'codigo' => '4137',
                'elemento' => 'SACA GANCHO',
                'id_clasificacion' => 1,
            ),
            18 => 
            array (
                'id' => 521,
                'id_solicitud' => NULL,
                'codigo' => '4137-2',
                'elemento' => 'SACA GANCHO GRANDE',
                'id_clasificacion' => 1,
            ),
            19 => 
            array (
                'id' => 522,
                'id_solicitud' => NULL,
                'codigo' => '4137-1',
                'elemento' => 'SACA GANCHO UÑA',
                'id_clasificacion' => 1,
            ),
            20 => 
            array (
                'id' => 523,
                'id_solicitud' => NULL,
                'codigo' => '16582',
                'elemento' => 'SEPARADOR DE HOJAS',
                'id_clasificacion' => 1,
            ),
            21 => 
            array (
                'id' => 524,
                'id_solicitud' => NULL,
                'codigo' => '9161',
                'elemento' => 'SOBRE',
                'id_clasificacion' => 1,
            ),
            22 => 
            array (
                'id' => 525,
                'id_solicitud' => NULL,
                'codigo' => '7995',
                'elemento' => 'SOBRE DE MANILA',
                'id_clasificacion' => 1,
            ),
            23 => 
            array (
                'id' => 526,
                'id_solicitud' => NULL,
                'codigo' => '7995-1',
                'elemento' => 'SOBRE DE MANILA 1/2 ',
                'id_clasificacion' => 1,
            ),
            24 => 
            array (
                'id' => 527,
                'id_solicitud' => NULL,
                'codigo' => '7995-2',
                'elemento' => 'SOBRE DE MANILA CARTA',
                'id_clasificacion' => 1,
            ),
            25 => 
            array (
                'id' => 528,
                'id_solicitud' => NULL,
                'codigo' => '7995-3',
                'elemento' => 'SOBRE DE MANILA OFICIO',
                'id_clasificacion' => 1,
            ),
            26 => 
            array (
                'id' => 529,
                'id_solicitud' => NULL,
                'codigo' => '22749',
                'elemento' => 'SOPORTE DE DOCUMENTOS',
                'id_clasificacion' => 1,
            ),
            27 => 
            array (
                'id' => 530,
                'id_solicitud' => NULL,
                'codigo' => '8960',
                'elemento' => 'TIJERA',
                'id_clasificacion' => 1,
            ),
            28 => 
            array (
                'id' => 531,
                'id_solicitud' => NULL,
                'codigo' => '2356',
                'elemento' => 'TINTA PARA SELLO',
                'id_clasificacion' => 1,
            ),
            29 => 
            array (
                'id' => 532,
                'id_solicitud' => NULL,
                'codigo' => '2356-1',
                'elemento' => 'TINTA PARA SELLO NEGRO',
                'id_clasificacion' => 1,
            ),
            30 => 
            array (
                'id' => 533,
                'id_solicitud' => NULL,
                'codigo' => '2356-2',
                'elemento' => 'TINTA PARA SELLO ROJO',
                'id_clasificacion' => 1,
            ),
            31 => 
            array (
                'id' => 534,
                'id_solicitud' => NULL,
                'codigo' => '16581',
                'elemento' => 'TIQUETES',
                'id_clasificacion' => 1,
            ),
            32 => 
            array (
                'id' => 535,
                'id_solicitud' => NULL,
                'codigo' => '4559',
                'elemento' => 'TONER',
                'id_clasificacion' => 1,
            ),
        ));
        
        
    }
}