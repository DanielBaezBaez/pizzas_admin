<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabarrios = array();
	$tdatabarrios[".truncateText"] = true;
	$tdatabarrios[".NumberOfChars"] = 80;
	$tdatabarrios[".ShortName"] = "barrios";
	$tdatabarrios[".OwnerID"] = "";
	$tdatabarrios[".OriginalTable"] = "barrios";

//	field labels
$fieldLabelsbarrios = array();
$fieldToolTipsbarrios = array();
$pageTitlesbarrios = array();
$placeHoldersbarrios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbarrios["Spanish"] = array();
	$fieldToolTipsbarrios["Spanish"] = array();
	$placeHoldersbarrios["Spanish"] = array();
	$pageTitlesbarrios["Spanish"] = array();
	$fieldLabelsbarrios["Spanish"]["id"] = "Id";
	$fieldToolTipsbarrios["Spanish"]["id"] = "";
	$placeHoldersbarrios["Spanish"]["id"] = "";
	$fieldLabelsbarrios["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsbarrios["Spanish"]["descripcion"] = "";
	$placeHoldersbarrios["Spanish"]["descripcion"] = "";
	$fieldLabelsbarrios["Spanish"]["empresa_id"] = "Empresa";
	$fieldToolTipsbarrios["Spanish"]["empresa_id"] = "";
	$placeHoldersbarrios["Spanish"]["empresa_id"] = "";
	$fieldLabelsbarrios["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsbarrios["Spanish"]["creado_por"] = "";
	$placeHoldersbarrios["Spanish"]["creado_por"] = "";
	$fieldLabelsbarrios["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsbarrios["Spanish"]["actualizado_por"] = "";
	$placeHoldersbarrios["Spanish"]["actualizado_por"] = "";
	$fieldLabelsbarrios["Spanish"]["creado"] = "Creado";
	$fieldToolTipsbarrios["Spanish"]["creado"] = "";
	$placeHoldersbarrios["Spanish"]["creado"] = "";
	$fieldLabelsbarrios["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsbarrios["Spanish"]["actualizado"] = "";
	$placeHoldersbarrios["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsbarrios["Spanish"]))
		$tdatabarrios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbarrios[""] = array();
	$fieldToolTipsbarrios[""] = array();
	$placeHoldersbarrios[""] = array();
	$pageTitlesbarrios[""] = array();
	if (count($fieldToolTipsbarrios[""]))
		$tdatabarrios[".isUseToolTips"] = true;
}


	$tdatabarrios[".NCSearch"] = true;



$tdatabarrios[".shortTableName"] = "barrios";
$tdatabarrios[".nSecOptions"] = 0;
$tdatabarrios[".recsPerRowPrint"] = 1;
$tdatabarrios[".mainTableOwnerID"] = "";
$tdatabarrios[".moveNext"] = 1;
$tdatabarrios[".entityType"] = 0;

$tdatabarrios[".strOriginalTableName"] = "barrios";

	



$tdatabarrios[".showAddInPopup"] = false;

$tdatabarrios[".showEditInPopup"] = false;

$tdatabarrios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabarrios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabarrios[".fieldsForRegister"] = array();

$tdatabarrios[".listAjax"] = false;

	$tdatabarrios[".audit"] = false;

	$tdatabarrios[".locking"] = false;

$tdatabarrios[".edit"] = true;
$tdatabarrios[".afterEditAction"] = 1;
$tdatabarrios[".closePopupAfterEdit"] = 1;
$tdatabarrios[".afterEditActionDetTable"] = "";

$tdatabarrios[".add"] = true;
$tdatabarrios[".afterAddAction"] = 1;
$tdatabarrios[".closePopupAfterAdd"] = 1;
$tdatabarrios[".afterAddActionDetTable"] = "";

$tdatabarrios[".list"] = true;



$tdatabarrios[".reorderRecordsByHeader"] = true;


$tdatabarrios[".exportFormatting"] = 2;
$tdatabarrios[".exportDelimiter"] = ",";
		
$tdatabarrios[".view"] = true;

$tdatabarrios[".import"] = true;

$tdatabarrios[".exportTo"] = true;

$tdatabarrios[".printFriendly"] = true;

$tdatabarrios[".delete"] = true;

$tdatabarrios[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabarrios[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatabarrios[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatabarrios[".searchSaving"] = false;
//

$tdatabarrios[".showSearchPanel"] = true;
		$tdatabarrios[".flexibleSearch"] = true;

$tdatabarrios[".isUseAjaxSuggest"] = true;

$tdatabarrios[".rowHighlite"] = true;





$tdatabarrios[".ajaxCodeSnippetAdded"] = false;

$tdatabarrios[".buttonsAdded"] = false;

$tdatabarrios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabarrios[".isUseTimeForSearch"] = false;



$tdatabarrios[".badgeColor"] = "2F4F4F";


$tdatabarrios[".allSearchFields"] = array();
$tdatabarrios[".filterFields"] = array();
$tdatabarrios[".requiredSearchFields"] = array();

$tdatabarrios[".allSearchFields"][] = "descripcion";
	

$tdatabarrios[".googleLikeFields"] = array();
$tdatabarrios[".googleLikeFields"][] = "id";
$tdatabarrios[".googleLikeFields"][] = "descripcion";
$tdatabarrios[".googleLikeFields"][] = "empresa_id";
$tdatabarrios[".googleLikeFields"][] = "creado_por";
$tdatabarrios[".googleLikeFields"][] = "actualizado_por";
$tdatabarrios[".googleLikeFields"][] = "creado";
$tdatabarrios[".googleLikeFields"][] = "actualizado";


$tdatabarrios[".advSearchFields"] = array();
$tdatabarrios[".advSearchFields"][] = "descripcion";

$tdatabarrios[".tableType"] = "list";

$tdatabarrios[".printerPageOrientation"] = 0;
$tdatabarrios[".nPrinterPageScale"] = 100;

$tdatabarrios[".nPrinterSplitRecords"] = 40;

$tdatabarrios[".nPrinterPDFSplitRecords"] = 40;



$tdatabarrios[".geocodingEnabled"] = false;





$tdatabarrios[".listGridLayout"] = 3;


$tdatabarrios[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatabarrios[".pageSize"] = 20;

$tdatabarrios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabarrios[".strOrderBy"] = $tstrOrderBy;

$tdatabarrios[".orderindexes"] = array();

$tdatabarrios[".sqlHead"] = "SELECT id,  	descripcion,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatabarrios[".sqlFrom"] = "FROM barrios";
$tdatabarrios[".sqlWhereExpr"] = "";
$tdatabarrios[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabarrios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabarrios[".arrGroupsPerPage"] = $arrGPP;

$tdatabarrios[".highlightSearchResults"] = true;

$tableKeysbarrios = array();
$tableKeysbarrios[] = "id";
$tdatabarrios[".Keys"] = $tableKeysbarrios;

$tdatabarrios[".listFields"] = array();
$tdatabarrios[".listFields"][] = "id";
$tdatabarrios[".listFields"][] = "descripcion";
$tdatabarrios[".listFields"][] = "creado_por";
$tdatabarrios[".listFields"][] = "actualizado_por";
$tdatabarrios[".listFields"][] = "creado";
$tdatabarrios[".listFields"][] = "actualizado";

$tdatabarrios[".hideMobileList"] = array();


$tdatabarrios[".viewFields"] = array();
$tdatabarrios[".viewFields"][] = "descripcion";

$tdatabarrios[".addFields"] = array();
$tdatabarrios[".addFields"][] = "descripcion";

$tdatabarrios[".masterListFields"] = array();
$tdatabarrios[".masterListFields"][] = "id";
$tdatabarrios[".masterListFields"][] = "descripcion";
$tdatabarrios[".masterListFields"][] = "empresa_id";
$tdatabarrios[".masterListFields"][] = "creado_por";
$tdatabarrios[".masterListFields"][] = "actualizado_por";
$tdatabarrios[".masterListFields"][] = "creado";
$tdatabarrios[".masterListFields"][] = "actualizado";

$tdatabarrios[".inlineAddFields"] = array();

$tdatabarrios[".editFields"] = array();
$tdatabarrios[".editFields"][] = "descripcion";

$tdatabarrios[".inlineEditFields"] = array();

$tdatabarrios[".updateSelectedFields"] = array();
$tdatabarrios[".updateSelectedFields"][] = "descripcion";


$tdatabarrios[".exportFields"] = array();
$tdatabarrios[".exportFields"][] = "descripcion";

$tdatabarrios[".importFields"] = array();
$tdatabarrios[".importFields"][] = "descripcion";

$tdatabarrios[".printFields"] = array();
$tdatabarrios[".printFields"][] = "descripcion";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "barrios";
	$fdata["Label"] = GetFieldLabel("barrios","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
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








	$tdatabarrios["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "barrios";
	$fdata["Label"] = GetFieldLabel("barrios","descripcion");
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




	$tdatabarrios["descripcion"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "barrios";
	$fdata["Label"] = GetFieldLabel("barrios","empresa_id");
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








	$tdatabarrios["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "barrios";
	$fdata["Label"] = GetFieldLabel("barrios","creado_por");
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








	$tdatabarrios["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "barrios";
	$fdata["Label"] = GetFieldLabel("barrios","actualizado_por");
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








	$tdatabarrios["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "barrios";
	$fdata["Label"] = GetFieldLabel("barrios","creado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "creado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creado";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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








	$tdatabarrios["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "barrios";
	$fdata["Label"] = GetFieldLabel("barrios","actualizado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "actualizado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actualizado";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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








	$tdatabarrios["actualizado"] = $fdata;


$tables_data["barrios"]=&$tdatabarrios;
$field_labels["barrios"] = &$fieldLabelsbarrios;
$fieldToolTips["barrios"] = &$fieldToolTipsbarrios;
$placeHolders["barrios"] = &$placeHoldersbarrios;
$page_titles["barrios"] = &$pageTitlesbarrios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["barrios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["barrios"] = array();


	
				$strOriginalDetailsTable="empresas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="empresas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "empresas";
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
					$masterTablesData["barrios"][0] = $masterParams;
				$masterTablesData["barrios"][0]["masterKeys"] = array();
	$masterTablesData["barrios"][0]["masterKeys"][]="id";
				$masterTablesData["barrios"][0]["detailKeys"] = array();
	$masterTablesData["barrios"][0]["detailKeys"][]="empresa_id";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
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
					$masterTablesData["barrios"][1] = $masterParams;
				$masterTablesData["barrios"][1]["masterKeys"] = array();
	$masterTablesData["barrios"][1]["masterKeys"][]="id";
				$masterTablesData["barrios"][1]["detailKeys"] = array();
	$masterTablesData["barrios"][1]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_barrios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM barrios";
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
	"m_strTable" => "barrios",
	"m_srcTableName" => "barrios"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "barrios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "barrios",
	"m_srcTableName" => "barrios"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "barrios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "barrios",
	"m_srcTableName" => "barrios"
));

$proto10["m_sql"] = "empresa_id";
$proto10["m_srcTableName"] = "barrios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "barrios",
	"m_srcTableName" => "barrios"
));

$proto12["m_sql"] = "creado_por";
$proto12["m_srcTableName"] = "barrios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "barrios",
	"m_srcTableName" => "barrios"
));

$proto14["m_sql"] = "actualizado_por";
$proto14["m_srcTableName"] = "barrios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "barrios",
	"m_srcTableName" => "barrios"
));

$proto16["m_sql"] = "creado";
$proto16["m_srcTableName"] = "barrios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "barrios",
	"m_srcTableName" => "barrios"
));

$proto18["m_sql"] = "actualizado";
$proto18["m_srcTableName"] = "barrios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "barrios";
$proto21["m_srcTableName"] = "barrios";
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
$proto20["m_sql"] = "barrios";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "barrios";
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
$proto0["m_srcTableName"]="barrios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_barrios = createSqlQuery_barrios();


	
		;

							

$tdatabarrios[".sqlquery"] = $queryData_barrios;

include_once(getabspath("include/barrios_events.php"));
$tableEvents["barrios"] = new eventclass_barrios;
$tdatabarrios[".hasEvents"] = true;

?>