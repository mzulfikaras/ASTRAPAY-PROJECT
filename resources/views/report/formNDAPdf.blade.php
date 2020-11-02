<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Form NDA PDF</title>

    <style type="text/css">
        span.cls_005{font-family:"Calibri Bold",serif;font-size:11px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        div.cls_005{font-family:"Calibri Bold",serif;font-size:11px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        span.cls_003{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        div.cls_003{font-family:"Calibri Bold",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        span.cls_007{font-family:"Calibri",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_007{font-family:"Calibri",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_004{font-family:"Calibri Bold Italic",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: none}
        div.cls_004{font-family:"Calibri Bold Italic",serif;font-size:16.0px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: none}
        span.cls_002{font-family:"Calibri",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_002{font-family:"Calibri",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_006{font-family:"Calibri",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_006{font-family:"Calibri",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_010{font-family:Arial,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_010{font-family:Arial,serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_011{font-family:"Calibri Italic",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
        div.cls_011{font-family:"Calibri Italic",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:italic;text-decoration: none}
    </style>
</head>
<body>

    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
        <img src="{{public_path('/assets/img/formnda.jpg')}}" width=595 height=841></div>
        <div style="position:absolute;left:404.11px;top:41.08px" class="cls_005"><span class="cls_005">PT. ASTRA DIGITAL ARTA</span></div>
        <div style="position:absolute;left:211.73px;top:45.76px" class="cls_003"><span class="cls_003">Formulir Pernyataan</span></div>
        <div style="position:absolute;left:381.07px;top:64.48px" class="cls_007"><span class="cls_007">No. Dokumen</span></div>
        <div style="position:absolute;left:452.02px;top:64.48px" class="cls_007"><span class="cls_007">ADA-SMKI.FRM-12.03</span></div>
        <div style="position:absolute;left:203.21px;top:65.22px" class="cls_003"><span class="cls_003">Menjaga Kerahasiaan /</span></div>
        <div style="position:absolute;left:381.07px;top:79.26px" class="cls_007"><span class="cls_007">Tanggal</span></div>
        <div style="position:absolute;left:452.02px;top:79.26px" class="cls_007"><span class="cls_007">6 Juli 2020</span></div>
        <div style="position:absolute;left:191.33px;top:84.78px" class="cls_004"><span class="cls_004">Non-Disclosure Agreement</span></div>
        <div style="position:absolute;left:381.07px;top:93.90px" class="cls_007"><span class="cls_007">Versi</span></div>
        <div style="position:absolute;left:452.02px;top:93.90px" class="cls_007"><span class="cls_007">01</span></div>
        <div style="position:absolute;left:381.07px;top:108.54px" class="cls_007"><span class="cls_007">Klasifikasi</span></div>
        <div style="position:absolute;left:452.02px;top:108.54px" class="cls_007"><span class="cls_007">Internal</span></div>
        <div style="position:absolute;left:259.85px;top:104.34px" class="cls_003"><span class="cls_003">(NDA)</span></div>
        <div style="position:absolute;left:381.07px;top:123.18px" class="cls_007"><span class="cls_007">Halaman</span></div>
        <div style="position:absolute;left:452.02px;top:122.34px" class="cls_007"><span class="cls_007">1 dari 1</span></div>
        <div style="position:absolute;left:56.64px;top:148.62px" class="cls_002"><span class="cls_002">Pada Hari {{ $report->tanggal_permohonan }}, saya yang bertanda</span></div>
        <div style="position:absolute;left:56.64px;top:164.10px" class="cls_002"><span class="cls_002">tangan dibawah ini :</span></div>
        <div style="position:absolute;left:62.06px;top:198.54px" class="cls_002"><span class="cls_002">Nama</span></div>
        <div style="position:absolute;left:163.10px;top:198.54px" class="cls_002"><span class="cls_002">: {{$report->nama_identitas}}</span></div>
        <div style="position:absolute;left:62.06px;top:221.82px" class="cls_002"><span class="cls_002">No. Identitas</span></div>
        <div style="position:absolute;left:163.10px;top:221.82px" class="cls_002"><span class="cls_002">: {{$report->no_identitas}}</span></div>
        <div style="position:absolute;left:62.06px;top:245.01px" class="cls_002"><span class="cls_002">Instansi</span></div>
        <div style="position:absolute;left:163.10px;top:245.01px" class="cls_002"><span class="cls_002">: {{$report->instansi}}</span></div>
        <div style="position:absolute;left:62.06px;top:268.17px" class="cls_002"><span class="cls_002">Nama Kegiatan</span></div>
        <div style="position:absolute;left:163.10px;top:268.17px" class="cls_002"><span class="cls_002">: {{$report->nama_kegiatan}}</span></div>
        <div style="position:absolute;left:62.06px;top:291.45px" class="cls_002"><span class="cls_002">Periode Kegiatan</span></div>
        <div style="position:absolute;left:163.10px;top:291.45px" class="cls_002"><span class="cls_002">: {{$report->periode_kegiatan}}</span></div>
        <div style="position:absolute;left:56.64px;top:326.37px" class="cls_002"><span class="cls_002">dengan ini menyatakan hal-hal sebagai berikut:</span></div>
        <div style="position:absolute;left:56.64px;top:339.81px" class="cls_006"><span class="cls_006">1.</span><span class="cls_010"> </span><span class="cls_002">Tunduk dan patuh kepada seluruh ketentuan yang terkait pengelolaan dan pengamanan informasi dan</span></div>
        <div style="position:absolute;left:70.82px;top:354.21px" class="cls_002"><span class="cls_002">sistem informasi yang berlaku di PT. Astra Digital Arta;</span></div>
        <div style="position:absolute;left:56.64px;top:367.65px" class="cls_006"><span class="cls_006">2.</span><span class="cls_010"> </span><span class="cls_002">Selalu menjaga Informasi Rahasia milik PT. Astra Digital Arta sesuai kebijakan dan prosedur yang berlaku;</span></div>
        <div style="position:absolute;left:56.64px;top:382.05px" class="cls_006"><span class="cls_006">3.</span><span class="cls_010"> </span><span class="cls_002">Tidak mengungkap, menyalin, memperbanyak, atau meminjamkan Informasi Rahasia untuk maksud</span></div>
        <div style="position:absolute;left:70.82px;top:396.47px" class="cls_002"><span class="cls_002">apapun di luar tugas dan tanggung jawab saya selama penugasan di PT. Astra Digital Arta;</span></div>
        <div style="position:absolute;left:56.64px;top:409.91px" class="cls_006"><span class="cls_006">4.</span><span class="cls_010"> </span><span class="cls_002">Tidak menyalahgunakan wewenang atas akses ke sistem informasi dan jaringan yang terdapat di PT.</span></div>
        <div style="position:absolute;left:70.82px;top:424.19px" class="cls_002"><span class="cls_002">Astra Digital Arta;</span></div>
        <div style="position:absolute;left:56.64px;top:437.63px" class="cls_006"><span class="cls_006">5.</span><span class="cls_010"> </span><span class="cls_002">Tidak memberikan </span><span class="cls_011">User ID</span><span class="cls_002"> dan </span><span class="cls_011">Password</span><span class="cls_002"> saya kepada pihak lain.</span></div>
        <div style="position:absolute;left:56.64px;top:465.47px" class="cls_002"><span class="cls_002">Apabila terbukti bahwa saya melakukan pelanggaran atas perihal yang telah dinyatakan dalam surat ini,</span></div>
        <div style="position:absolute;left:56.64px;top:478.91px" class="cls_002"><span class="cls_002">maka saya bersedia dikenakan sanksi sesuai dengan hukum dan peraturan yang berlaku.</span></div>
        <div style="position:absolute;left:56.64px;top:505.79px" class="cls_002"><span class="cls_002">Pernyataan ini mengikat secara individu dan institusi serta tetap berlaku walaupun penugasan saya di PT.</span></div>
        <div style="position:absolute;left:56.64px;top:519.23px" class="cls_002"><span class="cls_002">Astra Digital Arta telah berakhir.</span></div>
        <div style="position:absolute;left:56.64px;top:546.11px" class="cls_002"><span class="cls_002">Demikian, Surat Pernyataan ini saya buat dalam keadaan sadar dan tanpa paksaan dari pihak manapun.</span></div>
        <div style="position:absolute;left:335.23px;top:572.90px" class="cls_002"><span class="cls_002">Jakarta, _____ - _____ - __________</span></div>
        <div style="position:absolute;left:375.91px;top:603.86px" class="cls_002"><span class="cls_002">Yang menyatakan,</span></div>
        <div style="position:absolute;left:308.93px;top:711.86px" class="cls_002"><span class="cls_002">(</span></div>
        <div style="position:absolute;left:521.50px;top:711.86px" class="cls_002"><span class="cls_002">)</span></div>
        </div>
    
</body>
</html>