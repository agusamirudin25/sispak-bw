<?php

require_once 'koneksi.php';

class diagnosis extends koneksi{

  public function tampilgejala(){

    if(isset($_POST['simpan'])){

        if(isset($_POST['G1'])&&isset($_POST['G2'])&&isset($_POST['G3'])&&isset($_POST['G4'])){
            $this->penyakit($_POST['G2'],$_POST['G3'],$_POST['G4']);
            
        }else if(isset($_POST['G1'])&&isset($_POST['G5'])&&isset($_POST['G6'])){
            $this->penyakit($_POST['G1'],$_POST['G5'],$_POST['G6']);

        }else if(isset($_POST['G7'])&&isset($_POST['G8'])&&isset($_POST['G9'])&&isset($_POST['G10'])){
            $this->penyakit($_POST['G7'],$_POST['G8'],$_POST['G9'],$_POST['G10']);
         
        }else if(isset($_POST['G11'])&&isset($_POST['12'])&&isset($_POST['G13'])){
            $this->penyakit($_POST['G11'],$_POST['G12'],$_POST['G13']);

        }else if(isset($_POST['G1'])&&isset($_POST['G14'])&&isset($_POST['G15'])){
            $this->penyakit($_POST['G1'],$_POST['G14'],$_POST['G15']);
        
        }else if(isset($_POST['G16'])&&isset($_POST['G17'])&&isset($_POST['G18'])){
            $this->penyakit($_POST['G16'],$_POST['G17'],$_POST['G18']);
         
        }else if(isset($_POST['G10'])&&isset($_POST['G19'])&&isset($_POST['G20'])){
            $this->penyakit($_POST['G10'],$_POST['G19'],$_POST['G20']);
         
        }else if(isset($_POST['G21'])&&isset($_POST['G22'])&&isset($_POST['G23'])){
            $this->penyakit($_POST['G21'],$_POST['G22'],$_POST['G23']);
         
        }else if(isset($_POST['G24'])&&isset($_POST['G25'])&&isset($_POST['G26'])){
            $this->penyakit($_POST['G24'],$_POST['G25'],$_POST['G26']);
         
        }else if(isset($_POST['G27'])&&isset($_POST['G28'])&&isset($_POST['G29'])&&isset($_POST['G30'])){
            $this->penyakit($_POST['G27'],$_POST['G28'],$_POST['G29'],$_POST['G30']);

        }else if(isset($_POST['G31'])&&isset($_POST['G32'])&&isset($_POST['G33'])){
            $this->penyakit($_POST['G31'],$_POST['G32'],$_POST['G33']);
         
        }else if(isset($_POST['G1'])&&isset($_POST['G34'])&&isset($_POST['G35'])&&isset($_POST['G36'])&&isset($_POST['G37'])){
            $this->penyakit($_POST['G1'],$_POST['G34'],$_POST['G35'],$_POST['G36'],$_POST['G37']);

        }else if(isset($_POST['G27'])&&isset($_POST['G38'])&&isset($_POST['G39'])){ 
            $this->penyakit($_POST['G27'],$_POST['G38'],$_POST['G39']);

        }else{
            ?>
<script>
alert('pp');
</script>
<?php
        }
    }
    ?>
<form action="" method="post">
    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked" name="G1" value="Bayi terlihat lemas">
        <label class="custom-control-label" for="defaultChecked">Bayi terlihat lemas</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked2">
        <label class="custom-control-label" for="defaultChecked2">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked3">
        <label class="custom-control-label" for="defaultChecked3">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked4">
        <label class="custom-control-label" for="defaultChecked4">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked5">
        <label class="custom-control-label" for="defaultChecked5">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked6">
        <label class="custom-control-label" for="defaultChecked6">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked7">
        <label class="custom-control-label" for="defaultChecked7">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked8">
        <label class="custom-control-label" for="defaultChecked8">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked9">
        <label class="custom-control-label" for="defaultChecked9">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked11">
        <label class="custom-control-label" for="defaultChecked11">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked12">
        <label class="custom-control-label" for="defaultChecked12">Default checked</label>
    </div>

    <div class="custom-control custom-checkbox" style="padding-bottom: 5px;">
        <input type="checkbox" class="custom-control-input" id="defaultChecked13">
        <label class="custom-control-label" for="defaultChecked13">Default checked</label>
    </div>
    <td>
        <button type="submit" name="simpan">input</button>
    </td>
</form>
<?php
   }}
?>
}

$diagnosis = new diagnosis($con);