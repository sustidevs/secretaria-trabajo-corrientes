<?php

namespace Database\Seeders;

use App\Models\Requisito;
use Illuminate\Database\Seeder;

class RequisitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ASESORAMIENTO JURÍDICO GRATUITO
        Requisito::create([
            'tipos_tramite_id' => '1',
            'titulo' => 'DNI.',
            'tipo' => '1',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '1',
            'titulo' => 'Recibo de sueldo (opcional).',
            'tipo' => '1',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '1',
            'titulo' => 'Intercambio epistolar (opcional).',
            'tipo' => '1',
        ]);
        //FORMULACION DE RECLAMOS
        Requisito::create([
            'tipos_tramite_id' => '2',
            'titulo' => 'Datos del reclamante',
            'descripcion' => 'Nombre, DNI, domicilio real, número de celular, e-mail.',
            'tipo' => '1',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '2',
            'titulo' => 'Abogado patrocinante',
            'descripcion' => 'Nombre, M.P., número de celular, constitución de domicilio legal y electrónico.',
            'tipo' => '1',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '2',
            'titulo' => 'Datos del reclamado',
            'descripcion' => 'Nombre, DNI, domicilio real, número de celular, e-mail.',
            'tipo' => '1',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '2',
            'titulo' => 'Hechos',
            'descripcion' => 'Breve mención de la situación fáctica.',
            'tipo' => '1',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '2',
            'titulo' => 'Determinación de la pretensión',
            'descripcion' => 'De corresponder detallar los rubros que se reclaman.',
            'tipo' => '1',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '2',
            'titulo' => '',
            'descripcion' => 'De considerarlo conveniente acompañar copia de la documental (recibos, misivas, actas notariales, etc.).',
            'tipo' => '2',//tipo Aclaracion
        ]);
        Requisito::create([
            'tipos_tramite_id' => '2',
            'titulo' => 'Advertencia',
            'descripcion' => 'Abogados: se le hace saber que deberá correr con la carga de la notificación de la fecha de la audiencia de conciliación a la contraparte mediante TCL, cuya copia de seguimiento de envío, deberá acompañar el día de la audiencia.',
            'tipo' => '3',//tipo Advertencia
        ]);
        Requisito::create([
            'tipos_tramite_id' => '2',
            'titulo' => 'Días',
            'descripcion' => 'Lunes, martes, miércoles y jueves.',
            'tipo' => '4',//tipo Dias
        ]);

        Requisito::create([
            'tipos_tramite_id' => '2',
            'titulo' => 'Horarios',
            'descripcion' => '08:00 h, 09:00 h, 10:00 h, 11:00 h, 12:00 h.',
            'tipo' => '5',//tipo Horarios 5
        ]);

        //MESA DE ENTRADAS
        Requisito::create([
            'tipos_tramite_id' => '3',
            'titulo' => 'Fotocopia de carta de documento de despido.',
            'tipo' => '1',
        ]);

        Requisito::create([
            'tipos_tramite_id' => '3',
            'titulo' => 'Fotocopia de telegrama colacionado rechazando causal de despido.',
            'tipo' => '1',
        ]);

        Requisito::create([
            'tipos_tramite_id' => '3',
            'titulo' => 'Fotocopia de recibo de sueldo.',
            'tipo' => '1',
        ]);

        Requisito::create([
            'tipos_tramite_id' => '3',
            'titulo' => 'Formulario otorgado por ANSES (Formulario PS 3.2) debidamente certificado por autoridad correspondiente.',
            'tipo' => '1',
        ]);

        Requisito::create([
            'tipos_tramite_id' => '3',
            'titulo' => 'Fotocopia de DNI.',
            'tipo' => '1',
        ]);

        Requisito::create([
            'tipos_tramite_id' => '3',
            'titulo' => 'Días',
            'descripcion' => 'Martes y jueves.',
            'tipo' => '4',//tipo Dias
        ]);

        Requisito::create([
            'tipos_tramite_id' => '3',
            'titulo' => 'Horarios',
            'descripcion' => '08:00 h, 09:00 h, 10:00 h, 11:00 h, 12:00 h.',
            'tipo' => '5',//tipo Horarios 5
        ]);

        //RATIFICACIÓN
        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'Las partes deberán presentar el acuerdo redactado en 3 copias.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'A los fines de dar trámite es indispensable la concurrencia del trabajador, acompañado de su abogado patrocinante de contar, caso contrario se le proporcionará un asesor legal del organismo de manera totalmente gratuita.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'Datos de las partes',
            'descripcion' => 'Nombre, DNI, domicilio real y electrónico, número de celular.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'De contar con Abogado Patrocinante',
            'descripcion' => 'Nombre, M.P, número de celular, constitución del domicilio legal y electrónico. Acreditación de Personería.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'En el caso de ser parte una persona jurídica quien represente a dicha persona deberá acreditar la representación, mediante la documentación que corresponda.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'En el supuesto de que quien intervenga por la empleadora sea un apoderado deberá acreditar la representación.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'Hechos: breve mención de la situación fáctica',
            'descripcion' => 'En caso de requerir homologación del acuerdo determinación clara y precisa de los de los hechos controvertidos.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'Determinación clara de las pautas de la relación',
            'descripcion' => 'Fecha de ingreso, jornada laboral, actividad desplegada por el/la trabajador/a, fecha de egreso, monto que percibía en concepto de salario-sueldo-haber, causal de extinción.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'Determinación de manera clara y precisa del medio bancario y/o electrónico por el cual se efectivizará el pago de la suma que se acuerde (Datos de la cuenta - CUIT - CBU - Orden de Extracción).',
        ]);

        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'Días',
            'descripcion' => 'Lunes, martes, miércoles, jueves y viernes.',
            'tipo' => '4',//tipo Dias
        ]);

        Requisito::create([
            'tipos_tramite_id' => '4',
            'titulo' => 'Horarios',
            'descripcion' => '08:30 h, 09:30 h, 10:30 h, 11:30 h.',
            'tipo' => '5',//tipo Horarios 5
        ]);


        //CONSIGNACIÓN - PRESENTACIÓN DE LA DOCUMENTACIÓN
        Requisito::create([
            'tipos_tramite_id' => '5',
            'titulo' => 'Escrito de consignación en 3 fojas.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '5',
            'titulo' => 'Datos de la parte del consignante.',
            'descripcion' => 'Nombre, DNI, domicilio real y electrónico, número de celular.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '5',
            'titulo' => 'De contar con abogado patrocinante',
            'descripcion' => 'Nombre, M.P, número de celular, constitución del domicilio legal y electrónico. Acreditación de Personería.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '5',
            'titulo' => 'En el caso de ser parte una persona jurídica quien represente a dicha persona deberá acreditar la representación, mediante la documentación que corresponda.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '5',
            'titulo' => 'Datos del/la beneficiario/a',
            'descripcion' => 'Nombre, DNI, domicilio real, número de celular, e-mail.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '5',
            'titulo' => 'Detalle de la documental que se consigna.',
        ]);
        Requisito::create([
            'tipos_tramite_id' => '5',
            'titulo' => 'Petitorio.',
        ]);

        Requisito::create([
            'tipos_tramite_id' => '5',
            'titulo' => 'Días',
            'descripcion' => 'Lunes, martes, miércoles y jueves.',
            'tipo' => '4',//tipo Dias
        ]);

        Requisito::create([
            'tipos_tramite_id' => '5',
            'titulo' => 'Horarios',
            'descripcion' => '07:30 h, 12:00 h.',
            'tipo' => '5',//tipo Horarios 5
        ]);
    }
}
