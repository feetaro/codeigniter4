<?php namespace App\Controllers;

class Abeshi extends BaseController
{
	public function index()
	{
//		echo 'abeshi';
//		exit();


$data = [
[0, 5],
[1, 4],
[2, 3],
[3, 2],
[4, 1],
[5, 0],
];


var_dump($data);


		return view('abeshi.twig', ['aaa' => $data, 'bbb' => 'ccc']);
	}

	//--------------------------------------------------------------------

}
