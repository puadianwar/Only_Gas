<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Pembelian;

class ChartPembelian
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $jumlahbeli = Pembelian::count();
        $jumlahambil = Pembelian::where('status', 'Sudah Dikembalikan')->count();
        $jumlahBelumBeli = Pembelian::where('status', 'Belum Dikembalikan')->count();

        return $this->chart->barChart()
            ->setTitle('Statistik Data Pembelian')
            ->setWidth(1000)
            ->setHeight(200)
            ->addData('Jumlah Pembelian', [$jumlahbeli, 0])
            ->addData('Jumlah Sudah Kembali', [$jumlahambil, 0])
            ->addData('Jumlah Belum Kembali', [$jumlahBelumBeli, 0]);
    }
}
