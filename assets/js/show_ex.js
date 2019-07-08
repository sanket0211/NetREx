function ex_show()
{
	form = document.getElementById("gwas_form");
	form.action = "home/validation";

	gwas_row = document.getElementById("box_file_up");
	ex_gwas_row = document.getElementById("box_man_in");
	gwas_row.hidden = true;
	ex_gwas_row.hidden = false;
	ex_gwas_text = document.getElementById("disease_gene_set_text");
	//ex_gwas_text.value = "Os01g0273300,Os01g0287400,Os01g0290800,Os01g0292900,Os01g0302500,Os01g0327100,Os01g0337500,Os01g0358100,Os01g0359800,Os01g0360200,Os01g0389200,Os01g0389700,Os01g0392100,Os01g0504500,Os01g0541800,Os01g0547200,Os01g0565900,Os01g0586800,Os01g0610300,Os01g0615050,Os01g0654100,Os01g0660300,Os01g0668901,Os01g0673900,Os01g0674800,Os01g0684900,Os01g0690600,Os01g0714800,Os01g0720801,Os01g0721200,Os01g0721400,Os01g0728300,Os01g0729100,Os01g0730300,Os01g0739300,Os01g0749400,Os01g0754200,Os01g0760000,Os01g0760300,Os01g0761300,Os01g0768600,Os01g0775200,Os01g0776800,Os01g0778800,Os01g0780800,Os01g0787600,Os01g0802100,Os01g0817100,Os01g0825800,Os01g0830100,Os01g0832000,Os01g0832600,Os01g0846500,Os01g0847800,Os01g0858900,Os01g0859300,Os01g0879200,Os01g0884400,Os01g0885700,Os01g0887100,Os01g0910500,Os01g0926600,Os01g0926800,Os01g0927300,Os01g0933900,Os01g0940700,Os01g0940800,Os01g0947000,Os01g0962700,Os01g0963000,Os01g0971200,Os02g0106900,Os02g0108700,Os02g0114300,Os02g0114400";
	ex_gwas_text.value = "Os02g0255500,Os01g0285300,Os06g0644200,Os03g0437200,Os10g0575000,Os12g0586000,Os06g0211200,Os02g0766700,Os09g0456200,Os08g0472000,Os02g0776400,Os03g0316200,Os07g0687900,Os05g0528000,Os11g0177400,Os05g0537400,Os01g0583100,Os07g0164900,Os10g0457600,Os04g0209200,Os12g0617400,Os03g0645900,Os07g0154100,Os01g0385400,Os02g0526400,Os01g0165000,Os01g0615100,Os03g0125100,Os03g0128700,Os05g0595100,Os11g0113700";

	//disease_row = document.getElementById("disease_row");
	//ex_disease_row = document.getElementById("ex_disease_row");
	//disease_row.hidden = true;
	//ex_disease_row.hidden = false;

	//ex_disease_text = document.getElementById("ex_disease_gene_set");
	//ex_disease_text.value = "CAD.txt";
	//ex_disease_text = document.getElementById("ex_disease_name");    
	//ex_disease_text.value = "Coronary Artery Disease (CAD)";
	stress=document.getElementById("stress");
	stress.value = 2;
	tissue=document.getElementById("tissue");
	tissue.value = 1;
	document.getElementById("btn_man_in").className = "button-primary";
	document.getElementById("btn_file_up").className = "";

}
function ex_show2()
{
	form = document.getElementById("gwas_form");
	form.action = "home/pathway_validation";

	gwas_row = document.getElementById("box_file_up");
	ex_gwas_row = document.getElementById("box_man_in");
	gwas_row.hidden = true;
	ex_gwas_row.hidden = false;
	ex_gwas_text = document.getElementById("disease_gene_set_text");
	//ex_gwas_text.value = "Os01g0273300,Os01g0287400,Os01g0290800,Os01g0292900,Os01g0302500,Os01g0327100,Os01g0337500,Os01g0358100,Os01g0359800,Os01g0360200,Os01g0389200,Os01g0389700,Os01g0392100,Os01g0504500,Os01g0541800,Os01g0547200,Os01g0565900,Os01g0586800,Os01g0610300,Os01g0615050,Os01g0654100,Os01g0660300,Os01g0668901,Os01g0673900,Os01g0674800,Os01g0684900,Os01g0690600,Os01g0714800,Os01g0720801,Os01g0721200,Os01g0721400,Os01g0728300,Os01g0729100,Os01g0730300,Os01g0739300,Os01g0749400,Os01g0754200,Os01g0760000,Os01g0760300,Os01g0761300,Os01g0768600,Os01g0775200,Os01g0776800,Os01g0778800,Os01g0780800,Os01g0787600,Os01g0802100,Os01g0817100,Os01g0825800,Os01g0830100,Os01g0832000,Os01g0832600,Os01g0846500,Os01g0847800,Os01g0858900,Os01g0859300,Os01g0879200,Os01g0884400,Os01g0885700,Os01g0887100,Os01g0910500,Os01g0926600,Os01g0926800,Os01g0927300,Os01g0933900,Os01g0940700,Os01g0940800,Os01g0947000,Os01g0962700,Os01g0963000,Os01g0971200,Os02g0106900,Os02g0108700,Os02g0114300,Os02g0114400";
	ex_gwas_text.value = "Os02g0255500,Os01g0285300,Os06g0644200,Os03g0437200,Os10g0575000,Os12g0586000,Os06g0211200,Os02g0766700,Os09g0456200,Os08g0472000,Os02g0776400,Os03g0316200,Os07g0687900,Os05g0528000,Os11g0177400,Os05g0537400,Os01g0583100,Os07g0164900,Os10g0457600,Os04g0209200,Os12g0617400,Os03g0645900,Os07g0154100,Os01g0385400,Os02g0526400,Os01g0165000,Os01g0615100,Os03g0125100,Os03g0128700,Os05g0595100,Os11g0113700";

	//disease_row = document.getElementById("disease_row");
	//ex_disease_row = document.getElementById("ex_disease_row");
	//disease_row.hidden = true;
	//ex_disease_row.hidden = false;

	//ex_disease_text = document.getElementById("ex_disease_gene_set");
	//ex_disease_text.value = "CAD.txt";
	//ex_disease_text = document.getElementById("ex_disease_name");    
	//ex_disease_text.value = "Coronary Artery Disease (CAD)";
	stress=document.getElementById("stress");
	stress.value = 2;
	tissue=document.getElementById("tissue");
	tissue.value = 1;
	document.getElementById("btn_man_in").className = "button-primary";
	document.getElementById("btn_file_up").className = "";

}


/*function ex_show()
  {
  form = document.getElementById("gwas_form");
  form.action = "toy_submit.php";

  gwas_row = document.getElementById("gwas_row");
  ex_gwas_row = document.getElementById("ex_gwas_row");
  gwas_row.hidden = true;
  ex_gwas_row.hidden = false;
  ex_gwas_text = document.getElementById("ex_gwas_input");
  ex_gwas_text.value = "CAD_lt0.01_input.txt";

  disease_row = document.getElementById("disease_row");
  ex_disease_row = document.getElementById("ex_disease_row");
  disease_row.hidden = true;
  ex_disease_row.hidden = false;

  ex_disease_text = document.getElementById("ex_disease_gene_set");
  ex_disease_text.value = "CAD.txt";
  ex_disease_text = document.getElementById("ex_disease_name");
  ex_disease_text.value = "Coronary Artery Disease (CAD)";
  }*/
function true_show()
{
	form = document.getElementById("gwas_form");
	form.action = "home/validation";

	gwas_row = document.getElementById("gwas_row");
	ex_gwas_row = document.getElementById("ex_gwas_row");
	gwas_row.hidden = false;
	ex_gwas_row.hidden = true;

	disease_row = document.getElementById("disease_row");
	ex_disease_row = document.getElementById("ex_disease_row");
	disease_row.hidden = false;
	ex_disease_row.hidden = true;
}
