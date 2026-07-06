<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\WorkWithUsMail;
use App\Models\Service;

class ContactController extends Controller
{
    /**
     * Enviar consulta desde Contacto
     */
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:150',
            'company'   => 'required|string|max:150',
            'email'     => 'required|email|max:150',
            'service'   => 'required',
            'message'   => 'required|string|max:3000',
        ]);

        // Obtener nombre del servicio
        $service = Service::find($validated['service']);

        $validated['service'] = $service->nombre;

        Mail::to('informes@giisacingenieros.com')
            ->send(new ContactMail($validated));

        return response()->json([
            'success' => true,
            'message' => 'Consulta enviada correctamente.'
        ]);
    }

    /**
     * Enviar CV
     */
    public function sendWork(Request $request)
    {

        $validated = $request->validate([

            'name' => 'required|string|max:150',

            'document' => 'required|string|max:30',

            'phone' => 'required|string|max:50',

            'email' => 'required|email|max:150',

            'position' => 'required|string|max:150',

            'experience' => 'required|integer|min:0|max:60',

            'education' => 'required|string',

            'availability' => 'required|string',

            'salary' => 'nullable|string|max:100',

            'location' => 'nullable|string|max:150',

            'portfolio' => 'nullable|url|max:255',

            'message' => 'nullable|string|max:3000',

            'cv' => 'required|file|mimes:pdf|max:5120',

        ]);

        $cv = $request->file('cv');

        Mail::to('informes@giisacingenieros.com')
            ->send(
                new WorkWithUsMail(
                    $validated,
                    $cv->getRealPath(),
                    $cv->getClientOriginalName()
                )
            );

        return response()->json([

            'success' => true,

            'message' => 'CV enviado correctamente.'

        ]);

    }
}