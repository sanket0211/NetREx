<script>
$(document).ready(function(){
		$("#dam_return a").click(function(){
				var value = "Os05g0104900,Os08g0558100,Os05g0104900,Os02g0755900,Os10g0510400,Os03g0710700,Os03g0799000,Os01g0835900,Os04g0671100,Os05g0466800,Os08g0113000,Os07g0641200,Os04g0613700,Os10g0169200";
				var input = $('#dam');
				input.val(value);
				});
});
</script>


<section id="content">

<div class="content-wrap nopadding">

<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('images/parallax/home/1.jpg') center center no-repeat; background-size: cover;"></div>

<div class="section nobg full-screen nopadding nomargin">
<div class="container vertical-middle divcenter clearfix">



<div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
<div class="panel-body" style="background-color:#9de0ad">
<?php echo form_open('home/validation'); ?>
<h3>Search for a list of Genes</h3>


<label>Stress</label>
<select name="stress">
<?php 
print_r($stresses);
foreach($stresses as $stress){
	echo '<option value="'.$stress->stress_id.'">'.$stress->stress_name.'</option>';

}
?>

</select>

<label>Tissue</label>
<select name="tissue">
<?php 

foreach($tissues as $tissue){
	echo '<option value="'.$tissue->tissue_id.'">'.$tissue->tissue_name.'</option>';

}
?>

</select>

<div class = "rowElem">
<label >Gene Ids <small>*</small></label>
<textarea id = "dam" name="genes" rows="6" cols="50"></textarea>
<div id="dam_return">
example: <a href="#" class="test">Os01g0107400,Os01g0130900,Os01g0131300...</a>
</div>
</div>

<div class = "rowElem">
<button  type="submit" value="submit">Submit</button>
</div>

</form>

<form action="<?php echo site_url('home/validate_file_upload');?>" method="post" enctype="multipart/form-data">



<div class = "rowElem">
<label >Stress</label>
<select name="stress" >
<?php 
foreach($stresses as $stress){
	echo '<option value="'.$stress->stress_id.'">'.$stress->stress_name.'</option>';

}
?>

</select>
<label>Tissue</label>
<select name="tissue" >
<?php 

foreach($tissues as $tissue){
	echo '<option value="'.$tissue->tissue_id.'">'.$tissue->tissue_name.'</option>';

}
?>

</select>
</div>

<div class = "rowElem">
<label>Gene Ids <small>*</small></label>
<input type='file' name="fileToUpload" id="fileToUpload">
</div>
<div class = "rowElem">
<button type="submit"  value="submit">Submit</button>
</div>

</form>

</div>
</div>


</div>
</div>

</div>



<div class="content-wrap">

<div class="container clearfix">





<div class="col_half col_last">



<script type="text/javascript">

$("#template-contactform").validate({
submitHandler: function(form) {
$('.form-process').fadeIn();
$(form).ajaxSubmit({
target: '#contact-form-result',
success: function() {
$('.form-process').fadeOut();
$('#template-contactform').find('.sm-form-control').val('');
$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
SEMICOLON.widget.notifications($('#contact-form-result'));
}
});
}
});

</script>

</div>



</div>

</div>

</section><!-- #content end -->


