<?php 

	$images = scandir("images");//realiza uma verredura dos arquivos contidos em um diretorio

	$data = array();

	foreach ($images as $img) {
		if(!in_array($img, array(".", ".."))){
			$filename = "images" . DIRECTORY_SEPARATOR . $img;
			$info = pathinfo($filename);

			$info["size"] = filesize($filename);//retorna o tamanho do arquivo em bytes
			$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));//retorna a data de modificação do arquivo
			$info["url"] = "http://localhost/php/DIR/" . str_replace("\\", "/", $filename);

			array_push($data, $info);
		}
	}

	echo json_encode($data);

 ?>