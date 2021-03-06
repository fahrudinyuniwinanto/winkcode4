<?php

namespace App\Controllers;

use App\Models\UrusanModel;
use App\Models\SubUrusanModel;
use App\Models\MakroModel;

require APPPATH . 'thirdParty/vendor/autoload.php';
// echo BASEPATH.'third_party/vendor/autoload.php';die();
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReadExcel extends BaseController
{
	protected $UrusanModel;
	protected $SubUrusanModel;
	protected $MakroModel;

	public function __construct()
	{
		$this->UrusanModel = new UrusanModel();
		$this->SubUrusanModel = new SubUrusanModel();
		$this->MakroModel = new MakroModel();
	}

	public function index()
	{
		$data = [];
		return view('readexcel/lppd_readexcel', $data);
	}
	public function indexMakro()
	{
		$data = [];
		return view('readexcel/makro_readexcel', $data);
	}


	//INDEX 
	public function importOutput()
	{
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load($_FILES['thefile']['tmp_name']);
		$d = $spreadsheet->getSheet(0)->toArray();
		$data = $spreadsheet->getActiveSheet()->toArray();
		$jmlDataTerinsert = 0;
		// \wfDebug($data);
		$i = 1;
		unset($data[0]); //remove header
		unset($data[1]); //remove header
		unset($data[2]); //remove header
		unset($data[3]); //remove header
		unset($data[4]); //remove header

		foreach ($data as $k => $v) {
			if ($v[1] == "") {
				continue;
			}
			$dUrusan = [
				'urusan' => $v[1],
				'output_outcome' => 'OP',
				'created_at' => date('Y-m-d H:i:s'),
				'isactive' => '1',
			];
			if (@$this->UrusanModel->where('urusan', $v[1])->where('output_outcome', 'OP')->first()['urusan'] == "") {
				$this->UrusanModel->save($dUrusan);
				$lastid = $this->UrusanModel->insertID;
			}
			// ================================
			$dIkk = [
				'ikk' => $v[3],
				'satuan' => $v[5],
				'capaian' => $v[6],
				'id_sub_urusan' => $lastid,
				'created_at' => date('Y-m-d H:i:s'),
				'created_by' => session()->get('username'),
			];
			$this->IkkModel->save($dIkk);
			// ================================
			$dRumus = [
				'rumus' => $v[4],
				'satuan' => $v[5],
				'elemen_data' => $v[6],
				'created_at' => date('Y-m-d H:i:s'),
				'created_by' => session()->get('username'),
			];
			$this->RumusModel->save($dRumus);
			// ================================
		}
		//kasih flash
		// redirect($_SERVER['HTTP_REFERER']); //redirect back
	}

	public function importMakro()
	{
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load($_FILES['thefile']['tmp_name']);
		$d = $spreadsheet->getSheet(0)->toArray();
		$data = $spreadsheet->getActiveSheet()->toArray();
		$jmlDataTerinsert = 0;
		// \wfDebug($data);
		$i = 1;
		unset($data[0]); //remove header
		unset($data[1]); //remove header
		unset($data[2]); //remove header
		unset($data[3]); //remove header
		unset($data[4]); //remove header

		foreach ($data as $k => $v) {
			$tahunLalu = [
				'ikk' => $v[1],
				'tahun' => (date('Y') - 1),
				'capaian_kinerja' => $v[2],
				'laju_kinerja' => $v[4],
				'created_at' => date('Y-m-d H:i:s'),
			];
			$this->MakroModel->save($tahunLalu);
			$tahunIni = [
				'ikk' => $v[1],
				'tahun' => date('Y'),
				'capaian_kinerja' => $v[2],
				'laju_kinerja' => $v[4],
				'created_at' => date('Y-m-d H:i:s'),
			];
			$this->MakroModel->save($tahunIni);
		}
		//kasih flash
		// redirect($_SERVER['HTTP_REFERER']); //redirect back
	}
}

/* End of file Urusan.php */
 /* Location: ./app/controllers/Urusan.php */
 /* Please DO NOT modify this information : */
 /* Generated by Ligatcode Codeigniter 4 CRUD Generator 2022-02-19 03:33:06 */