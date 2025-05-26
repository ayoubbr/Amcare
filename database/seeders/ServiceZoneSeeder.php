<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Zone;

class ServiceZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = Service::all();
        $zones = Zone::where('is_active', true)->get(); // Only link to active zones

        if ($services->isEmpty() || $zones->isEmpty()) {
            $this->command->info('Veuillez exécuter ServiceSeeder et ZoneSeeder avant ServiceZoneSeeder.');
            return;
        }

        // Example: Link each service to 1 or 2 random active zones
        foreach ($services as $service) {
            // Ensure we don't try to pick more zones than available
            $numberOfZonesToLink = min($zones->count(), rand(1, 2));
            $randomZones = $zones->random($numberOfZonesToLink);

            foreach ($randomZones as $zone) {
                // Using attach to handle pivot table entries, avoids duplicates if run multiple times by checking
                // This assumes your Service model has a zones() BelongsToMany relationship defined.
                // If not, use DB::table('service_zone')->insertOrIgnore([...]);
                if (method_exists($service, 'zones')) {
                     $service->zones()->syncWithoutDetaching([$zone->id]);
                } else {
                    // Fallback if relationship is not defined (less ideal)
                    DB::table('service_zone')->updateOrInsert(
                        ['service_id' => $service->id, 'zone_id' => $zone->id],
                        ['created_at' => now(), 'updated_at' => now()]
                    );
                }
            }
        }

        // Example of specific links:
        // $serviceUrgence = Service::where('slug', 'transport-medical-durgence')->first();
        // $zoneCasaCentre = Zone::where('code', 'CASA-CTR')->first();
        // $zoneRabatAgdal = Zone::where('code', 'RBA-AGD')->first();

        // if ($serviceUrgence && $zoneCasaCentre) {
        //     $serviceUrgence->zones()->syncWithoutDetaching([$zoneCasaCentre->id]);
        // }
        // if ($serviceUrgence && $zoneRabatAgdal) {
        //    $serviceUrgence->zones()->syncWithoutDetaching([$zoneRabatAgdal->id]);
        // }
    }
}

