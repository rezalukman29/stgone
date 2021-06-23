<?php

namespace App\Http\Controllers\Admin;

use App\Charts\Chartjs;
use App\Charts\Frappe;
use App\Charts\Highcharts;
use App\Http\Controllers\Controller;
use App\Models\Datatable;

class ChartsController extends Controller
{
    public function index()
    {
        $bar = new Frappe;
        $bar->labels(['One', 'Two', 'Three']);
        $bar->dataset('Element 1', 'bar', [5, 20, 100])->options(
            [
            'color' => '#418bca'
            ]
        );
        $bar->dataset('Element 2', 'bar', [15, 30, 80])->options(
            [
            'color' => '#67c5df'
            ]
        );
        $bar->dataset('Element 3', 'bar', [25, 10, 40])->options(
            [
            'color' => '#F89A14'
            ]
        );

        $line = new Frappe;
        $line->labels(['Sebelum', 'Sesudah']);
        $line->dataset('Kripik Nangka', 'line', [90000, 30000])->options(
            [
            'color' => '#F89A14'
            ]
        );
        $line->dataset('Jatarjo', 'line', [110000, 95000])->options(
            [
            'color' => '#67c5df'
            ]
        );
        $line->dataset('Kebun Kurma', 'line', [600000, 400000])->options(
            [
            'color' => '#d90fc5'
            ]
        );
        $line->dataset('Ikan Bakar Cianjur', 'line', [1000000, 800000])->options(
            [
            'color' => '#22e31b'
            ]
        );
        $line->dataset('Soto Lombok', 'line', [120000, 15000])->options(
            [
            'color' => '#000000'
            ]
        );
        $line->dataset('Padang Siang', 'line', [120000, 45000])->options(
            [
            'color' => '#ff003c'
            ]
        );

        $line->dataset('Cak Gundul', 'line', [750000, 550000])->options(
            [
            'color' => '#93a300'
            ]
        );





        // $line->dataset('Ikab Bakar Cianjur', 'line', [1000000, 800000])->options(
        //     [
        //     'color' => '#F89A14'
        //     ]
        // );
    

        $area = new Highcharts;
        $area->dataset('Panjang tol', 'area', [15.4, 23.4, 30.5,35.2,38.3])->options(
            [
            'color' => 'var(--primary)'
            ]
        );
 
        $area->labels(['Pandaan - Purwodadi', 'Purwodadi - Lawang', 'Lawang - Singosari', 'Singosari - Pakis', 'Pakis - Malang']);

        $pie = new Highcharts;
        $pie->labels(['First', 'Second', 'Third']);
        $pie->dataset('Pie chat', 'pie', [5, 10, 20])->options(
            [
            'color' => ['var(--primary)', 'var(--warning)', 'var(--danger)']
            ]
        );

        return view('admin.laravel_charts', compact('bar', 'line', 'area', 'pie'));
    }

    public function databaseCharts()
    {
        /***
         * bar chart by group by age
         */
        $collection = Datatable::all()->groupBy('age');
        $data = $collection->mapWithKeys(
            function ($item, $key) {
                return [$key => count($item->values())];
            }
        );
        $data = $data->sortKeys();

        $bar = new Frappe;
        $bar->labels($data->keys());
        $bar->dataset('Role By Age', 'bar', $data->values())->options(
            [
            'color' => '#418bca'
            ]
        );

        /***
         * bar chart group by country
         */
        $collection = Datatable::all()->groupBy('country');
        $data = $collection->mapWithKeys(
            function ($item, $key) {
                return [$key => count($item->values())];
            }
        );
        $data = $data->sortKeys();

        $country = new Frappe;
        $country->labels($data->keys());
        $country->dataset('Group By Country', 'bar', $data->values())->options(
            [
            'color' => '#F89A14'
            ]
        );

        /**
         * pie chart from above $data
         */

        $pie = new Highcharts;
        $pie->labels($data->keys());
        $pie->dataset('Group By Country', 'pie', $data->values())->options(
            [
            'color' => ['var(--primary)', 'var(--warning)', 'var(--danger)', 'var(--success)', 'var(--info)']
            ]
        );

        /**
         * donut chart from above $data
         */

        $donut = new Chartjs;
        $donut->labels($data->keys());
        $donut->dataset('Group By Country', 'doughnut', $data->values())->options(
            [
            'backgroundColor' => ['#418bca', '#00bc8c', '#67c5df', '#F89A14', '#ef6f6c']
            ]
        );

        /**
         * area chart from above $data
         */

        $area = new Highcharts;
        $area->labels($data->keys());
        $area->dataset('Group By Country', 'area', $data->values())->options(
            [
            'color' => '#00bc8c'
            ]
        );

        /**
         * line chart from above $data
         */

        $line = new Frappe;
        $line->labels($data->keys());
        $line->dataset('Group By Country', 'line', $data->values())->options(
            [
            'color' => ['#418bca']
            ]
        );

        return view('admin.database_charts', compact('bar', 'country', 'pie', 'donut', 'area', 'line'));
    }
}
