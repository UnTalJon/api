<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Quest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasFinds(5)->hasLogs(2)->hasReports(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();

        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasFinds(4)->hasLogs(1)->hasReports(1)->count(1))
            ->hasPersons(2)->hasMunicipios(1)->create();

        Schedule::factory()->count(6)
            ->has(Quest::factory()->hasFinds(8)->hasLogs(1)->hasReports(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();
        
        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasFinds(5)->hasLogs(2)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();

        Schedule::factory()->count(6)
            ->has(Quest::factory()->hasFinds()->hasLogs(15)->count(1))
            ->hasPersons(5)->hasMunicipios(1)->create();

        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasFinds(20)->hasLogs(15)->count(1))
            ->hasPersons(10)->hasMunicipios(1)->create();

        Schedule::factory()->count(4)
            ->has(Quest::factory()->hasFinds()->hasLogs(15)->hasReports(1)->count(1))
            ->hasPersons(5)->hasMunicipios(1)->create();

        Schedule::factory()->count(1)
            ->has(Quest::factory()->hasFinds(20)->hasLogs(15)->hasReports(1)->count(1))
            ->hasPersons(10)->hasMunicipios(1)->create();

        Schedule::factory()->count(4)
            ->has(Quest::factory()->hasFinds(4)->hasLogs(1)->count(1))
            ->hasPersons(2)->hasMunicipios(1)->create();

        Schedule::factory()->count(6)
            ->has(Quest::factory()->hasLogs(15)->count(1))
            ->hasPersons(5)->hasMunicipios(1)->create();

        Schedule::factory()->count(3)
            ->has(Quest::factory()->hasLogs(15)->hasReports(1)->count(1))
            ->hasPersons(10)->hasMunicipios(1)->create();

        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasLogs(1)->count(1))
            ->hasPersons(2)->hasMunicipios(1)->create();

        Schedule::factory()->count(7)
            ->has(Quest::factory()->hasLogs(1)->hasReports(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();

         Schedule::factory()->count(3)
            ->has(Quest::factory()->hasFinds(8)->hasLogs(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();

        Schedule::factory()->count(4)
            ->has(Quest::factory()->hasLogs(2)->hasReports(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();

        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasFinds(5)->hasLogs(2)->hasReports(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();

        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasFinds(4)->hasLogs(1)->hasReports(1)->count(1))
            ->hasPersons(2)->hasMunicipios(1)->create();

        Schedule::factory()->count(6)
            ->has(Quest::factory()->hasFinds(8)->hasLogs(1)->hasReports(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();
        
        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasFinds(5)->hasLogs(2)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();

        Schedule::factory()->count(6)
            ->has(Quest::factory()->hasFinds()->hasLogs(15)->count(1))
            ->hasPersons(5)->hasMunicipios(1)->create();

        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasFinds(20)->hasLogs(15)->count(1))
            ->hasPersons(10)->hasMunicipios(1)->create();

        Schedule::factory()->count(4)
            ->has(Quest::factory()->hasFinds()->hasLogs(15)->hasReports(1)->count(1))
            ->hasPersons(5)->hasMunicipios(1)->create();

        Schedule::factory()->count(1)
            ->has(Quest::factory()->hasFinds(20)->hasLogs(15)->hasReports(1)->count(1))
            ->hasPersons(10)->hasMunicipios(1)->create();

        Schedule::factory()->count(4)
            ->has(Quest::factory()->hasFinds(4)->hasLogs(1)->count(1))
            ->hasPersons(2)->hasMunicipios(1)->create();

        Schedule::factory()->count(6)
            ->has(Quest::factory()->hasLogs(15)->count(1))
            ->hasPersons(5)->hasMunicipios(1)->create();

        Schedule::factory()->count(3)
            ->has(Quest::factory()->hasLogs(15)->hasReports(1)->count(1))
            ->hasPersons(10)->hasMunicipios(1)->create();

        Schedule::factory()->count(2)
            ->has(Quest::factory()->hasLogs(1)->count(1))
            ->hasPersons(2)->hasMunicipios(1)->create();

        Schedule::factory()->count(7)
            ->has(Quest::factory()->hasLogs(1)->hasReports(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();

         Schedule::factory()->count(3)
            ->has(Quest::factory()->hasFinds(8)->hasLogs(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();

        Schedule::factory()->count(4)
            ->has(Quest::factory()->hasLogs(2)->hasReports(1)->count(1))
            ->hasPersons(1)->hasMunicipios(1)->create();
    }
}
