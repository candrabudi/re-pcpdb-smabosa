<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PPDB</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .header{
            widows: 100%;
            /* border: 1px solid #333; */
            min-height: 100px;
        }
        .clear{
            clear: both;
        }
        .header .logo{
            width: 15%;
            height: 100px;
            /* padding: 5px; */
            box-sizing: border-box;
            border: 1px solid #333;
            float: left;
        }
        .header .logo img{
            width: 80%;
            /* height: 50%; */
            display: block;
            margin-left: 10px;
            margin-top: 5px;
        }
        .header .head-text{
            width: 50%;
            min-height: 100px;
            border: 1px solid #333;
            float: left;
        }
        .header .head-text .text-1{
            border-bottom: 2px solid #333;
            height: 45px;
        }
        .header .head-text .text-2{
            height: 45px;
        }
        .header .head-text .text-1 h1{
            font-size: 18px;
            text-align: center;
            line-height: 35px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .header .head-text .text-2 h1{
            font-size: 16px;
            text-align: center;
            line-height: 25px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .header .number-head{
            width: 34%;
            /* border: 1px solid #333; */
            float: left;
            font-size: 12px
        }
        .header .number-head td, th{
            height: 20.2px;
            padding: 2px;
        }
        .header-register{
            width: 100%;
            min-height: 200px;
        }
        .header-register .box-1{
            width: 70%;
            float: left;
        }
        .header-register .box-1 h1{
            font-size: 24px;
            margin-top: 50px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            margin-bottom: 20px;

        }
        .header-register .box-1 p{
            font-size: 16px;

            font-family: Arial, Helvetica, sans-serif;

        }
        .box-2{
            width: 30%;
            float: left;
        }
        .box-2 h1{text-align: center}
        .box-2 img{
            width: 60%;
            margin-top: 50px;
        }
        .biodata{
            width: 100%;
            min-height: 200px;
        }
        .biodata h1{
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .biodata h2{
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        .biodata .box-biodata{
            width: 100%;
            height: 50px;
            display: block;
            margin-bottom: -10px;
        }
        .biodata .left{
            width: 30%;
            float: left;
            height: 30px;
        }
        .biodata .left h2{
            margin-left: 20px;
            margin-top: 10px;
        }
        .biodata .right h2{
            margin-top: 10px;
        }
        .biodata .right{
            width: 70%;
            float: left;
            height: 30px;
        }


        /* DATA SEKOLAH */
        .school-container{
            width: 100%;
            min-height: 200px;
            margin-top: 30px;
        }
        .school-container h1{
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .school-container h2{
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        .school-container .box-school{
            width: 100%;
            height: 50px;
            display: block;
            margin-bottom: -10px;
        }
        .school-container .left{
            width: 30%;
            float: left;
            height: 30px;
        }
        .school-container .left h2{
            margin-left: 20px;
            margin-top: 10px;
        }
        .school-container .right h2{
            margin-top: 10px;
        }
        .school-container .right{
            width: 70%;
            float: left;
            height: 30px;
        }
        
        .school-container .box-left{
            width: 50%;
            min-height: 50px;
            float: left;
            font-size: 10px;
        }
        .school-container .box-right{
            width: 50%;
            float: right;
            min-height: 50px;
            font-size: 12px;
        }
        .jumlah-presensi{
            position: absolute;
            margin-top: 180px;
            margin-left: -50px;
        }
        .page-break {
            page-break-after: always;
        }

        .biodata h3{
            font-size: 16px;
            font-weight: bold;
        }
        .signature{
            width: 100%;
            min-height: 50px;
        }
        .signature .left{
            width: 50%;
            float: left;
            font-size: 14px;
            min-height: 50px;
        }
        .signature .right{
            width: 50%;
            float: left;
            font-size: 14px;
            min-height: 50px;
        }
        .signature h2{
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="header">

        <div class="logo">
            <img src="https://yt3.ggpht.com/ytc/AMLnZu9hzIz9yT5ReA7X4MBAL1RYxhXrhO1t84_JijHZxg=s900-c-k-c0x00ffffff-no-rj" alt="">
        </div>
        <div class="head-text">
            <div class="text-1">
                <h1>SMA BOPKRI 1 YOGYAKARTA</h1>
            </div>
            <div class="text-2">
                <h1>FORMULIR PENDAFTARAN PCPDB TAHUN PELAJARAN 2023-2024</h1>
            </div>
        </div>
        <div class="number-head">
            <table width="100%">
                <tr>
                    <th>NO. DOKUMEN</th>
                    <td>: FM. SMABOSA/SIS-{{$student->id}}</td>
                </tr>
                <tr>
                    <th>NO. REVISI</th>
                    <td>: 00</td>
                </tr>
                <tr>
                    <th>TGL. TERBIT</th>
                    <td>: {{tanggal_local($student->created_at)}}</td>
                </tr>
                <tr>
                    <th>HALAMAN</th>
                    <td>: 1 dari 3</td>
                </tr>
            </table>
        </div>

    </div>
    <div class="clear"></div>

    <div class="header-register">
        <div class="box-1">
            <h1>NO PENDAFTARAN : F{{$student->id}}</h1>
            {{-- <p>Mohon ditulis dengan lengkap dan benar menggunakan huruf cetak</p>
            <p>Berilah tanda lingkaran pada pilihan jawaban sesuai keadaan.</p> --}}
        </div>
        <div class="box-2">
            <h1><img src="../public/file_foto/{{$student->StudentDocument->pas_photo}}"></h1>
        </div>
    </div>

    <div class="biodata">
        <h1>A. DATA CALON PESERTA DIDIK</h1>
        <div class="box-biodata" style="margin-top: 30px;">
            <div class="left">
                <h2>1. Nama Lengkap</h2>
            </div>
            <div class="right">
                <h2>: {{$student->full_name}}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left">
                <h2>2. NISN (sesuai ijasah SD)</h2>
            </div>
            <div class="right">
                <h2>: {{$student->nisn}}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left">
                <h2>3. Jenis Kelamin *)</h2>
            </div>
            <div class="right">
                <h2>: {{$student->gender}}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left">
                <h2>4. Tempat, Tgl Lahir</h2>
            </div>
            <div class="right">
                <h2>: {{$student->place_of_birth.', '.$student->date_of_birth }}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left">
                <h2>5. Agama</h2>
            </div>
            <div class="right">
                <h2>: {{$student->religion}}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left">
                <h2>6. Alamat</h2>
            </div>
            <div class="right">
                <h2>: {{$student->address}}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left">
                <h2>7. Email</h2>
            </div>
            <div class="right">
                <h2>: {{$student->email}}</h2>
            </div>
        </div>
    </div>
    <div class="school-container">
        <h1>B. ASAL SEKOLAH CALON PESERTA DIDIK :</h1>
        <div class="box-school" style="margin-top: 30px;">
            <div class="left">
                <h2>1. Nama Sekolah Asal</h2>
            </div>
            <div class="right">
                <h2>: {{$student->SchoolOrigin->school_name}}</h2>
            </div>
        </div>
        <div class="box-school">
            <div class="left">
                <h2>2. Alamat Sekolah Asal</h2>
            </div>
            <div class="right">
                <h2>: {{$student->SchoolOrigin->school_address}}</h2>
            </div>
        </div>
        <div class="box-school">
            <div class="left">
                <h2>3. No. Telepon SMP</h2>
            </div>
            <div class="right">
                <h2>: {{$student->SchoolOrigin->no_telp}}</h2>
            </div>
        </div>
        <div class="box-school">
            <div class="left">
                <h2>4. Rapor SMP</h2>
            </div>
            <div class="right">
                <div class="box-left">
                    <table width="80%">
                        <tr>
                          <th>Kelas</th>
                          <th>Sem</th>
                          <th>Rata-Rata</th>
                        </tr>
                        <tr>
                          <td rowspan="2">VII</td>
                          <td>1</td>
                          <td>{{$student->StudentScore->score_vii_1}}</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>{{$student->StudentScore->score_vii_2}}</td>
                        </tr>
                        <tr>
                          <td rowspan="2">VIII</td>
                          <td>1</td>
                          <td>{{$student->StudentScore->score_viii_1}}</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>{{$student->StudentScore->score_viii_2}}</td>
                        </tr>
                        <tr>
                          <td rowspan="2">IX</td>
                          <td>1</td>
                          <td>{{$student->StudentScore->score_ix_1}}</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>{{$student->StudentScore->score_ix_2}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Rata rata</td>
                            <td>{{!empty($student->StudentScore->total_score) ? round($student->StudentScore->total_score / $total_count_score, 2) : 0}}</td>
                        </tr>
                    </table>
                </div>
                <div class="box-right">
                    <p class="jumlah-presensi">Jumlah</p>
                    <table width="80%">
                        <tr>
                            <th colspan="3" style="text-align: center">Presensi</th>
                        </tr>
                        <tr>
                          <th>Sakit</th>
                          <th>Izin</th>
                          <th>Tanpa Ket</th>
                        </tr>
                        <tr>
                          <td>{{$student->StudentPresence->s_vii_1}}</td>
                          <td>{{$student->StudentPresence->i_vii_1}}</td>
                          <td>{{$student->StudentPresence->tk_vii_1}}</td>
                        </tr>
                        <tr>
                            <td>{{$student->StudentPresence->s_vii_2}}</td>
                            <td>{{$student->StudentPresence->i_vii_2}}</td>
                            <td>{{$student->StudentPresence->tk_vii_2}}</td>
                        </tr>
                        <tr>
                            <td>{{$student->StudentPresence->s_viii_1}}</td>
                            <td>{{$student->StudentPresence->i_viii_1}}</td>
                            <td>{{$student->StudentPresence->tk_viii_1}}</td>
                        </tr>
                        <tr>
                            <td>{{$student->StudentPresence->s_viii_2}}</td>
                            <td>{{$student->StudentPresence->i_viii_2}}</td>
                            <td>{{$student->StudentPresence->tk_viii_2}}</td>
                        </tr>
                        <tr>
                            <td>{{$student->StudentPresence->s_ix_1}}</td>
                            <td>{{$student->StudentPresence->i_ix_1}}</td>
                            <td>{{$student->StudentPresence->tk_ix_1}}</td>
                        </tr>
                        <tr>
                            <td>{{$student->StudentPresence->s_ix_2}}</td>
                            <td>{{$student->StudentPresence->i_ix_2}}</td>
                            <td>{{$student->StudentPresence->tk_ix_2}}</td>
                        </tr>
                        <tr>
                            <td>{{$student->StudentPresence->total_sick}}</td>
                            <td>{{$student->StudentPresence->total_permission}}</td>
                            <td>{{$student->StudentPresence->total_alpa}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>

    <div class="header">

        <div class="logo">
            <img src="https://yt3.ggpht.com/ytc/AMLnZu9hzIz9yT5ReA7X4MBAL1RYxhXrhO1t84_JijHZxg=s900-c-k-c0x00ffffff-no-rj" alt="">
        </div>
        <div class="head-text">
            <div class="text-1">
                <h1>SMA BOPKRI 1 YOGYAKARTA</h1>
            </div>
            <div class="text-2">
                <h1>FORMULIR PENDAFTARAN PCPDB TAHUN PELAJARAN 2023-2024</h1>
            </div>
        </div>
        <div class="number-head">
            <table width="100%">
                <tr>
                    <th>NO. DOKUMEN</th>
                    <td>: FM. SMABOSA/SIS-{{$student->id}}</td>
                </tr>
                <tr>
                    <th>NO. REVISI</th>
                    <td>: 00</td>
                </tr>
                <tr>
                    <th>TGL. TERBIT</th>
                    <td>: {{tanggal_local($student->created_at)}}</td>
                </tr>
                <tr>
                    <th>HALAMAN</th>
                    <td>: 2 dari 3</td>
                </tr>
            </table>
        </div>

    </div>
    <div class="clear"></div>
    <div class="biodata" style="margin-top: 20px;">
        <h1>C. DATA ORANG TUA / WALI CALON PESERTA DIDIK</h1>
        <div style="margin-top: 30px"></div>
        <h3 style="margin-left: 15px;marign-top: 40px;display:block;">1. Ayah</h3>
        <div class="box-biodata" style="margin-top: 10px; margin-left: 20px;">
            <div class="left">
                 <h2 style="font-size: 12px;">a. Nama Lengkap</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentFather->father_name}}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">b. Tempat /Tgl. Lahir</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentFather->place_of_birth.', '.$student->StudentFather->date_of_birth}}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">c. Agama</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentFather->religion}}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">d. Pendidikan *)</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentFather->education }}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">e. Pekerjaan</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentFather->profession }}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">f. Penghasilan / bulan</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentFather->income }}</h2>
            </div>
        </div>



        <h3 style="margin-left: 15px;">2. Ibu</h3>
        <div class="box-biodata" style="margin-top: 10px; margin-left: 20px;">
            <div class="left">
                 <h2 style="font-size: 12px;">a. Nama Lengkap</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentMother->mother_name}}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">b. Tempat /Tgl. Lahir</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentMother->place_of_birth.', '.$student->StudentMother->date_of_birth}}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">c. Agama</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentMother->religion}}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">d. Pendidikan *)</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentMother->education }}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">e. Pekerjaan</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentMother->profession }}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">f. Penghasilan / bulan</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentMother->income }}</h2>
            </div>
        </div>
        <div class="box-biodata" style="margin-left: 20px;margin-top: -10px;top: -30px;">
            <div class="left">
                 <h2 style="font-size: 12px;">g. Alamat lengkap orang tua</h2>
            </div>
            <div class="right">
                 <h2 style="font-size: 12px;">: {{$student->StudentMother->parent_address }}</h2>
            </div>
        </div>
    </div>


    <div class="biodata">
        <h1>D. DATA CALON PESERTA DIDIK</h1>
        <div class="box-biodata" style="margin-top: 10px;">
            <div class="left" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">1. No. Telp. Rumah</h2>
            </div>
            <div class="right" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">: {{$student->StudentMother->no_telp_house}}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">2. No. HP Calon Peserta Didik</h2>
            </div>
            <div class="right" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">: {{$student->no_telp}}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">3. No. WA Calon Peserta Didik</h2>
            </div>
            <div class="right" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">: {{$student->no_wa}}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">4. No.Telp/HP Ayah</h2>
            </div>
            <div class="right" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">: {{$student->StudentFather->no_wa}}</h2>
            </div>
        </div>
        <div class="box-biodata">
            <div class="left" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">5. No.Telp/HP Ibu</h2>
            </div>
            <div class="right" style="font-size: 14px;">
                <h2 style="font-size: 12px;margin-margin-bottom: -20px;">: {{$student->StudentMother->no_wa}}</h2>
            </div>
        </div>
    </div>

    <div class="page-break"></div>

    <div class="header">

        <div class="logo">
            <img src="https://yt3.ggpht.com/ytc/AMLnZu9hzIz9yT5ReA7X4MBAL1RYxhXrhO1t84_JijHZxg=s900-c-k-c0x00ffffff-no-rj" alt="">
        </div>
        <div class="head-text">
            <div class="text-1">
                <h1>SMA BOPKRI 1 YOGYAKARTA</h1>
            </div>
            <div class="text-2">
                <h1>FORMULIR PENDAFTARAN PCPDB TAHUN PELAJARAN 2023-2024</h1>
            </div>
        </div>
        <div class="number-head">
            <table width="100%">
                <tr>
                    <th>NO. DOKUMEN</th>
                    <td>: FM. SMABOSA/SIS-{{$student->id}}</td>
                </tr>
                <tr>
                    <th>NO. REVISI</th>
                    <td>: 00</td>
                </tr>
                <tr>
                    <th>TGL. TERBIT</th>
                    <td>: {{tanggal_local($student->created_at)}}</td>
                </tr>
                <tr>
                    <th>HALAMAN</th>
                    <td>: 3 dari 3</td>
                </tr>
            </table>
        </div>

    </div>
    <div class="clear"></div>
    <div class="signature" style="margin-top: 50px;">
        <div class="left">
            <h2 style="font-size: 14px;">Orang Tua/Wali Calon Peserta Didik</h2>
            <hr style="border: 1px dotted #333;width: 80%;margin-top: 125px;">
            
        </div>
        <div class="right">
            <h2 style="font-size: 14px;">Yogyakarta,…………………………………….</h2>
            <h2 style="font-size: 14px;">Calon Peserta Didik</h2>
            <hr style="border: 1px dotted #333;width: 80%;margin-top: 100px;">
            
        </div>
    </div>
</body>
</html>