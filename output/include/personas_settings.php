<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapersonas = array();
	$tdatapersonas[".truncateText"] = true;
	$tdatapersonas[".NumberOfChars"] = 80;
	$tdatapersonas[".ShortName"] = "personas";
	$tdatapersonas[".OwnerID"] = "";
	$tdatapersonas[".OriginalTable"] = "personas";

//	field labels
$fieldLabelspersonas = array();
$fieldToolTipspersonas = array();
$pageTitlespersonas = array();
$placeHolderspersonas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersonas["Spanish"] = array();
	$fieldToolTipspersonas["Spanish"] = array();
	$placeHolderspersonas["Spanish"] = array();
	$pageTitlespersonas["Spanish"] = array();
	$fieldLabelspersonas["Spanish"]["id"] = "Id";
	$fieldToolTipspersonas["Spanish"]["id"] = "";
	$placeHolderspersonas["Spanish"]["id"] = "";
	$fieldLabelspersonas["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipspersonas["Spanish"]["nombre"] = "";
	$placeHolderspersonas["Spanish"]["nombre"] = "";
	$fieldLabelspersonas["Spanish"]["apellido"] = "Apellido";
	$fieldToolTipspersonas["Spanish"]["apellido"] = "";
	$placeHolderspersonas["Spanish"]["apellido"] = "";
	$fieldLabelspersonas["Spanish"]["celular"] = "Celular";
	$fieldToolTipspersonas["Spanish"]["celular"] = "";
	$placeHolderspersonas["Spanish"]["celular"] = "";
	$fieldLabelspersonas["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipspersonas["Spanish"]["cedula"] = "";
	$placeHolderspersonas["Spanish"]["cedula"] = "";
	$fieldLabelspersonas["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipspersonas["Spanish"]["direccion"] = "";
	$placeHolderspersonas["Spanish"]["direccion"] = "";
	$fieldLabelspersonas["Spanish"]["email"] = "Email";
	$fieldToolTipspersonas["Spanish"]["email"] = "";
	$placeHolderspersonas["Spanish"]["email"] = "";
	$fieldLabelspersonas["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipspersonas["Spanish"]["creado_por"] = "";
	$placeHolderspersonas["Spanish"]["creado_por"] = "";
	$fieldLabelspersonas["Spanish"]["empresa_id"] = "Empresa";
	$fieldToolTipspersonas["Spanish"]["empresa_id"] = "";
	$placeHolderspersonas["Spanish"]["empresa_id"] = "";
	$fieldLabelspersonas["Spanish"]["actualizado_por"] = "Actualizado por";
	$fieldToolTipspersonas["Spanish"]["actualizado_por"] = "";
	$placeHolderspersonas["Spanish"]["actualizado_por"] = "";
	$fieldLabelspersonas["Spanish"]["creado"] = "Creado";
	$fieldToolTipspersonas["Spanish"]["creado"] = "";
	$placeHolderspersonas["Spanish"]["creado"] = "";
	$fieldLabelspersonas["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipspersonas["Spanish"]["actualizado"] = "";
	$placeHolderspersonas["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipspersonas["Spanish"]))
		$tdatapersonas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspersonas[""] = array();
	$fieldToolTipspersonas[""] = array();
	$placeHolderspersonas[""] = array();
	$pageTitlespersonas[""] = array();
	if (count($fieldToolTipspersonas[""]))
		$tdatapersonas[".isUseToolTips"] = true;
}


	$tdatapersonas[".NCSearch"] = true;



$tdatapersonas[".shortTableName"] = "personas";
$tdatapersonas[".nSecOptions"] = 0;
$tdatapersonas[".recsPerRowPrint"] = 1;
$tdatapersonas[".mainTableOwnerID"] = "";
$tdatapersonas[".moveNext"] = 1;
$tdatapersonas[".entityType"] = 0;

$tdatapersonas[".strOriginalTableName"] = "personas";

	



$tdatapersonas[".showAddInPopup"] = false;

$tdatapersonas[".showEditInPopup"] = false;

$tdatapersonas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapersonas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapersonas[".fieldsForRegister"] = array();

$tdatapersonas[".listAjax"] = false;

	$tdatapersonas[".audit"] = false;

	$tdatapersonas[".locking"] = false;

$tdatapersonas[".edit"] = true;
$tdatapersonas[".afterEditAction"] = 1;
$tdatapersonas[".closePopupAfterEdit"] = 1;
$tdatapersonas[".afterEditActionDetTable"] = "";

$tdatapersonas[".add"] = true;
$tdatapersonas[".afterAddAction"] = 1;
$tdatapersonas[".closePopupAfterAdd"] = 1;
$tdatapersonas[".afterAddActionDetTable"] = "";

$tdatapersonas[".list"] = true;



$tdatapersonas[".reorderRecordsByHeader"] = true;


$tdatapersonas[".exportFormatting"] = 2;
$tdatapersonas[".exportDelimiter"] = ",";
		
$tdatapersonas[".view"] = true;

$tdatapersonas[".import"] = true;

$tdatapersonas[".exportTo"] = true;

$tdatapersonas[".printFriendly"] = true;

$tdatapersonas[".delete"] = true;

$tdatapersonas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapersonas[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatapersonas[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatapersonas[".searchSaving"] = false;
//

$tdatapersonas[".showSearchPanel"] = true;
		$tdatapersonas[".flexibleSearch"] = true;

$tdatapersonas[".isUseAjaxSuggest"] = true;

$tdatapersonas[".rowHighlite"] = true;





$tdatapersonas[".ajaxCodeSnippetAdded"] = false;

$tdatapersonas[".buttonsAdded"] = false;

$tdatapersonas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonas[".isUseTimeForSearch"] = false;



$tdatapersonas[".badgeColor"] = "CD5C5C";


$tdatapersonas[".allSearchFields"] = array();
$tdatapersonas[".filterFields"] = array();
$tdatapersonas[".requiredSearchFields"] = array();

$tdatapersonas[".allSearchFields"][] = "nombre";
	$tdatapersonas[".allSearchFields"][] = "apellido";
	$tdatapersonas[".allSearchFields"][] = "celular";
	$tdatapersonas[".allSearchFields"][] = "cedula";
	$tdatapersonas[".allSearchFields"][] = "direccion";
	$tdatapersonas[".allSearchFields"][] = "email";
	

$tdatapersonas[".googleLikeFields"] = array();
$tdatapersonas[".googleLikeFields"][] = "id";
$tdatapersonas[".googleLikeFields"][] = "nombre";
$tdatapersonas[".googleLikeFields"][] = "apellido";
$tdatapersonas[".googleLikeFields"][] = "celular";
$tdatapersonas[".googleLikeFields"][] = "cedula";
$tdatapersonas[".googleLikeFields"][] = "direccion";
$tdatapersonas[".googleLikeFields"][] = "email";
$tdatapersonas[".googleLikeFields"][] = "creado_por";
$tdatapersonas[".googleLikeFields"][] = "empresa_id";
$tdatapersonas[".googleLikeFields"][] = "actualizado_por";
$tdatapersonas[".googleLikeFields"][] = "creado";
$tdatapersonas[".googleLikeFields"][] = "actualizado";


$tdatapersonas[".advSearchFields"] = array();
$tdatapersonas[".advSearchFields"][] = "nombre";
$tdatapersonas[".advSearchFields"][] = "apellido";
$tdatapersonas[".advSearchFields"][] = "celular";
$tdatapersonas[".advSearchFields"][] = "cedula";
$tdatapersonas[".advSearchFields"][] = "direccion";
$tdatapersonas[".advSearchFields"][] = "email";

$tdatapersonas[".tableType"] = "list";

$tdatapersonas[".printerPageOrientation"] = 0;
$tdatapersonas[".nPrinterPageScale"] = 100;

$tdatapersonas[".nPrinterSplitRecords"] = 40;

$tdatapersonas[".nPrinterPDFSplitRecords"] = 40;



$tdatapersonas[".geocodingEnabled"] = false;





$tdatapersonas[".listGridLayout"] = 3;


$tdatapersonas[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatapersonas[".pageSize"] = 20;

$tdatapersonas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapersonas[".strOrderBy"] = $tstrOrderBy;

$tdatapersonas[".orderindexes"] = array();

$tdatapersonas[".sqlHead"] = "SELECT id,  	nombre,  	apellido,  	celular,  	cedula,  	direccion,  	email,  	creado_por,  	empresa_id,  	actualizado_por,  	creado,  	actualizado";
$tdatapersonas[".sqlFrom"] = "FROM personas";
$tdatapersonas[".sqlWhereExpr"] = "";
$tdatapersonas[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonas[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonas[".highlightSearchResults"] = true;

$tableKeyspersonas = array();
$tableKeyspersonas[] = "id";
$tdatapersonas[".Keys"] = $tableKeyspersonas;

$tdatapersonas[".listFields"] = array();
$tdatapersonas[".listFields"][] = "nombre";
$tdatapersonas[".listFields"][] = "apellido";
$tdatapersonas[".listFields"][] = "celular";
$tdatapersonas[".listFields"][] = "cedula";
$tdatapersonas[".listFields"][] = "direccion";
$tdatapersonas[".listFields"][] = "email";
$tdatapersonas[".listFields"][] = "creado_por";
$tdatapersonas[".listFields"][] = "actualizado_por";
$tdatapersonas[".listFields"][] = "creado";
$tdatapersonas[".listFields"][] = "actualizado";

$tdatapersonas[".hideMobileList"] = array();


$tdatapersonas[".viewFields"] = array();
$tdatapersonas[".viewFields"][] = "nombre";
$tdatapersonas[".viewFields"][] = "apellido";
$tdatapersonas[".viewFields"][] = "celular";
$tdatapersonas[".viewFields"][] = "cedula";
$tdatapersonas[".viewFields"][] = "direccion";
$tdatapersonas[".viewFields"][] = "email";

$tdatapersonas[".addFields"] = array();
$tdatapersonas[".addFields"][] = "nombre";
$tdatapersonas[".addFields"][] = "apellido";
$tdatapersonas[".addFields"][] = "celular";
$tdatapersonas[".addFields"][] = "cedula";
$tdatapersonas[".addFields"][] = "direccion";
$tdatapersonas[".addFields"][] = "email";

$tdatapersonas[".masterListFields"] = array();
$tdatapersonas[".masterListFields"][] = "nombre";
$tdatapersonas[".masterListFields"][] = "apellido";
$tdatapersonas[".masterListFields"][] = "celular";
$tdatapersonas[".masterListFields"][] = "cedula";
$tdatapersonas[".masterListFields"][] = "direccion";
$tdatapersonas[".masterListFields"][] = "email";

$tdatapersonas[".inlineAddFields"] = array();

$tdatapersonas[".editFields"] = array();
$tdatapersonas[".editFields"][] = "nombre";
$tdatapersonas[".editFields"][] = "apellido";
$tdatapersonas[".editFields"][] = "celular";
$tdatapersonas[".editFields"][] = "cedula";
$tdatapersonas[".editFields"][] = "direccion";
$tdatapersonas[".editFields"][] = "email";

$tdatapersonas[".inlineEditFields"] = array();

$tdatapersonas[".updateSelectedFields"] = array();
$tdatapersonas[".updateSelectedFields"][] = "nombre";
$tdatapersonas[".updateSelectedFields"][] = "apellido";
$tdatapersonas[".updateSelectedFields"][] = "celular";
$tdatapersonas[".updateSelectedFields"][] = "cedula";
$tdatapersonas[".updateSelectedFields"][] = "direccion";
$tdatapersonas[".updateSelectedFields"][] = "email";


$tdatapersonas[".exportFields"] = array();
$tdatapersonas[".exportFields"][] = "nombre";
$tdatapersonas[".exportFields"][] = "apellido";
$tdatapersonas[".exportFields"][] = "celular";
$tdatapersonas[".exportFields"][] = "cedula";
$tdatapersonas[".exportFields"][] = "direccion";
$tdatapersonas[".exportFields"][] = "email";

$tdatapersonas[".importFields"] = array();
$tdatapersonas[".importFields"][] = "nombre";
$tdatapersonas[".importFields"][] = "apellido";
$tdatapersonas[".importFields"][] = "celular";
$tdatapersonas[".importFields"][] = "cedula";
$tdatapersonas[".importFields"][] = "direccion";
$tdatapersonas[".importFields"][] = "email";

$tdatapersonas[".printFields"] = array();
$tdatapersonas[".printFields"][] = "nombre";
$tdatapersonas[".printFields"][] = "apellido";
$tdatapersonas[".printFields"][] = "celular";
$tdatapersonas[".printFields"][] = "cedula";
$tdatapersonas[".printFields"][] = "direccion";
$tdatapersonas[".printFields"][] = "email";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapersonas["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapersonas["nombre"] = $fdata;
//	apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellido";
	$fdata["GoodName"] = "apellido";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","apellido");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "apellido";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellido";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapersonas["apellido"] = $fdata;
//	celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "celular";
	$fdata["GoodName"] = "celular";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","celular");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "celular";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "celular";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapersonas["celular"] = $fdata;
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","cedula");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cedula";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapersonas["cedula"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","direccion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapersonas["direccion"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapersonas["email"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","creado_por");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "creado_por";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creado_por";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapersonas["creado_por"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","empresa_id");
	$fdata["FieldType"] = 20;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "empresa_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empresa_id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "empresas";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapersonas["empresa_id"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","actualizado_por");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "actualizado_por";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actualizado_por";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapersonas["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","creado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "creado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creado";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapersonas["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "personas";
	$fdata["Label"] = GetFieldLabel("personas","actualizado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "actualizado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actualizado";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapersonas["actualizado"] = $fdata;


$tables_data["personas"]=&$tdatapersonas;
$field_labels["personas"] = &$fieldLabelspersonas;
$fieldToolTips["personas"] = &$fieldToolTipspersonas;
$placeHolders["personas"] = &$placeHolderspersonas;
$page_titles["personas"] = &$pageTitlespersonas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["personas"] = array();
//	clientes
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="clientes";
		$detailsParam["dOriginalTable"] = "clientes";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "clientes";
	$detailsParam["dCaptionTable"] = GetTableCaption("clientes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["personas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas"][$dIndex]["detailKeys"][]="persona_id";
//	personales
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personales";
		$detailsParam["dOriginalTable"] = "personales";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personales";
	$detailsParam["dCaptionTable"] = GetTableCaption("personales");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["personas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas"][$dIndex]["detailKeys"][]="persona_id";
//	proveedores
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="proveedores";
		$detailsParam["dOriginalTable"] = "proveedores";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "proveedores";
	$detailsParam["dCaptionTable"] = GetTableCaption("proveedores");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["personas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["personas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personas"][$dIndex]["detailKeys"][]="persona_id";

// tables which are master tables for current table (detail)
$masterTablesData["personas"] = array();


	
				$strOriginalDetailsTable="empresas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="empresas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "empresas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personas"][0] = $masterParams;
				$masterTablesData["personas"][0]["masterKeys"] = array();
	$masterTablesData["personas"][0]["masterKeys"][]="id";
				$masterTablesData["personas"][0]["detailKeys"] = array();
	$masterTablesData["personas"][0]["detailKeys"][]="empresa_id";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personas"][1] = $masterParams;
				$masterTablesData["personas"][1]["masterKeys"] = array();
	$masterTablesData["personas"][1]["masterKeys"][]="id";
				$masterTablesData["personas"][1]["detailKeys"] = array();
	$masterTablesData["personas"][1]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_personas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre,  	apellido,  	celular,  	cedula,  	direccion,  	email,  	creado_por,  	empresa_id,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM personas";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "personas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "personas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto10["m_sql"] = "apellido";
$proto10["m_srcTableName"] = "personas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "celular",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto12["m_sql"] = "celular";
$proto12["m_srcTableName"] = "personas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cedula",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto14["m_sql"] = "cedula";
$proto14["m_srcTableName"] = "personas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto16["m_sql"] = "direccion";
$proto16["m_srcTableName"] = "personas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto18["m_sql"] = "email";
$proto18["m_srcTableName"] = "personas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto20["m_sql"] = "creado_por";
$proto20["m_srcTableName"] = "personas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto22["m_sql"] = "empresa_id";
$proto22["m_srcTableName"] = "personas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto24["m_sql"] = "actualizado_por";
$proto24["m_srcTableName"] = "personas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto26["m_sql"] = "creado";
$proto26["m_srcTableName"] = "personas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "personas",
	"m_srcTableName" => "personas"
));

$proto28["m_sql"] = "actualizado";
$proto28["m_srcTableName"] = "personas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "personas";
$proto31["m_srcTableName"] = "personas";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "nombre";
$proto31["m_columns"][] = "apellido";
$proto31["m_columns"][] = "celular";
$proto31["m_columns"][] = "cedula";
$proto31["m_columns"][] = "direccion";
$proto31["m_columns"][] = "email";
$proto31["m_columns"][] = "creado_por";
$proto31["m_columns"][] = "empresa_id";
$proto31["m_columns"][] = "actualizado_por";
$proto31["m_columns"][] = "creado";
$proto31["m_columns"][] = "actualizado";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "personas";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "personas";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="personas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personas = createSqlQuery_personas();


	
		;

												

$tdatapersonas[".sqlquery"] = $queryData_personas;

$tableEvents["personas"] = new eventsBase;
$tdatapersonas[".hasEvents"] = false;

?>