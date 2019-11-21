<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<a href="https://for-tu-i-tous.blogspot.com/?m=0">Ini blog Zenta</a>
 
    <br>
 
    <p>Nama : {{ $nama }}</p>

    <p>Mata Pelajaran</p>
	<ul>
 
		@foreach($matkul as $m)
 
		<li>{{ $m }}</li>
 
		@endforeach
		
	</ul>
    <!-- foreach digunakan untuk menampilkan data array -->
</body>
</html>