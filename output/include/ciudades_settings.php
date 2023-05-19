<?php
require_once(getabspath("classes/cipherer.php"));




$tdataciudades = array();
	$tdataciudades[".truncateText"] = true;
	$tdataciudades[".NumberOfChars"] = 80;
	$tdataciudades[".ShortName"] = "ciudades";
	$tdataciudades[".OwnerID"] = "";
	$tdataciudades[".OriginalTable"] = "ciudades";

//	field labels
$fieldLabelsciudades = array();
$fieldToolTipsciudades = array();
$pageTitlesciudades = array();
$placeHoldersciudades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsciudades["Spanish"] = array();
	$fieldToolTipsciudades["Spanish"] = array();
	$placeHoldersciudades["Spanish"] = array();
	$pageTitlesciudades["Spanish"] = array();
	$fieldLabelsciudades["Spanish"]["id"] = "Id";
	$fieldToolTipsciudades["Spanish"]["id"] = "";
	$placeHoldersciudades["Spanish"]["id"] = "";
	$fieldLabelsciudades["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsciudades["Spanish"]["descripcion"] = "";
	$placeHoldersciudades["Spanish"]["descripcion"] = "";
	$fieldLabelsciudades["Spanish"]["empresa_id"] = "Empresa Id";
	$fieldToolTipsciudades["Spanish"]["empresa_id"] = "";
	$placeHoldersciudades["Spanish"]["empresa_id"] = "";
	$fieldLabelsciudades["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsciudades["Spanish"]["creado_por"] = "";
	$placeHoldersciudades["Spanish"]["creado_por"] = "";
	$fieldLabelsciudades["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsciudades["Spanish"]["actualizado_por"] = "";
	$placeHoldersciudades["Spanish"]["actualizado_por"] = "";
	$fieldLabelsciudades["Spanish"]["creado"] = "Creado";
	$fieldToolTipsciudades["Spanish"]["creado"] = "";
	$placeHoldersciudades["Spanish"]["creado"] = "";
	$fieldLabelsciudades["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsciudades["Spanish"]["actualizado"] = "";
	$placeHoldersciudades["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsciudades["Spanish"]))
		$tdataciudades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsciudades[""] = array();
	$fieldToolTipsciudades[""] = array();
	$placeHoldersciudades[""] = array();
	$pageTitlesciudades[""] = array();
	if (count($fieldToolTipsciudades[""]))
		$tdataciudades[".isUseToolTips"] = true;
}


	$tdataciudades[".NCSearch"] = true;



$tdataciudades[".shortTableName"] = "ciudades";
$tdataciudades[".nSecOptions"] = 0;
$tdataciudades[".recsPerRowPrint"] = 1;
$tdataciudades[".mainTableOwnerID"] = "";
$tdataciudades[".moveNext"] = 1;
$tdataciudades[".entityType"] = 0;

$tdataciudades[".strOriginalTableName"] = "ciudades";

	



$tdataciudades[".showAddInPopup"] = false;

$tdataciudades[".showEditInPopup"] = false;

$tdataciudades[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataciudades[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataciudades[".fieldsForRegister"] = array();

$tdataciudades[".listAjax"] = false;

	$tdataciudades[".audit"] = false;

	$tdataciudades[".locking"] = false;

$tdataciudades[".edit"] = true;
$tdataciudades[".afterEditAction"] = 1;
$tdataciudades[".closePopupAfterEdit"] = 1;
$tdataciudades[".afterEditActionDetTable"] = "";

$tdataciudades[".add"] = true;
$tdataciudades[".afterAddAction"] = 1;
$tdataciudades[".closePopupAfterAdd"] = 1;
$tdataciudades[".afterAddActionDetTable"] = "";

$tdataciudades[".list"] = true;



$tdataciudades[".reorderRecordsByHeader"] = true;


$tdataciudades[".exportFormatting"] = 2;
$tdataciudades[".exportDelimiter"] = ",";
		
$tdataciudades[".view"] = true;

$tdataciudades[".import"] = true;

$tdataciudades[".exportTo"] = true;

$tdataciudades[".printFriendly"] = true;

$tdataciudades[".delete"] = true;

$tdataciudades[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataciudades[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataciudades[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataciudades[".searchSaving"] = false;
//

$tdataciudades[".showSearchPanel"] = true;
		$tdataciudades[".flexibleSearch"] = true;

$tdataciudades[".isUseAjaxSuggest"] = true;

$tdataciudades[".rowHighlite"] = true;





$tdataciudades[".ajaxCodeSnippetAdded"] = false;

$tdataciudades[".buttonsAdded"] = false;

$tdataciudades[".addPageEvents"] = false;

// use timepicker for search panel
$tdataciudades[".isUseTimeForSearch"] = false;



$tdataciudades[".badgeColor"] = "008B8B";


$tdataciudades[".allSearchFields"] = array();
$tdataciudades[".filterFields"] = array();
$tdataciudades[".requiredSearchFields"] = array();

$tdataciudades[".allSearchFields"][] = "id";
	$tdataciudades[".allSearchFields"][] = "descripcion";
	$tdataciudades[".allSearchFields"][] = "empresa_id";
	$tdataciudades[".allSearchFields"][] = "creado_por";
	$tdataciudades[".allSearchFields"][] = "actualizado_por";
	$tdataciudades[".allSearchFields"][] = "creado";
	$tdataciudades[".allSearchFields"][] = "actualizado";
	

$tdataciudades[".googleLikeFields"] = array();
$tdataciudades[".googleLikeFields"][] = "id";
$tdataciudades[".googleLikeFields"][] = "descripcion";
$tdataciudades[".googleLikeFields"][] = "empresa_id";
$tdataciudades[".googleLikeFields"][] = "creado_por";
$tdataciudades[".googleLikeFields"][] = "actualizado_por";
$tdataciudades[".googleLikeFields"][] = "creado";
$tdataciudades[".googleLikeFields"][] = "actualizado";


$tdataciudades[".advSearchFields"] = array();
$tdataciudades[".advSearchFields"][] = "id";
$tdataciudades[".advSearchFields"][] = "descripcion";
$tdataciudades[".advSearchFields"][] = "empresa_id";
$tdataciudades[".advSearchFields"][] = "creado_por";
$tdataciudades[".advSearchFields"][] = "actualizado_por";
$tdataciudades[".advSearchFields"][] = "creado";
$tdataciudades[".advSearchFields"][] = "actualizado";

$tdataciudades[".tableType"] = "list";

$tdataciudades[".printerPageOrientation"] = 0;
$tdataciudades[".nPrinterPageScale"] = 100;

$tdataciudades[".nPrinterSplitRecords"] = 40;

$tdataciudades[".nPrinterPDFSplitRecords"] = 40;



$tdataciudades[".geocodingEnabled"] = false;





$tdataciudades[".listGridLayout"] = 3;


$tdataciudades[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataciudades[".pageSize"] = 20;

$tdataciudades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataciudades[".strOrderBy"] = $tstrOrderBy;

$tdataciudades[".orderindexes"] = array();

$tdataciudades[".sqlHead"] = "SELECT id,  	descripcion,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdataciudades[".sqlFrom"] = "FROM ciudades";
$tdataciudades[".sqlWhereExpr"] = "";
$tdataciudades[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataciudades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataciudades[".arrGroupsPerPage"] = $arrGPP;

$tdataciudades[".highlightSearchResults"] = true;

$tableKeysciudades = array();
$tableKeysciudades[] = "id";
$tdataciudades[".Keys"] = $tableKeysciudades;

$tdataciudades[".listFields"] = array();
$tdataciudades[".listFields"][] = "id";
$tdataciudades[".listFields"][] = "descripcion";
$tdataciudades[".listFields"][] = "empresa_id";
$tdataciudades[".listFields"][] = "creado_por";
$tdataciudades[".listFields"][] = "actualizado_por";
$tdataciudades[".listFields"][] = "creado";
$tdataciudades[".listFields"][] = "actualizado";

$tdataciudades[".hideMobileList"] = array();


$tdataciudades[".viewFields"] = array();
$tdataciudades[".viewFields"][] = "id";
$tdataciudades[".viewFields"][] = "descripcion";
$tdataciudades[".viewFields"][] = "empresa_id";
$tdataciudades[".viewFields"][] = "creado_por";
$tdataciudades[".viewFields"][] = "actualizado_por";
$tdataciudades[".viewFields"][] = "creado";
$tdataciudades[".viewFields"][] = "actualizado";

$tdataciudades[".addFields"] = array();
$tdataciudades[".addFields"][] = "descripcion";
$tdataciudades[".addFields"][] = "empresa_id";
$tdataciudades[".addFields"][] = "creado_por";
$tdataciudades[".addFields"][] = "actualizado_por";
$tdataciudades[".addFields"][] = "creado";
$tdataciudades[".addFields"][] = "actualizado";

$tdataciudades[".masterListFields"] = array();
$tdataciudades[".masterListFields"][] = "id";
$tdataciudades[".masterListFields"][] = "descripcion";
$tdataciudades[".masterListFields"][] = "empresa_id";
$tdataciudades[".masterListFields"][] = "creado_por";
$tdataciudades[".masterListFields"][] = "actualizado_por";
$tdataciudades[".masterListFields"][] = "creado";
$tdataciudades[".masterListFields"][] = "actualizado";

$tdataciudades[".inlineAddFields"] = array();

$tdataciudades[".editFields"] = array();
$tdataciudades[".editFields"][] = "descripcion";
$tdataciudades[".editFields"][] = "empresa_id";
$tdataciudades[".editFields"][] = "creado_por";
$tdataciudades[".editFields"][] = "actualizado_por";
$tdataciudades[".editFields"][] = "creado";
$tdataciudades[".editFields"][] = "actualizado";

$tdataciudades[".inlineEditFields"] = array();

$tdataciudades[".updateSelectedFields"] = array();
$tdataciudades[".updateSelectedFields"][] = "descripcion";
$tdataciudades[".updateSelectedFields"][] = "empresa_id";
$tdataciudades[".updateSelectedFields"][] = "creado_por";
$tdataciudades[".updateSelectedFields"][] = "actualizado_por";
$tdataciudades[".updateSelectedFields"][] = "creado";
$tdataciudades[".updateSelectedFields"][] = "actualizado";


$tdataciudades[".exportFields"] = array();
$tdataciudades[".exportFields"][] = "id";
$tdataciudades[".exportFields"][] = "descripcion";
$tdataciudades[".exportFields"][] = "empresa_id";
$tdataciudades[".exportFields"][] = "creado_por";
$tdataciudades[".exportFields"][] = "actualizado_por";
$tdataciudades[".exportFields"][] = "creado";
$tdataciudades[".exportFields"][] = "actualizado";

$tdataciudades[".importFields"] = array();
$tdataciudades[".importFields"][] = "id";
$tdataciudades[".importFields"][] = "descripcion";
$tdataciudades[".importFields"][] = "empresa_id";
$tdataciudades[".importFields"][] = "creado_por";
$tdataciudades[".importFields"][] = "actualizado_por";
$tdataciudades[".importFields"][] = "creado";
$tdataciudades[".importFields"][] = "actualizado";

$tdataciudades[".printFields"] = array();
$tdataciudades[".printFields"][] = "id";
$tdataciudades[".printFields"][] = "descripcion";
$tdataciudades[".printFields"][] = "empresa_id";
$tdataciudades[".printFields"][] = "creado_por";
$tdataciudades[".printFields"][] = "actualizado_por";
$tdataciudades[".printFields"][] = "creado";
$tdataciudades[".printFields"][] = "actualizado";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ciudades";
	$fdata["Label"] = GetFieldLabel("ciudades","id");
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




	$tdataciudades["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "ciudades";
	$fdata["Label"] = GetFieldLabel("ciudades","descripcion");
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




	$tdataciudades["descripcion"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "ciudades";
	$fdata["Label"] = GetFieldLabel("ciudades","empresa_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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




	$tdataciudades["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "ciudades";
	$fdata["Label"] = GetFieldLabel("ciudades","creado_por");
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




	$tdataciudades["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "ciudades";
	$fdata["Label"] = GetFieldLabel("ciudades","actualizado_por");
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




	$tdataciudades["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "ciudades";
	$fdata["Label"] = GetFieldLabel("ciudades","creado");
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




	$tdataciudades["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "ciudades";
	$fdata["Label"] = GetFieldLabel("ciudades","actualizado");
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




	$tdataciudades["actualizado"] = $fdata;


$tables_data["ciudades"]=&$tdataciudades;
$field_labels["ciudades"] = &$fieldLabelsciudades;
$fieldToolTips["ciudades"] = &$fieldToolTipsciudades;
$placeHolders["ciudades"] = &$placeHoldersciudades;
$page_titles["ciudades"] = &$pageTitlesciudades;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ciudades"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ciudades"] = array();


	
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
					$masterTablesData["ciudades"][0] = $masterParams;
				$masterTablesData["ciudades"][0]["masterKeys"] = array();
	$masterTablesData["ciudades"][0]["masterKeys"][]="id";
				$masterTablesData["ciudades"][0]["detailKeys"] = array();
	$masterTablesData["ciudades"][0]["detailKeys"][]="empresa_id";
		
	
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
					$masterTablesData["ciudades"][1] = $masterParams;
				$masterTablesData["ciudades"][1]["masterKeys"] = array();
	$masterTablesData["ciudades"][1]["masterKeys"][]="id";
				$masterTablesData["ciudades"][1]["detailKeys"] = array();
	$masterTablesData["ciudades"][1]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ciudades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM ciudades";
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
	"m_strTable" => "ciudades",
	"m_srcTableName" => "ciudades"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ciudades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "ciudades",
	"m_srcTableName" => "ciudades"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "ciudades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "ciudades",
	"m_srcTableName" => "ciudades"
));

$proto10["m_sql"] = "empresa_id";
$proto10["m_srcTableName"] = "ciudades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "ciudades",
	"m_srcTableName" => "ciudades"
));

$proto12["m_sql"] = "creado_por";
$proto12["m_srcTableName"] = "ciudades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "ciudades",
	"m_srcTableName" => "ciudades"
));

$proto14["m_sql"] = "actualizado_por";
$proto14["m_srcTableName"] = "ciudades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "ciudades",
	"m_srcTableName" => "ciudades"
));

$proto16["m_sql"] = "creado";
$proto16["m_srcTableName"] = "ciudades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "ciudades",
	"m_srcTableName" => "ciudades"
));

$proto18["m_sql"] = "actualizado";
$proto18["m_srcTableName"] = "ciudades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ciudades";
$proto21["m_srcTableName"] = "ciudades";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "descripcion";
$proto21["m_columns"][] = "empresa_id";
$proto21["m_columns"][] = "creado_por";
$proto21["m_columns"][] = "actualizado_por";
$proto21["m_columns"][] = "creado";
$proto21["m_columns"][] = "actualizado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "ciudades";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "ciudades";
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
$proto0["m_srcTableName"]="ciudades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ciudades = createSqlQuery_ciudades();


	
		;

							

$tdataciudades[".sqlquery"] = $queryData_ciudades;

$tableEvents["ciudades"] = new eventsBase;
$tdataciudades[".hasEvents"] = false;

?>