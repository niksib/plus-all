<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDController;
use App\Services\Lead\Models\Lead;
use App\Services\Lead\Repositories\LeadRepository;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class LeadController extends CRUDController
{
    public function __construct()
    {
        $this->CRUDRepository = new LeadRepository();
        $this->item = new Lead();
        $this->routeId = 'lead';
        $this->routeGroup = 'leads';
        $this->viewGroup = 'Lead';
    }

    public function export(): BinaryFileResponse
    {
        $filePath = storage_path('app/leads_export_' . time() . '.csv');
        $fp = fopen($filePath, 'w');
        fputcsv($fp, ['ID', 'ПІБ', 'Email', 'Телефон', 'Дата']);
        Lead::query()->chunk(100, function ($items) use ($fp) {
            foreach ($items as $item) {
                $data = $item->toArray();
                unset(
                    $data['updated_at']
                );

                fputcsv($fp, array_values($data));
            }
        });

        fclose($fp);

        return response()->download($filePath, 'leads.csv', [
            'Content-Type' => 'text/csv',
        ]);
    }
}
