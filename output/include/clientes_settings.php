<?php
require_once(getabspath("classes/cipherer.php"));




$tdataclientes = array();
	$tdataclientes[".truncateText"] = true;
	$tdataclientes[".NumberOfChars"] = 80;
	$tdataclientes[".ShortName"] = "clientes";
	$tdataclientes[".OwnerID"] = "empresa_id";
	$tdataclientes[".OriginalTable"] = "clientes";

//	field labels
$fieldLabelsclientes = array();
$fieldToolTipsclientes = array();
$pageTitlesclientes = array();
$placeHoldersclientes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsclientes["Spanish"] = array();
	$fieldToolTipsclientes["Spanish"] = array();
	$placeHoldersclientes["Spanish"] = array();
	$pageTitlesclientes["Spanish"] = array();
	$fieldLabelsclientes["Spanish"]["id"] = "Id";
	$fieldToolTipsclientes["Spanish"]["id"] = "";
	$placeHoldersclientes["Spanish"]["id"] = "";
	$fieldLabelsclientes["Spanish"]["persona_id"] = "Persona Id";
	$fieldToolTipsclientes["Spanish"]["persona_id"] = "";
	$placeHoldersclientes["Spanish"]["persona_id"] = "";
	$fieldLabelsclientes["Spanish"]["empresa_id"] = "Empresa Id";
	$fieldToolTipsclientes["Spanish"]["empresa_id"] = "";
	$placeHoldersclientes["Spanish"]["empresa_id"] = "";
	$fieldLabelsclientes["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsclientes["Spanish"]["creado_por"] = "";
	$placeHoldersclientes["Spanish"]["creado_por"] = "";
	$fieldLabelsclientes["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsclientes["Spanish"]["actualizado_por"] = "";
	$placeHoldersclientes["Spanish"]["actualizado_por"] = "";
	$fieldLabelsclientes["Spanish"]["creado"] = "Creado";
	$fieldToolTipsclientes["Spanish"]["creado"] = "";
	$placeHoldersclientes["Spanish"]["creado"] = "";
	$fieldLabelsclientes["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsclientes["Spanish"]["actualizado"] = "";
	$placeHoldersclientes["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsclientes["Spanish"]))
		$tdataclientes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsclientes[""] = array();
	$fieldToolTipsclientes[""] = array();
	$placeHoldersclientes[""] = array();
	$pageTitlesclientes[""] = array();
	if (count($fieldToolTipsclientes[""]))
		$tdataclientes[".isUseToolTips"] = true;
}


	$tdataclientes[".NCSearch"] = true;



$tdataclientes[".shortTableName"] = "clientes";
$tdataclientes[".nSecOptions"] = 1;
$tdataclientes[".recsPerRowPrint"] = 1;
$tdataclientes[".mainTableOwnerID"] = "empresa_id";
$tdataclientes[".moveNext"] = 1;
$tdataclientes[".entityType"] = 0;

$tdataclientes[".strOriginalTableName"] = "clientes";

	



$tdataclientes[".showAddInPopup"] = false;

$tdataclientes[".showEditInPopup"] = false;

$tdataclientes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataclientes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataclientes[".fieldsForRegister"] = array();

$tdataclientes[".listAjax"] = false;

	$tdataclientes[".audit"] = false;

	$tdataclientes[".locking"] = false;

$tdataclientes[".edit"] = true;
$tdataclientes[".afterEditAction"] = 1;
$tdataclientes[".closePopupAfterEdit"] = 1;
$tdataclientes[".afterEditActionDetTable"] = "";

$tdataclientes[".add"] = true;
$tdataclientes[".afterAddAction"] = 1;
$tdataclientes[".closePopupAfterAdd"] = 1;
$tdataclientes[".afterAddActionDetTable"] = "";

$tdataclientes[".list"] = true;



$tdataclientes[".reorderRecordsByHeader"] = true;


$tdataclientes[".exportFormatting"] = 2;
$tdataclientes[".exportDelimiter"] = ",";
		
$tdataclientes[".view"] = true;

$tdataclientes[".import"] = true;

$tdataclientes[".exportTo"] = true;

$tdataclientes[".printFriendly"] = true;

$tdataclientes[".delete"] = true;

$tdataclientes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataclientes[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataclientes[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataclientes[".searchSaving"] = false;
//

$tdataclientes[".showSearchPanel"] = true;
		$tdataclientes[".flexibleSearch"] = true;

$tdataclientes[".isUseAjaxSuggest"] = true;

$tdataclientes[".rowHighlite"] = true;





$tdataclientes[".ajaxCodeSnippetAdded"] = false;

$tdataclientes[".buttonsAdded"] = false;

$tdataclientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclientes[".isUseTimeForSearch"] = false;



$tdataclientes[".badgeColor"] = "E07878";


$tdataclientes[".allSearchFields"] = array();
$tdataclientes[".filterFields"] = array();
$tdataclientes[".requiredSearchFields"] = array();

$tdataclientes[".allSearchFields"][] = "id";
	$tdataclientes[".allSearchFields"][] = "persona_id";
	$tdataclientes[".allSearchFields"][] = "empresa_id";
	$tdataclientes[".allSearchFields"][] = "creado_por";
	$tdataclientes[".allSearchFields"][] = "actualizado_por";
	$tdataclientes[".allSearchFields"][] = "creado";
	$tdataclientes[".allSearchFields"][] = "actualizado";
	

$tdataclientes[".googleLikeFields"] = array();
$tdataclientes[".googleLikeFields"][] = "id";
$tdataclientes[".googleLikeFields"][] = "persona_id";
$tdataclientes[".googleLikeFields"][] = "empresa_id";
$tdataclientes[".googleLikeFields"][] = "creado_por";
$tdataclientes[".googleLikeFields"][] = "actualizado_por";
$tdataclientes[".googleLikeFields"][] = "creado";
$tdataclientes[".googleLikeFields"][] = "actualizado";


$tdataclientes[".advSearchFields"] = array();
$tdataclientes[".advSearchFields"][] = "id";
$tdataclientes[".advSearchFields"][] = "persona_id";
$tdataclientes[".advSearchFields"][] = "empresa_id";
$tdataclientes[".advSearchFields"][] = "creado_por";
$tdataclientes[".advSearchFields"][] = "actualizado_por";
$tdataclientes[".advSearchFields"][] = "creado";
$tdataclientes[".advSearchFields"][] = "actualizado";

$tdataclientes[".tableType"] = "list";

$tdataclientes[".printerPageOrientation"] = 0;
$tdataclientes[".nPrinterPageScale"] = 100;

$tdataclientes[".nPrinterSplitRecords"] = 40;

$tdataclientes[".nPrinterPDFSplitRecords"] = 40;



$tdataclientes[".geocodingEnabled"] = false;





$tdataclientes[".listGridLayout"] = 3;


$tdataclientes[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataclientes[".pageSize"] = 20;

$tdataclientes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataclientes[".strOrderBy"] = $tstrOrderBy;

$tdataclientes[".orderindexes"] = array();

$tdataclientes[".sqlHead"] = "SELECT id,  	persona_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdataclientes[".sqlFrom"] = "FROM clientes";
$tdataclientes[".sqlWhereExpr"] = "";
$tdataclientes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclientes[".arrGroupsPerPage"] = $arrGPP;

$tdataclientes[".highlightSearchResults"] = true;

$tableKeysclientes = array();
$tableKeysclientes[] = "id";
$tdataclientes[".Keys"] = $tableKeysclientes;

$tdataclientes[".listFields"] = array();
$tdataclientes[".listFields"][] = "id";
$tdataclientes[".listFields"][] = "persona_id";
$tdataclientes[".listFields"][] = "empresa_id";
$tdataclientes[".listFields"][] = "creado_por";
$tdataclientes[".listFields"][] = "actualizado_por";
$tdataclientes[".listFields"][] = "creado";
$tdataclientes[".listFields"][] = "actualizado";

$tdataclientes[".hideMobileList"] = array();


$tdataclientes[".viewFields"] = array();
$tdataclientes[".viewFields"][] = "id";
$tdataclientes[".viewFields"][] = "persona_id";
$tdataclientes[".viewFields"][] = "empresa_id";
$tdataclientes[".viewFields"][] = "creado_por";
$tdataclientes[".viewFields"][] = "actualizado_por";
$tdataclientes[".viewFields"][] = "creado";
$tdataclientes[".viewFields"][] = "actualizado";

$tdataclientes[".addFields"] = array();
$tdataclientes[".addFields"][] = "persona_id";
$tdataclientes[".addFields"][] = "creado_por";
$tdataclientes[".addFields"][] = "actualizado_por";
$tdataclientes[".addFields"][] = "creado";
$tdataclientes[".addFields"][] = "actualizado";

$tdataclientes[".masterListFields"] = array();
$tdataclientes[".masterListFields"][] = "id";
$tdataclientes[".masterListFields"][] = "persona_id";
$tdataclientes[".masterListFields"][] = "empresa_id";
$tdataclientes[".masterListFields"][] = "creado_por";
$tdataclientes[".masterListFields"][] = "actualizado_por";
$tdataclientes[".masterListFields"][] = "creado";
$tdataclientes[".masterListFields"][] = "actualizado";

$tdataclientes[".inlineAddFields"] = array();

$tdataclientes[".editFields"] = array();
$tdataclientes[".editFields"][] = "persona_id";
$tdataclientes[".editFields"][] = "empresa_id";
$tdataclientes[".editFields"][] = "creado_por";
$tdataclientes[".editFields"][] = "actualizado_por";
$tdataclientes[".editFields"][] = "creado";
$tdataclientes[".editFields"][] = "actualizado";

$tdataclientes[".inlineEditFields"] = array();

$tdataclientes[".updateSelectedFields"] = array();
$tdataclientes[".updateSelectedFields"][] = "persona_id";
$tdataclientes[".updateSelectedFields"][] = "empresa_id";
$tdataclientes[".updateSelectedFields"][] = "creado_por";
$tdataclientes[".updateSelectedFields"][] = "actualizado_por";
$tdataclientes[".updateSelectedFields"][] = "creado";
$tdataclientes[".updateSelectedFields"][] = "actualizado";


$tdataclientes[".exportFields"] = array();
$tdataclientes[".exportFields"][] = "id";
$tdataclientes[".exportFields"][] = "persona_id";
$tdataclientes[".exportFields"][] = "empresa_id";
$tdataclientes[".exportFields"][] = "creado_por";
$tdataclientes[".exportFields"][] = "actualizado_por";
$tdataclientes[".exportFields"][] = "creado";
$tdataclientes[".exportFields"][] = "actualizado";

$tdataclientes[".importFields"] = array();
$tdataclientes[".importFields"][] = "id";
$tdataclientes[".importFields"][] = "persona_id";
$tdataclientes[".importFields"][] = "empresa_id";
$tdataclientes[".importFields"][] = "creado_por";
$tdataclientes[".importFields"][] = "actualizado_por";
$tdataclientes[".importFields"][] = "creado";
$tdataclientes[".importFields"][] = "actualizado";

$tdataclientes[".printFields"] = array();
$tdataclientes[".printFields"][] = "id";
$tdataclientes[".printFields"][] = "persona_id";
$tdataclientes[".printFields"][] = "empresa_id";
$tdataclientes[".printFields"][] = "creado_por";
$tdataclientes[".printFields"][] = "actualizado_por";
$tdataclientes[".printFields"][] = "creado";
$tdataclientes[".printFields"][] = "actualizado";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataclientes["id"] = $fdata;
//	persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "persona_id";
	$fdata["GoodName"] = "persona_id";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","persona_id");
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataclientes["persona_id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","empresa_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "empresa_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empresa_id";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataclientes["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","creado_por");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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
	
	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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




	$tdataclientes["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","actualizado_por");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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
	
	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataclientes["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","creado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataclientes["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","actualizado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataclientes["actualizado"] = $fdata;


$tables_data["clientes"]=&$tdataclientes;
$field_labels["clientes"] = &$fieldLabelsclientes;
$fieldToolTips["clientes"] = &$fieldToolTipsclientes;
$placeHolders["clientes"] = &$placeHoldersclientes;
$page_titles["clientes"] = &$pageTitlesclientes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["clientes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["clientes"] = array();


	
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
					$masterTablesData["clientes"][0] = $masterParams;
				$masterTablesData["clientes"][0]["masterKeys"] = array();
	$masterTablesData["clientes"][0]["masterKeys"][]="id";
				$masterTablesData["clientes"][0]["detailKeys"] = array();
	$masterTablesData["clientes"][0]["detailKeys"][]="empresa_id";
		
	
				$strOriginalDetailsTable="personas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["clientes"][1] = $masterParams;
				$masterTablesData["clientes"][1]["masterKeys"] = array();
	$masterTablesData["clientes"][1]["masterKeys"][]="id";
				$masterTablesData["clientes"][1]["detailKeys"] = array();
	$masterTablesData["clientes"][1]["detailKeys"][]="persona_id";
		
	
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
					$masterTablesData["clientes"][2] = $masterParams;
				$masterTablesData["clientes"][2]["masterKeys"] = array();
	$masterTablesData["clientes"][2]["masterKeys"][]="id";
				$masterTablesData["clientes"][2]["detailKeys"] = array();
	$masterTablesData["clientes"][2]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_clientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	persona_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM clientes";
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
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "clientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "persona_id",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto8["m_sql"] = "persona_id";
$proto8["m_srcTableName"] = "clientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto10["m_sql"] = "empresa_id";
$proto10["m_srcTableName"] = "clientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto12["m_sql"] = "creado_por";
$proto12["m_srcTableName"] = "clientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto14["m_sql"] = "actualizado_por";
$proto14["m_srcTableName"] = "clientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto16["m_sql"] = "creado";
$proto16["m_srcTableName"] = "clientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto18["m_sql"] = "actualizado";
$proto18["m_srcTableName"] = "clientes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "clientes";
$proto21["m_srcTableName"] = "clientes";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "persona_id";
$proto21["m_columns"][] = "empresa_id";
$proto21["m_columns"][] = "creado_por";
$proto21["m_columns"][] = "actualizado_por";
$proto21["m_columns"][] = "creado";
$proto21["m_columns"][] = "actualizado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "clientes";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "clientes";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="clientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clientes = createSqlQuery_clientes();


	
		;

							

$tdataclientes[".sqlquery"] = $queryData_clientes;

$tableEvents["clientes"] = new eventsBase;
$tdataclientes[".hasEvents"] = false;

?>