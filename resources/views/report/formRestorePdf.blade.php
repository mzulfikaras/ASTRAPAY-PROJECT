<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="utf-8" />

<style type="text/css">
	span.cls_003{font-family:"Calibri Bold",serif;font-size:11px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	div.cls_003{font-family:"Calibri Bold",serif;font-size:11px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	span.cls_006{font-family:"Calibri",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	div.cls_006{font-family:"Calibri",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	span.cls_005{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	div.cls_005{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
	span.cls_009{font-family:"Calibri",serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	div.cls_009{font-family:"Calibri",serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	span.cls_010{font-family:"Calibri Italic",serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
	div.cls_010{font-family:"Calibri Italic",serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
	span.cls_002{font-family:"Calibri",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	div.cls_002{font-family:"Calibri",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
	span.cls_011{font-family:"Calibri Italic",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
	div.cls_011{font-family:"Calibri Italic",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
	</style>
</head>
<body>
	<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;overflow:hidden">
	<div style="position:absolute;left:0px;top:0px">
	<img src="{{public_path('/assets/img/formrestore.jpg')}}" width=595 height=841></div>
	<div style="position:absolute;left:404.11px;top:41.08px" class="cls_003"><span class="cls_003">PT. ASTRA DIGITAL ARTA</span></div>
	<div style="position:absolute;left:381.07px;top:64.48px" class="cls_006"><span class="cls_006">No. Dokumen</span></div>
	<div style="position:absolute;left:452.02px;top:64.48px" class="cls_006"><span class="cls_006">ADA-SMKI.FRM-12.04</span></div>
	<div style="position:absolute;left:251.69px;top:65.22px" class="cls_005"><span class="cls_005">Formulir</span></div>
	<div style="position:absolute;left:381.07px;top:79.26px" class="cls_006"><span class="cls_006">Tanggal</span></div>
	<div style="position:absolute;left:452.02px;top:79.26px" class="cls_006"><span class="cls_006">6 Juli 2020</span></div>
	<div style="position:absolute;left:209.45px;top:84.78px" class="cls_005"><span class="cls_005">Permohonan Restore</span></div>
	<div style="position:absolute;left:381.07px;top:93.90px" class="cls_006"><span class="cls_006">Versi</span></div>
	<div style="position:absolute;left:452.02px;top:93.90px" class="cls_006"><span class="cls_006">01</span></div>
	<div style="position:absolute;left:381.07px;top:108.54px" class="cls_006"><span class="cls_006">Klasifikasi</span></div>
	<div style="position:absolute;left:452.02px;top:108.54px" class="cls_006"><span class="cls_006">Internal</span></div>
	<div style="position:absolute;left:381.07px;top:123.18px" class="cls_006"><span class="cls_006">Halaman</span></div>
	<div style="position:absolute;left:452.02px;top:122.34px" class="cls_006"><span class="cls_006">1 dari 1</span></div>
	<div style="position:absolute;left:50.88px;top:153.66px" class="cls_009"><span class="cls_009">Tanggal Permohonan</span></div>
	<div style="position:absolute;left:158.30px;top:153.66px" class="cls_009"><span class="cls_009">: {{$report->tanggal_permohonan}}</span></div>
	<div style="position:absolute;left:50.88px;top:176.94px" class="cls_009"><span class="cls_009">Nama Pemohon</span></div>
	<div style="position:absolute;left:158.30px;top:176.94px" class="cls_009"><span class="cls_009">: {{$report->nama_pemohon}}</span></div>
	<div style="position:absolute;left:50.88px;top:202.98px" class="cls_009"><span class="cls_009">Dasar Permohonan</span></div>
	<div style="position:absolute;left:158.30px;top:209.94px" class="cls_009"><span class="cls_009">: {{$report->dasar_permohonan}}</span></div>
	<div style="position:absolute;left:50.88px;top:217.02px" class="cls_010"><span class="cls_010">Restore</span></div>
	<div style="position:absolute;left:50.88px;top:253.05px" class="cls_009"><span class="cls_009">Nama Informasi / Data</span></div>
	<div style="position:absolute;left:158.30px;top:253.05px" class="cls_009"><span class="cls_009">: {{$report->nama_info}}</span></div>
	<div style="position:absolute;left:50.88px;top:296.01px" class="cls_009"><span class="cls_009">Tujuan / target </span><span class="cls_010">Restore</span></div>
	<div style="position:absolute;left:158.30px;top:296.01px" class="cls_009"><span class="cls_009">: {{$report->tujuan}}</span></div>
	<div style="position:absolute;left:50.88px;top:374.61px" class="cls_009"><span class="cls_009">Rencana</span></div>
	<div style="position:absolute;left:104.13px;top:374.61px" class="cls_009"><span class="cls_009">Pemulihan</span></div>
	<div style="position:absolute;left:50.88px;top:388.65px" class="cls_009"><span class="cls_009">(</span><span class="cls_010">Fallback</span></div>
	<div style="position:absolute;left:103.28px;top:388.65px" class="cls_010"><span class="cls_010">Procedure</span><span class="cls_009">)</span></div>
	<div style="position:absolute;left:158.30px;top:388.65px" class="cls_009"><span class="cls_009">: {{$report->rencana_pemulihan}}</span></div>
	<div style="position:absolute;left:50.88px;top:402.71px" class="cls_009"><span class="cls_009">jika </span><span class="cls_010">Restore </span><span class="cls_009">gagal</span></div>
	<div style="position:absolute;left:360.31px;top:482.27px" class="cls_002"><span class="cls_002">Jakarta, {{$report->tanggal_permohonan}}</span></div>
	<div style="position:absolute;left:150.62px;top:509.15px" class="cls_002"><span class="cls_002">Administrator</span></div>
	<div style="position:absolute;left:389.47px;top:509.15px" class="cls_002"><span class="cls_002">Pemohon</span></div>
	<div style="position:absolute;left:96.38px;top:589.70px" class="cls_002"><span class="cls_002">( _____________________________ )</span></div>
	<div style="position:absolute;left:325.75px;top:589.70px" class="cls_002"><span class="cls_002">( _____________________________ )</span></div>
	<div style="position:absolute;left:227.09px;top:630.74px" class="cls_002"><span class="cls_002">Menyetujui / Tidak Menyetujui,</span></div>
	<div style="position:absolute;left:232.73px;top:657.62px" class="cls_011"><span class="cls_011">Management Representative</span></div>
	<div style="position:absolute;left:212.45px;top:738.16px" class="cls_002"><span class="cls_002">( _____________________________ )</span></div>
	</div>
	
</body>
</html>