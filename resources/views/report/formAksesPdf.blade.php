<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="formstyle.css">

    <title>Form Karyawan AstraPay</title>

    <style type="text/css">
        span.cls_003{font-family:"Calibri Bold",serif;font-size:11px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        div.cls_003{font-family:"Calibri Bold",serif;font-size:11px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        span.cls_006{font-family:"Calibri",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_006{font-family:"Calibri",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_005{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        div.cls_005{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        span.cls_002{font-family:"Calibri",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_002{font-family:"Calibri",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_009{font-family:"Calibri Italic",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
        div.cls_009{font-family:"Calibri Italic",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
    </style>
</head>

<body>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
        <img src="{{public_path('/assets/img/formakses.jpg')}}" width=595 height=841></div>
        <div style="position:absolute;left:404.11px;top:41.08px" class="cls_003"><span class="cls_003">PT. ASTRA DIGITAL ARTA</span></div>
        <div style="position:absolute;left:381.07px;top:64.48px" class="cls_006"><span class="cls_006">No. Dokumen</span></div>
        <div style="position:absolute;left:452.02px;top:64.48px" class="cls_006"><span class="cls_006">ADA-SMKI.FRM-13.01</span></div>
        <div style="position:absolute;left:251.69px;top:65.22px" class="cls_005"><span class="cls_005">Formulir</span></div>
        <div style="position:absolute;left:381.07px;top:79.26px" class="cls_006"><span class="cls_006">Tanggal</span></div>
        <div style="position:absolute;left:452.02px;top:79.26px" class="cls_006"><span class="cls_006">6 Juli 2020</span></div>
        <div style="position:absolute;left:216.05px;top:84.78px" class="cls_005"><span class="cls_005">Permohonan Akses</span></div>
        <div style="position:absolute;left:381.07px;top:93.90px" class="cls_006"><span class="cls_006">Versi</span></div>
        <div style="position:absolute;left:452.02px;top:93.90px" class="cls_006"><span class="cls_006">01</span></div>
        <div style="position:absolute;left:381.07px;top:108.54px" class="cls_006"><span class="cls_006">Klasifikasi</span></div>
        <div style="position:absolute;left:452.02px;top:108.54px" class="cls_006"><span class="cls_006">Internal</span></div>
        <div style="position:absolute;left:381.07px;top:123.18px" class="cls_006"><span class="cls_006">Halaman</span></div>
        <div style="position:absolute;left:452.02px;top:122.34px" class="cls_006"><span class="cls_006">1 dari 1</span></div>
        <div style="position:absolute;left:62.06px;top:152.22px" class="cls_002"><span class="cls_002">Tanggal Permohonan</span></div>
        <div style="position:absolute;left:189.65px;top:152.22px" class="cls_002"><span class="cls_002">: {{$report->tanggal_permohonan}}</span></div>
        <div style="position:absolute;left:62.06px;top:175.50px" class="cls_002"><span class="cls_002">Identitas Pemohon</span></div>
        <div style="position:absolute;left:62.06px;top:198.18px" class="cls_002"><span class="cls_002">Nama dan NIP</span></div>
        <div style="position:absolute;left:189.65px;top:198.18px" class="cls_002"><span class="cls_002">: {{$report->nama_pemohon}} - {{$report->nip}}</span></div>
        <div style="position:absolute;left:62.06px;top:221.34px" class="cls_002"><span class="cls_002">Bagian / Fungsi</span></div>
        <div style="position:absolute;left:189.65px;top:221.34px" class="cls_002"><span class="cls_002">: {{$report->bagian}}</span></div>
        <div style="position:absolute;left:62.06px;top:240.93px" class="cls_002"><span class="cls_002">Sistem / Aset yang akan</span></div>
        <div style="position:absolute;left:189.65px;top:248.73px" class="cls_002"><span class="cls_002">: {{$report->kategori_akses->kategori_akses}}</span></div>
        <div style="position:absolute;left:62.06px;top:256.41px" class="cls_002"><span class="cls_002">diakses</span></div>\
        <div style="position:absolute;left:62.06px;top:299.13px" class="cls_002"><span class="cls_002">Alasan Kebutuhan</span></div>
        <div style="position:absolute;left:189.65px;top:299.13px" class="cls_002"><span class="cls_002">: {{$report->alasan_akses}}</span></div>
        <div style="position:absolute;left:62.06px;top:368.73px" class="cls_002"><span class="cls_002">Tingkat Hak akses</span></div>
        <div style="position:absolute;left:189.65px;top:368.73px" class="cls_002"><span class="cls_002">: {{$report->tingkat_akses}}</span></div>
        <div style="position:absolute;left:365.59px;top:426.95px" class="cls_002"><span class="cls_002">Jakarta, {{$report->tanggal_permohonan}}</span></div>
        <div style="position:absolute;left:138.74px;top:453.83px" class="cls_002"><span class="cls_002">Atasan  Pemohon</span></div>
        <div style="position:absolute;left:395.71px;top:453.83px" class="cls_002"><span class="cls_002">Pemohon</span></div>
        <div style="position:absolute;left:106.58px;top:534.47px" class="cls_002"><span class="cls_002">( ________________________ )</span></div>
        <div style="position:absolute;left:345.67px;top:534.47px" class="cls_002"><span class="cls_002">( ________________________ )</span></div>
        <div style="position:absolute;left:166.46px;top:574.70px" class="cls_002"><span class="cls_002">Permohonan Hak Akses ini : DISETUJUI / TIDAK DISETUJUI*</span></div>
        <div style="position:absolute;left:225.05px;top:615.02px" class="cls_002"><span class="cls_002">Jakarta,</span></div>
        <div style="position:absolute;left:232.73px;top:641.90px" class="cls_009"><span class="cls_009">Management Representative</span></div>
        <div style="position:absolute;left:212.21px;top:735.88px" class="cls_002"><span class="cls_002">(</span></div>
        <div style="position:absolute;left:379.87px;top:735.88px" class="cls_002"><span class="cls_002">)</span></div>
        <div style="position:absolute;left:56.64px;top:794.20px" class="cls_006"><span class="cls_006">* coret yang tidak perlu</span></div>
    </div>
</body>

</html>