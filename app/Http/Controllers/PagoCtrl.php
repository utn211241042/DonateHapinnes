<?php

namespace App\Http\Controllers;



use App\Models\Pago;
use Illuminate\Http\Request;


class PagoCtrl extends Controller
{
    //
    public function store(Request $request)
    {
        
        
        $detalles = $request->input('detalles');
$fecha=$detalles['purchase_units'][0]['payments']['captures'][0]['update_time'];
        $fecha_nueva = date('Y-m-d H:i:s',strtotime($fecha));
print_r($detalles);
        // Aquí puedes guardar los datos en tu base de datos
        pago::create([
            'monto' => $detalles['purchase_units'][0]['amount']['value'],
            'descripcion' => $detalles['purchase_units'][0]['payee']['email_address'],
            'fecha' => $fecha_nueva
            // Agrega más campos según sea necesario
        ]);

   

        return response()->json(['success' => true]);
    }



    public function obtenerDineroGanadoPorMes()
{
    $resultados = pago::selectRaw('SUM(monto) as total, MONTH(fecha) as mes')
        ->whereYear('fecha', date('Y'))
        ->groupBy('mes')
        ->get();

    $dineroPorMes = [];

    // Inicializa el array para todos los meses del año
    for ($mes = 1; $mes <= 12; $mes++) {
        $dineroPorMes[$mes] = 0;
    }

    // Llena el array con los resultados de la consulta
    foreach ($resultados as $resultado) {
        $dineroPorMes[$resultado->mes] = $resultado->total;
    }


return view('admin/dashboardadministrador',['dineroPorMes' => $dineroPorMes]);
}
}

