<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30,"Laravel"=>40];
$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya", "lainnya"];
$sekorSkill = ["TIdak Memadai"=>0 , "Kurang"=>0 > 40, "Cukup"=> 40 > 60, "Baik"=>60 > 100, "Sangat Baik"=>100 > 150 ];

?>
<fieldset style="background-color:yellow;">
    <legend><h1>Form Registrasi Kelompok Belajar</h1></legend>
<table>
    <thead>
        <tr>
            <th>Form Registrasi</th>
        </tr>
    </thead>
    <tbody>
        <form method="POST">
            <tr>
                <td>NIM : </td>
                <td> 
                    <input type="text" name="nim" >
                </td>
            </tr>
            <tr>
                <td>Nama : </td>
                <td> 
                    <input type="text" name="nama" >
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin : </td>
                <td> 
                    <input type="radio" name="jk" value="Laki-laki" >Laki-Laki &nbsp;
                    <input type="radio" name="jk" value="Laki-laki" >Perempuan 
                </td>
            </tr>
            <tr>
                <td>Program Studi: </td>
                <td> 
                    <select name="prodi">
                        <?php 

                        foreach($ar_prodi as $prodi => $v){
                            ?>
                            <option value="<?= $prodi ?>"><?= $v ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming : </td>
                <td> 
                    <?php 
                    foreach ($ar_skill as $skill => $s){
                        ?>
                    <input type="checkbox" name="skill[]" value="<?= $skill ?>" ><?= $skill ?>

                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Program Studi: </td>
                <td> 
                    <select name="domisili">
                        <?php 

                        foreach($domisili as $d){
                            ?>
                            <option value="<?= $d ?>"><?= $d ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Sekor Skill : </td>
                <td> 
                    <input type="text" name="sekorkill" >
                </td>
            </tr>
            <tr>
                <td>Kategori Skill : </td>
                <td> 
                    <input type="text" name="kategoriskill">
                </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td> 
                    <input type="text" name="email">
                </td>
            </tr>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
    </table>
         
</fieldset>
<?php 
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $sekorSkill = $_POST['sekorskill'];
    
 }
 ?>
 NIM : <?= $nim ?><br>
 Nama : <?= $nama ?><br>
 Jenis Kelamin <?= $jk ?><br>
 Program Studi : <?= $prodi ?><br>
 Skill : 
 <?php 
 foreach($skill as $s){ ?>
 <?= $s ?> ,
 <?php } ?>
 <br>Domisili : <?= $domisili ?>
 <br>Sekor Skill : <?= $sekorSkill ?>
