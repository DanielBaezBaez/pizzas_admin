<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasucursales = array();
	$tdatasucursales[".truncateText"] = true;
	$tdatasucursales[".NumberOfChars"] = 80;
	$tdatasucursales[".ShortName"] = "sucursales";
	$tdatasucursales[".OwnerID"] = "empresa_id";
	$tdatasucursales[".OriginalTable"] = "sucursales";

//	field labels
$fieldLabelssucursales = array();
$fieldToolTipssucursales = array();
$pageTitlessucursales = array();
$placeHolderssucursales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssucursales["Spanish"] = array();
	$fieldToolTipssucursales["Spanish"] = array();
	$placeHolderssucursales["Spanish"] = array();
	$pageTitlessucursales["Spanish"] = array();
	$fieldLabelssucursales["Spanish"]["id"] = "Id";
	$fieldToolTipssucursales["Spanish"]["id"] = "";
	$placeHolderssucursales["Spanish"]["id"] = "";
	$fieldLabelssucursales["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipssucursales["Spanish"]["descripcion"] = "";
	$placeHolderssucursales["Spanish"]["descripcion"] = "";
	$fieldLabelssucursales["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipssucursales["Spanish"]["telefono"] = "";
	$placeHolderssucursales["Spanish"]["telefono"] = "";
	$fieldLabelssucursales["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipssucursales["Spanish"]["direccion"] = "";
	$placeHolderssucursales["Spanish"]["direccion"] = "";
	$fieldLabelssucursales["Spanish"]["correo"] = "Correo";
	$fieldToolTipssucursales["Spanish"]["correo"] = "";
	$placeHolderssucursales["Spanish"]["correo"] = "";
	$fieldLabelssucursales["Spanish"]["empresa_id"] = "Empresa";
	$fieldToolTipssucursales["Spanish"]["empresa_id"] = "";
	$placeHolderssucursales["Spanish"]["empresa_id"] = "";
	$fieldLabelssucursales["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipssucursales["Spanish"]["creado_por"] = "";
	$placeHolderssucursales["Spanish"]["creado_por"] = "";
	$fieldLabelssucursales["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipssucursales["Spanish"]["actualizado_por"] = "";
	$placeHolderssucursales["Spanish"]["actualizado_por"] = "";
	$fieldLabelssucursales["Spanish"]["creado"] = "Creado";
	$fieldToolTipssucursales["Spanish"]["creado"] = "";
	$placeHolderssucursales["Spanish"]["creado"] = "";
	$fieldLabelssucursales["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipssucursales["Spanish"]["actualizado"] = "";
	$placeHolderssucursales["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipssucursales["Spanish"]))
		$tdatasucursales[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssucursales[""] = array();
	$fieldToolTipssucursales[""] = array();
	$placeHolderssucursales[""] = array();
	$pageTitlessucursales[""] = array();
	if (count($fieldToolTipssucursales[""]))
		$tdatasucursales[".isUseToolTips"] = true;
}


	$tdatasucursales[".NCSearch"] = true;



$tdatasucursales[".shortTableName"] = "sucursales";
$tdatasucursales[".nSecOptions"] = 1;
$tdatasucursales[".recsPerRowPrint"] = 1;
$tdatasucursales[".mainTableOwnerID"] = "empresa_id";
$tdatasucursales[".moveNext"] = 1;
$tdatasucursales[".entityType"] = 0;

$tdatasucursales[".strOriginalTableName"] = "sucursales";

	



$tdatasucursales[".showAddInPopup"] = false;

$tdatasucursales[".showEditInPopup"] = false;

$tdatasucursales[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasucursales[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasucursales[".fieldsForRegister"] = array();

$tdatasucursales[".listAjax"] = false;

	$tdatasucursales[".audit"] = false;

	$tdatasucursales[".locking"] = false;

$tdatasucursales[".edit"] = true;
$tdatasucursales[".afterEditAction"] = 1;
$tdatasucursales[".closePopupAfterEdit"] = 1;
$tdatasucursales[".afterEditActionDetTable"] = "";

$tdatasucursales[".add"] = true;
$tdatasucursales[".afterAddAction"] = 1;
$tdatasucursales[".closePopupAfterAdd"] = 1;
$tdatasucursales[".afterAddActionDetTable"] = "";

$tdatasucursales[".list"] = true;



$tdatasucursales[".reorderRecordsByHeader"] = true;


$tdatasucursales[".exportFormatting"] = 2;
$tdatasucursales[".exportDelimiter"] = ",";
		
$tdatasucursales[".view"] = true;

$tdatasucursales[".import"] = true;

$tdatasucursales[".exportTo"] = true;

$tdatasucursales[".printFriendly"] = true;

$tdatasucursales[".delete"] = true;

$tdatasucursales[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasucursales[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatasucursales[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatasucursales[".searchSaving"] = false;
//

$tdatasucursales[".showSearchPanel"] = true;
		$tdatasucursales[".flexibleSearch"] = true;

$tdatasucursales[".isUseAjaxSuggest"] = true;

$tdatasucursales[".rowHighlite"] = true;





$tdatasucursales[".ajaxCodeSnippetAdded"] = false;

$tdatasucursales[".buttonsAdded"] = false;

$tdatasucursales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasucursales[".isUseTimeForSearch"] = false;



$tdatasucursales[".badgeColor"] = "2F4F4F";


$tdatasucursales[".allSearchFields"] = array();
$tdatasucursales[".filterFields"] = array();
$tdatasucursales[".requiredSearchFields"] = array();

$tdatasucursales[".allSearchFields"][] = "descripcion";
	$tdatasucursales[".allSearchFields"][] = "telefono";
	$tdatasucursales[".allSearchFields"][] = "direccion";
	$tdatasucursales[".allSearchFields"][] = "correo";
	

$tdatasucursales[".googleLikeFields"] = array();
$tdatasucursales[".googleLikeFields"][] = "id";
$tdatasucursales[".googleLikeFields"][] = "descripcion";
$tdatasucursales[".googleLikeFields"][] = "telefono";
$tdatasucursales[".googleLikeFields"][] = "direccion";
$tdatasucursales[".googleLikeFields"][] = "correo";
$tdatasucursales[".googleLikeFields"][] = "empresa_id";
$tdatasucursales[".googleLikeFields"][] = "creado_por";
$tdatasucursales[".googleLikeFields"][] = "actualizado_por";
$tdatasucursales[".googleLikeFields"][] = "creado";
$tdatasucursales[".googleLikeFields"][] = "actualizado";


$tdatasucursales[".advSearchFields"] = array();
$tdatasucursales[".advSearchFields"][] = "descripcion";
$tdatasucursales[".advSearchFields"][] = "telefono";
$tdatasucursales[".advSearchFields"][] = "direccion";
$tdatasucursales[".advSearchFields"][] = "correo";

$tdatasucursales[".tableType"] = "list";

$tdatasucursales[".printerPageOrientation"] = 0;
$tdatasucursales[".nPrinterPageScale"] = 100;

$tdatasucursales[".nPrinterSplitRecords"] = 40;

$tdatasucursales[".nPrinterPDFSplitRecords"] = 40;



$tdatasucursales[".geocodingEnabled"] = false;





$tdatasucursales[".listGridLayout"] = 3;


$tdatasucursales[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatasucursales[".pageSize"] = 20;

$tdatasucursales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasucursales[".strOrderBy"] = $tstrOrderBy;

$tdatasucursales[".orderindexes"] = array();

$tdatasucursales[".sqlHead"] = "SELECT id,  	descripcion,  	telefono,  	direccion,  	correo,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatasucursales[".sqlFrom"] = "FROM sucursales";
$tdatasucursales[".sqlWhereExpr"] = "";
$tdatasucursales[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasucursales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasucursales[".arrGroupsPerPage"] = $arrGPP;

$tdatasucursales[".highlightSearchResults"] = true;

$tableKeyssucursales = array();
$tableKeyssucursales[] = "id";
$tdatasucursales[".Keys"] = $tableKeyssucursales;

$tdatasucursales[".listFields"] = array();
$tdatasucursales[".listFields"][] = "descripcion";
$tdatasucursales[".listFields"][] = "telefono";
$tdatasucursales[".listFields"][] = "direccion";
$tdatasucursales[".listFields"][] = "correo";
$tdatasucursales[".listFields"][] = "creado_por";
$tdatasucursales[".listFields"][] = "actualizado_por";
$tdatasucursales[".listFields"][] = "creado";
$tdatasucursales[".listFields"][] = "actualizado";

$tdatasucursales[".hideMobileList"] = array();


$tdatasucursales[".viewFields"] = array();
$tdatasucursales[".viewFields"][] = "descripcion";
$tdatasucursales[".viewFields"][] = "telefono";
$tdatasucursales[".viewFields"][] = "direccion";
$tdatasucursales[".viewFields"][] = "correo";

$tdatasucursales[".addFields"] = array();
$tdatasucursales[".addFields"][] = "descripcion";
$tdatasucursales[".addFields"][] = "telefono";
$tdatasucursales[".addFields"][] = "direccion";
$tdatasucursales[".addFields"][] = "correo";

$tdatasucursales[".masterListFields"] = array();
$tdatasucursales[".masterListFields"][] = "id";
$tdatasucursales[".masterListFields"][] = "descripcion";
$tdatasucursales[".masterListFields"][] = "telefono";
$tdatasucursales[".masterListFields"][] = "direccion";
$tdatasucursales[".masterListFields"][] = "correo";
$tdatasucursales[".masterListFields"][] = "empresa_id";
$tdatasucursales[".masterListFields"][] = "creado_por";
$tdatasucursales[".masterListFields"][] = "actualizado_por";
$tdatasucursales[".masterListFields"][] = "creado";
$tdatasucursales[".masterListFields"][] = "actualizado";

$tdatasucursales[".inlineAddFields"] = array();

$tdatasucursales[".editFields"] = array();
$tdatasucursales[".editFields"][] = "descripcion";
$tdatasucursales[".editFields"][] = "telefono";
$tdatasucursales[".editFields"][] = "direccion";
$tdatasucursales[".editFields"][] = "correo";

$tdatasucursales[".inlineEditFields"] = array();

$tdatasucursales[".updateSelectedFields"] = array();
$tdatasucursales[".updateSelectedFields"][] = "descripcion";
$tdatasucursales[".updateSelectedFields"][] = "telefono";
$tdatasucursales[".updateSelectedFields"][] = "direccion";
$tdatasucursales[".updateSelectedFields"][] = "correo";


$tdatasucursales[".exportFields"] = array();
$tdatasucursales[".exportFields"][] = "descripcion";
$tdatasucursales[".exportFields"][] = "telefono";
$tdatasucursales[".exportFields"][] = "direccion";
$tdatasucursales[".exportFields"][] = "correo";

$tdatasucursales[".importFields"] = array();
$tdatasucursales[".importFields"][] = "descripcion";
$tdatasucursales[".importFields"][] = "telefono";
$tdatasucursales[".importFields"][] = "direccion";
$tdatasucursales[".importFields"][] = "correo";

$tdatasucursales[".printFields"] = array();
$tdatasucursales[".printFields"][] = "descripcion";
$tdatasucursales[".printFields"][] = "telefono";
$tdatasucursales[".printFields"][] = "direccion";
$tdatasucursales[".printFields"][] = "correo";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","id");
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








	$tdatasucursales["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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




	$tdatasucursales["descripcion"] = $fdata;
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","telefono");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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




	$tdatasucursales["telefono"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","direccion");
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




	$tdatasucursales["direccion"] = $fdata;
//	correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "correo";
	$fdata["GoodName"] = "correo";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","correo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "correo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correo";

	
	
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




	$tdatasucursales["correo"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","empresa_id");
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








	$tdatasucursales["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","creado_por");
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








	$tdatasucursales["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","actualizado_por");
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








	$tdatasucursales["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","creado");
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








	$tdatasucursales["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "sucursales";
	$fdata["Label"] = GetFieldLabel("sucursales","actualizado");
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








	$tdatasucursales["actualizado"] = $fdata;


$tables_data["sucursales"]=&$tdatasucursales;
$field_labels["sucursales"] = &$fieldLabelssucursales;
$fieldToolTips["sucursales"] = &$fieldToolTipssucursales;
$placeHolders["sucursales"] = &$placeHolderssucursales;
$page_titles["sucursales"] = &$pageTitlessucursales;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sucursales"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sucursales"] = array();


	
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
					$masterTablesData["sucursales"][0] = $masterParams;
				$masterTablesData["sucursales"][0]["masterKeys"] = array();
	$masterTablesData["sucursales"][0]["masterKeys"][]="id";
				$masterTablesData["sucursales"][0]["detailKeys"] = array();
	$masterTablesData["sucursales"][0]["detailKeys"][]="empresa_id";
		
	
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
					$masterTablesData["sucursales"][1] = $masterParams;
				$masterTablesData["sucursales"][1]["masterKeys"] = array();
	$masterTablesData["sucursales"][1]["masterKeys"][]="id";
				$masterTablesData["sucursales"][1]["detailKeys"] = array();
	$masterTablesData["sucursales"][1]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sucursales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	telefono,  	direccion,  	correo,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM sucursales";
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
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sucursales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "sucursales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto10["m_sql"] = "telefono";
$proto10["m_srcTableName"] = "sucursales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto12["m_sql"] = "direccion";
$proto12["m_srcTableName"] = "sucursales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "correo",
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto14["m_sql"] = "correo";
$proto14["m_srcTableName"] = "sucursales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto16["m_sql"] = "empresa_id";
$proto16["m_srcTableName"] = "sucursales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto18["m_sql"] = "creado_por";
$proto18["m_srcTableName"] = "sucursales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto20["m_sql"] = "actualizado_por";
$proto20["m_srcTableName"] = "sucursales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto22["m_sql"] = "creado";
$proto22["m_srcTableName"] = "sucursales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "sucursales",
	"m_srcTableName" => "sucursales"
));

$proto24["m_sql"] = "actualizado";
$proto24["m_srcTableName"] = "sucursales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "sucursales";
$proto27["m_srcTableName"] = "sucursales";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "descripcion";
$proto27["m_columns"][] = "telefono";
$proto27["m_columns"][] = "direccion";
$proto27["m_columns"][] = "correo";
$proto27["m_columns"][] = "empresa_id";
$proto27["m_columns"][] = "creado_por";
$proto27["m_columns"][] = "actualizado_por";
$proto27["m_columns"][] = "creado";
$proto27["m_columns"][] = "actualizado";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "sucursales";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "sucursales";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sucursales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sucursales = createSqlQuery_sucursales();


	
		;

										

$tdatasucursales[".sqlquery"] = $queryData_sucursales;

$tableEvents["sucursales"] = new eventsBase;
$tdatasucursales[".hasEvents"] = false;

?>