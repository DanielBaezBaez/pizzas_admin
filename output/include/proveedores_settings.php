<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproveedores = array();
	$tdataproveedores[".truncateText"] = true;
	$tdataproveedores[".NumberOfChars"] = 80;
	$tdataproveedores[".ShortName"] = "proveedores";
	$tdataproveedores[".OwnerID"] = "empresa_id";
	$tdataproveedores[".OriginalTable"] = "proveedores";

//	field labels
$fieldLabelsproveedores = array();
$fieldToolTipsproveedores = array();
$pageTitlesproveedores = array();
$placeHoldersproveedores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproveedores["Spanish"] = array();
	$fieldToolTipsproveedores["Spanish"] = array();
	$placeHoldersproveedores["Spanish"] = array();
	$pageTitlesproveedores["Spanish"] = array();
	$fieldLabelsproveedores["Spanish"]["id"] = "Id";
	$fieldToolTipsproveedores["Spanish"]["id"] = "";
	$placeHoldersproveedores["Spanish"]["id"] = "";
	$fieldLabelsproveedores["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsproveedores["Spanish"]["descripcion"] = "";
	$placeHoldersproveedores["Spanish"]["descripcion"] = "";
	$fieldLabelsproveedores["Spanish"]["persona_id"] = "Persona";
	$fieldToolTipsproveedores["Spanish"]["persona_id"] = "";
	$placeHoldersproveedores["Spanish"]["persona_id"] = "";
	$fieldLabelsproveedores["Spanish"]["empresa_id"] = "Empresa ";
	$fieldToolTipsproveedores["Spanish"]["empresa_id"] = "";
	$placeHoldersproveedores["Spanish"]["empresa_id"] = "";
	$fieldLabelsproveedores["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsproveedores["Spanish"]["creado_por"] = "";
	$placeHoldersproveedores["Spanish"]["creado_por"] = "";
	$fieldLabelsproveedores["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsproveedores["Spanish"]["actualizado_por"] = "";
	$placeHoldersproveedores["Spanish"]["actualizado_por"] = "";
	$fieldLabelsproveedores["Spanish"]["creado"] = "Creado";
	$fieldToolTipsproveedores["Spanish"]["creado"] = "";
	$placeHoldersproveedores["Spanish"]["creado"] = "";
	$fieldLabelsproveedores["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsproveedores["Spanish"]["actualizado"] = "";
	$placeHoldersproveedores["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsproveedores["Spanish"]))
		$tdataproveedores[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproveedores[""] = array();
	$fieldToolTipsproveedores[""] = array();
	$placeHoldersproveedores[""] = array();
	$pageTitlesproveedores[""] = array();
	if (count($fieldToolTipsproveedores[""]))
		$tdataproveedores[".isUseToolTips"] = true;
}


	$tdataproveedores[".NCSearch"] = true;



$tdataproveedores[".shortTableName"] = "proveedores";
$tdataproveedores[".nSecOptions"] = 1;
$tdataproveedores[".recsPerRowPrint"] = 1;
$tdataproveedores[".mainTableOwnerID"] = "empresa_id";
$tdataproveedores[".moveNext"] = 1;
$tdataproveedores[".entityType"] = 0;

$tdataproveedores[".strOriginalTableName"] = "proveedores";

	



$tdataproveedores[".showAddInPopup"] = false;

$tdataproveedores[".showEditInPopup"] = false;

$tdataproveedores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproveedores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproveedores[".fieldsForRegister"] = array();

$tdataproveedores[".listAjax"] = false;

	$tdataproveedores[".audit"] = false;

	$tdataproveedores[".locking"] = false;

$tdataproveedores[".edit"] = true;
$tdataproveedores[".afterEditAction"] = 1;
$tdataproveedores[".closePopupAfterEdit"] = 1;
$tdataproveedores[".afterEditActionDetTable"] = "";

$tdataproveedores[".add"] = true;
$tdataproveedores[".afterAddAction"] = 1;
$tdataproveedores[".closePopupAfterAdd"] = 1;
$tdataproveedores[".afterAddActionDetTable"] = "";

$tdataproveedores[".list"] = true;



$tdataproveedores[".reorderRecordsByHeader"] = true;


$tdataproveedores[".exportFormatting"] = 2;
$tdataproveedores[".exportDelimiter"] = ",";
		
$tdataproveedores[".view"] = true;

$tdataproveedores[".import"] = true;

$tdataproveedores[".exportTo"] = true;

$tdataproveedores[".printFriendly"] = true;

$tdataproveedores[".delete"] = true;

$tdataproveedores[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataproveedores[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataproveedores[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataproveedores[".searchSaving"] = false;
//

$tdataproveedores[".showSearchPanel"] = true;
		$tdataproveedores[".flexibleSearch"] = true;

$tdataproveedores[".isUseAjaxSuggest"] = true;

$tdataproveedores[".rowHighlite"] = true;





$tdataproveedores[".ajaxCodeSnippetAdded"] = false;

$tdataproveedores[".buttonsAdded"] = false;

$tdataproveedores[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproveedores[".isUseTimeForSearch"] = false;



$tdataproveedores[".badgeColor"] = "9ACD32";


$tdataproveedores[".allSearchFields"] = array();
$tdataproveedores[".filterFields"] = array();
$tdataproveedores[".requiredSearchFields"] = array();

$tdataproveedores[".allSearchFields"][] = "descripcion";
	$tdataproveedores[".allSearchFields"][] = "persona_id";
	

$tdataproveedores[".googleLikeFields"] = array();
$tdataproveedores[".googleLikeFields"][] = "id";
$tdataproveedores[".googleLikeFields"][] = "descripcion";
$tdataproveedores[".googleLikeFields"][] = "persona_id";
$tdataproveedores[".googleLikeFields"][] = "empresa_id";
$tdataproveedores[".googleLikeFields"][] = "creado_por";
$tdataproveedores[".googleLikeFields"][] = "actualizado_por";
$tdataproveedores[".googleLikeFields"][] = "creado";
$tdataproveedores[".googleLikeFields"][] = "actualizado";


$tdataproveedores[".advSearchFields"] = array();
$tdataproveedores[".advSearchFields"][] = "descripcion";
$tdataproveedores[".advSearchFields"][] = "persona_id";

$tdataproveedores[".tableType"] = "list";

$tdataproveedores[".printerPageOrientation"] = 0;
$tdataproveedores[".nPrinterPageScale"] = 100;

$tdataproveedores[".nPrinterSplitRecords"] = 40;

$tdataproveedores[".nPrinterPDFSplitRecords"] = 40;



$tdataproveedores[".geocodingEnabled"] = false;





$tdataproveedores[".listGridLayout"] = 3;


$tdataproveedores[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataproveedores[".pageSize"] = 20;

$tdataproveedores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproveedores[".strOrderBy"] = $tstrOrderBy;

$tdataproveedores[".orderindexes"] = array();

$tdataproveedores[".sqlHead"] = "SELECT id,  	descripcion,  	persona_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdataproveedores[".sqlFrom"] = "FROM proveedores";
$tdataproveedores[".sqlWhereExpr"] = "";
$tdataproveedores[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproveedores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproveedores[".arrGroupsPerPage"] = $arrGPP;

$tdataproveedores[".highlightSearchResults"] = true;

$tableKeysproveedores = array();
$tableKeysproveedores[] = "id";
$tdataproveedores[".Keys"] = $tableKeysproveedores;

$tdataproveedores[".listFields"] = array();
$tdataproveedores[".listFields"][] = "descripcion";
$tdataproveedores[".listFields"][] = "persona_id";
$tdataproveedores[".listFields"][] = "creado_por";
$tdataproveedores[".listFields"][] = "actualizado_por";
$tdataproveedores[".listFields"][] = "creado";
$tdataproveedores[".listFields"][] = "actualizado";

$tdataproveedores[".hideMobileList"] = array();


$tdataproveedores[".viewFields"] = array();
$tdataproveedores[".viewFields"][] = "descripcion";
$tdataproveedores[".viewFields"][] = "persona_id";

$tdataproveedores[".addFields"] = array();
$tdataproveedores[".addFields"][] = "descripcion";
$tdataproveedores[".addFields"][] = "persona_id";

$tdataproveedores[".masterListFields"] = array();
$tdataproveedores[".masterListFields"][] = "id";
$tdataproveedores[".masterListFields"][] = "descripcion";
$tdataproveedores[".masterListFields"][] = "persona_id";
$tdataproveedores[".masterListFields"][] = "empresa_id";
$tdataproveedores[".masterListFields"][] = "creado_por";
$tdataproveedores[".masterListFields"][] = "actualizado_por";
$tdataproveedores[".masterListFields"][] = "creado";
$tdataproveedores[".masterListFields"][] = "actualizado";

$tdataproveedores[".inlineAddFields"] = array();

$tdataproveedores[".editFields"] = array();
$tdataproveedores[".editFields"][] = "descripcion";
$tdataproveedores[".editFields"][] = "persona_id";

$tdataproveedores[".inlineEditFields"] = array();

$tdataproveedores[".updateSelectedFields"] = array();
$tdataproveedores[".updateSelectedFields"][] = "descripcion";
$tdataproveedores[".updateSelectedFields"][] = "persona_id";


$tdataproveedores[".exportFields"] = array();
$tdataproveedores[".exportFields"][] = "descripcion";
$tdataproveedores[".exportFields"][] = "persona_id";

$tdataproveedores[".importFields"] = array();
$tdataproveedores[".importFields"][] = "descripcion";
$tdataproveedores[".importFields"][] = "persona_id";

$tdataproveedores[".printFields"] = array();
$tdataproveedores[".printFields"][] = "descripcion";
$tdataproveedores[".printFields"][] = "persona_id";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = GetFieldLabel("proveedores","id");
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








	$tdataproveedores["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = GetFieldLabel("proveedores","descripcion");
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




	$tdataproveedores["descripcion"] = $fdata;
//	persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "persona_id";
	$fdata["GoodName"] = "persona_id";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = GetFieldLabel("proveedores","persona_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "persona_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persona_id";

	
	
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
	$edata["LookupTable"] = "personas";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "nombre";
	
	

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataproveedores["persona_id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = GetFieldLabel("proveedores","empresa_id");
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








	$tdataproveedores["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = GetFieldLabel("proveedores","creado_por");
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








	$tdataproveedores["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = GetFieldLabel("proveedores","actualizado_por");
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








	$tdataproveedores["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = GetFieldLabel("proveedores","creado");
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








	$tdataproveedores["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = GetFieldLabel("proveedores","actualizado");
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








	$tdataproveedores["actualizado"] = $fdata;


$tables_data["proveedores"]=&$tdataproveedores;
$field_labels["proveedores"] = &$fieldLabelsproveedores;
$fieldToolTips["proveedores"] = &$fieldToolTipsproveedores;
$placeHolders["proveedores"] = &$placeHoldersproveedores;
$page_titles["proveedores"] = &$pageTitlesproveedores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["proveedores"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["proveedores"] = array();


	
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
					$masterTablesData["proveedores"][0] = $masterParams;
				$masterTablesData["proveedores"][0]["masterKeys"] = array();
	$masterTablesData["proveedores"][0]["masterKeys"][]="id";
				$masterTablesData["proveedores"][0]["detailKeys"] = array();
	$masterTablesData["proveedores"][0]["detailKeys"][]="empresa_id";
		
	
				$strOriginalDetailsTable="personas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personas";
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
					$masterTablesData["proveedores"][1] = $masterParams;
				$masterTablesData["proveedores"][1]["masterKeys"] = array();
	$masterTablesData["proveedores"][1]["masterKeys"][]="id";
				$masterTablesData["proveedores"][1]["detailKeys"] = array();
	$masterTablesData["proveedores"][1]["detailKeys"][]="persona_id";
		
	
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
					$masterTablesData["proveedores"][2] = $masterParams;
				$masterTablesData["proveedores"][2]["masterKeys"] = array();
	$masterTablesData["proveedores"][2]["masterKeys"][]="id";
				$masterTablesData["proveedores"][2]["detailKeys"] = array();
	$masterTablesData["proveedores"][2]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_proveedores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	persona_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM proveedores";
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
	"m_strTable" => "proveedores",
	"m_srcTableName" => "proveedores"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "proveedores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "proveedores",
	"m_srcTableName" => "proveedores"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "proveedores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "persona_id",
	"m_strTable" => "proveedores",
	"m_srcTableName" => "proveedores"
));

$proto10["m_sql"] = "persona_id";
$proto10["m_srcTableName"] = "proveedores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "proveedores",
	"m_srcTableName" => "proveedores"
));

$proto12["m_sql"] = "empresa_id";
$proto12["m_srcTableName"] = "proveedores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "proveedores",
	"m_srcTableName" => "proveedores"
));

$proto14["m_sql"] = "creado_por";
$proto14["m_srcTableName"] = "proveedores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "proveedores",
	"m_srcTableName" => "proveedores"
));

$proto16["m_sql"] = "actualizado_por";
$proto16["m_srcTableName"] = "proveedores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "proveedores",
	"m_srcTableName" => "proveedores"
));

$proto18["m_sql"] = "creado";
$proto18["m_srcTableName"] = "proveedores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "proveedores",
	"m_srcTableName" => "proveedores"
));

$proto20["m_sql"] = "actualizado";
$proto20["m_srcTableName"] = "proveedores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "proveedores";
$proto23["m_srcTableName"] = "proveedores";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "descripcion";
$proto23["m_columns"][] = "persona_id";
$proto23["m_columns"][] = "empresa_id";
$proto23["m_columns"][] = "creado_por";
$proto23["m_columns"][] = "actualizado_por";
$proto23["m_columns"][] = "creado";
$proto23["m_columns"][] = "actualizado";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "proveedores";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "proveedores";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="proveedores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_proveedores = createSqlQuery_proveedores();


	
		;

								

$tdataproveedores[".sqlquery"] = $queryData_proveedores;

$tableEvents["proveedores"] = new eventsBase;
$tdataproveedores[".hasEvents"] = false;

?>