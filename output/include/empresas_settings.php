<?php
require_once(getabspath("classes/cipherer.php"));




$tdataempresas = array();
	$tdataempresas[".truncateText"] = true;
	$tdataempresas[".NumberOfChars"] = 80;
	$tdataempresas[".ShortName"] = "empresas";
	$tdataempresas[".OwnerID"] = "";
	$tdataempresas[".OriginalTable"] = "empresas";

//	field labels
$fieldLabelsempresas = array();
$fieldToolTipsempresas = array();
$pageTitlesempresas = array();
$placeHoldersempresas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas["Spanish"] = array();
	$fieldToolTipsempresas["Spanish"] = array();
	$placeHoldersempresas["Spanish"] = array();
	$pageTitlesempresas["Spanish"] = array();
	$fieldLabelsempresas["Spanish"]["id"] = "Id";
	$fieldToolTipsempresas["Spanish"]["id"] = "";
	$placeHoldersempresas["Spanish"]["id"] = "";
	$fieldLabelsempresas["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsempresas["Spanish"]["descripcion"] = "";
	$placeHoldersempresas["Spanish"]["descripcion"] = "";
	$fieldLabelsempresas["Spanish"]["creado"] = "Creado";
	$fieldToolTipsempresas["Spanish"]["creado"] = "";
	$placeHoldersempresas["Spanish"]["creado"] = "";
	$fieldLabelsempresas["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsempresas["Spanish"]["actualizado"] = "";
	$placeHoldersempresas["Spanish"]["actualizado"] = "";
	$fieldLabelsempresas["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsempresas["Spanish"]["creado_por"] = "";
	$placeHoldersempresas["Spanish"]["creado_por"] = "";
	$fieldLabelsempresas["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsempresas["Spanish"]["actualizado_por"] = "";
	$placeHoldersempresas["Spanish"]["actualizado_por"] = "";
	if (count($fieldToolTipsempresas["Spanish"]))
		$tdataempresas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsempresas[""] = array();
	$fieldToolTipsempresas[""] = array();
	$placeHoldersempresas[""] = array();
	$pageTitlesempresas[""] = array();
	if (count($fieldToolTipsempresas[""]))
		$tdataempresas[".isUseToolTips"] = true;
}


	$tdataempresas[".NCSearch"] = true;



$tdataempresas[".shortTableName"] = "empresas";
$tdataempresas[".nSecOptions"] = 0;
$tdataempresas[".recsPerRowPrint"] = 1;
$tdataempresas[".mainTableOwnerID"] = "";
$tdataempresas[".moveNext"] = 1;
$tdataempresas[".entityType"] = 0;

$tdataempresas[".strOriginalTableName"] = "empresas";

	



$tdataempresas[".showAddInPopup"] = false;

$tdataempresas[".showEditInPopup"] = false;

$tdataempresas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataempresas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataempresas[".fieldsForRegister"] = array();

$tdataempresas[".listAjax"] = false;

	$tdataempresas[".audit"] = false;

	$tdataempresas[".locking"] = false;

$tdataempresas[".edit"] = true;
$tdataempresas[".afterEditAction"] = 1;
$tdataempresas[".closePopupAfterEdit"] = 1;
$tdataempresas[".afterEditActionDetTable"] = "";

$tdataempresas[".add"] = true;
$tdataempresas[".afterAddAction"] = 1;
$tdataempresas[".closePopupAfterAdd"] = 1;
$tdataempresas[".afterAddActionDetTable"] = "";

$tdataempresas[".list"] = true;



$tdataempresas[".reorderRecordsByHeader"] = true;


$tdataempresas[".exportFormatting"] = 2;
$tdataempresas[".exportDelimiter"] = ",";
		
$tdataempresas[".view"] = true;

$tdataempresas[".import"] = true;

$tdataempresas[".exportTo"] = true;

$tdataempresas[".printFriendly"] = true;

$tdataempresas[".delete"] = true;

$tdataempresas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataempresas[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataempresas[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataempresas[".searchSaving"] = false;
//

$tdataempresas[".showSearchPanel"] = true;
		$tdataempresas[".flexibleSearch"] = true;

$tdataempresas[".isUseAjaxSuggest"] = true;

$tdataempresas[".rowHighlite"] = true;





$tdataempresas[".ajaxCodeSnippetAdded"] = false;

$tdataempresas[".buttonsAdded"] = false;

$tdataempresas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas[".isUseTimeForSearch"] = false;



$tdataempresas[".badgeColor"] = "4169E1";


$tdataempresas[".allSearchFields"] = array();
$tdataempresas[".filterFields"] = array();
$tdataempresas[".requiredSearchFields"] = array();

$tdataempresas[".allSearchFields"][] = "descripcion";
	

$tdataempresas[".googleLikeFields"] = array();
$tdataempresas[".googleLikeFields"][] = "id";
$tdataempresas[".googleLikeFields"][] = "descripcion";
$tdataempresas[".googleLikeFields"][] = "creado";
$tdataempresas[".googleLikeFields"][] = "actualizado";
$tdataempresas[".googleLikeFields"][] = "creado_por";
$tdataempresas[".googleLikeFields"][] = "actualizado_por";


$tdataempresas[".advSearchFields"] = array();
$tdataempresas[".advSearchFields"][] = "descripcion";

$tdataempresas[".tableType"] = "list";

$tdataempresas[".printerPageOrientation"] = 0;
$tdataempresas[".nPrinterPageScale"] = 100;

$tdataempresas[".nPrinterSplitRecords"] = 40;

$tdataempresas[".nPrinterPDFSplitRecords"] = 40;



$tdataempresas[".geocodingEnabled"] = false;





$tdataempresas[".listGridLayout"] = 3;


$tdataempresas[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataempresas[".pageSize"] = 20;

$tdataempresas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempresas[".strOrderBy"] = $tstrOrderBy;

$tdataempresas[".orderindexes"] = array();

$tdataempresas[".sqlHead"] = "SELECT id,  	descripcion,  	creado,  	actualizado,  	creado_por,  	actualizado_por";
$tdataempresas[".sqlFrom"] = "FROM empresas";
$tdataempresas[".sqlWhereExpr"] = "";
$tdataempresas[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas[".highlightSearchResults"] = true;

$tableKeysempresas = array();
$tableKeysempresas[] = "id";
$tdataempresas[".Keys"] = $tableKeysempresas;

$tdataempresas[".listFields"] = array();
$tdataempresas[".listFields"][] = "descripcion";
$tdataempresas[".listFields"][] = "creado";
$tdataempresas[".listFields"][] = "actualizado";
$tdataempresas[".listFields"][] = "creado_por";
$tdataempresas[".listFields"][] = "actualizado_por";

$tdataempresas[".hideMobileList"] = array();


$tdataempresas[".viewFields"] = array();
$tdataempresas[".viewFields"][] = "descripcion";

$tdataempresas[".addFields"] = array();
$tdataempresas[".addFields"][] = "descripcion";

$tdataempresas[".masterListFields"] = array();
$tdataempresas[".masterListFields"][] = "descripcion";

$tdataempresas[".inlineAddFields"] = array();

$tdataempresas[".editFields"] = array();
$tdataempresas[".editFields"][] = "descripcion";

$tdataempresas[".inlineEditFields"] = array();

$tdataempresas[".updateSelectedFields"] = array();
$tdataempresas[".updateSelectedFields"][] = "descripcion";


$tdataempresas[".exportFields"] = array();
$tdataempresas[".exportFields"][] = "descripcion";

$tdataempresas[".importFields"] = array();
$tdataempresas[".importFields"][] = "descripcion";

$tdataempresas[".printFields"] = array();
$tdataempresas[".printFields"][] = "descripcion";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","id");
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








	$tdataempresas["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","descripcion");
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




	$tdataempresas["descripcion"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","creado");
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








	$tdataempresas["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","actualizado");
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








	$tdataempresas["actualizado"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","creado_por");
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








	$tdataempresas["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","actualizado_por");
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








	$tdataempresas["actualizado_por"] = $fdata;


$tables_data["empresas"]=&$tdataempresas;
$field_labels["empresas"] = &$fieldLabelsempresas;
$fieldToolTips["empresas"] = &$fieldToolTipsempresas;
$placeHolders["empresas"] = &$placeHoldersempresas;
$page_titles["empresas"] = &$pageTitlesempresas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empresas"] = array();
//	barrios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="barrios";
		$detailsParam["dOriginalTable"] = "barrios";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "barrios";
	$detailsParam["dCaptionTable"] = GetTableCaption("barrios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	ciudades
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ciudades";
		$detailsParam["dOriginalTable"] = "ciudades";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ciudades";
	$detailsParam["dCaptionTable"] = GetTableCaption("ciudades");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	clientes
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="clientes";
		$detailsParam["dOriginalTable"] = "clientes";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "clientes";
	$detailsParam["dCaptionTable"] = GetTableCaption("clientes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	detalles_facturas
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalles_facturas";
		$detailsParam["dOriginalTable"] = "detalles_facturas";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles_facturas";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalles_facturas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	detalles_pedidos
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalles_pedidos";
		$detailsParam["dOriginalTable"] = "detalles_pedidos";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles_pedidos";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalles_pedidos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	facturas
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="facturas";
		$detailsParam["dOriginalTable"] = "facturas";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "facturas";
	$detailsParam["dCaptionTable"] = GetTableCaption("facturas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	insumos
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="insumos";
		$detailsParam["dOriginalTable"] = "insumos";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "insumos";
	$detailsParam["dCaptionTable"] = GetTableCaption("insumos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	items
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="items";
		$detailsParam["dOriginalTable"] = "items";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "items";
	$detailsParam["dCaptionTable"] = GetTableCaption("items");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	paises
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="paises";
		$detailsParam["dOriginalTable"] = "paises";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "paises";
	$detailsParam["dCaptionTable"] = GetTableCaption("paises");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	pedidos
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pedidos";
		$detailsParam["dOriginalTable"] = "pedidos";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pedidos";
	$detailsParam["dCaptionTable"] = GetTableCaption("pedidos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	personales
	
	

		$dIndex = 10;
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
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	personas
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personas";
		$detailsParam["dOriginalTable"] = "personas";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personas";
	$detailsParam["dCaptionTable"] = GetTableCaption("personas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	preparaciones
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="preparaciones";
		$detailsParam["dOriginalTable"] = "preparaciones";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "preparaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("preparaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	promociones
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="promociones";
		$detailsParam["dOriginalTable"] = "promociones";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "promociones";
	$detailsParam["dCaptionTable"] = GetTableCaption("promociones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	proveedores
	
	

		$dIndex = 14;
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
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	sucursales
	
	

		$dIndex = 15;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sucursales";
		$detailsParam["dOriginalTable"] = "sucursales";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sucursales";
	$detailsParam["dCaptionTable"] = GetTableCaption("sucursales");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";
//	users
	
	

		$dIndex = 16;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="users";
		$detailsParam["dOriginalTable"] = "users";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "users";
	$detailsParam["dCaptionTable"] = GetTableCaption("users");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["empresas"][$dIndex]["detailKeys"][]="empresa_id";

// tables which are master tables for current table (detail)
$masterTablesData["empresas"] = array();


	
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
					$masterTablesData["empresas"][0] = $masterParams;
				$masterTablesData["empresas"][0]["masterKeys"] = array();
	$masterTablesData["empresas"][0]["masterKeys"][]="id";
				$masterTablesData["empresas"][0]["detailKeys"] = array();
	$masterTablesData["empresas"][0]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empresas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	creado,  	actualizado,  	creado_por,  	actualizado_por";
$proto0["m_strFrom"] = "FROM empresas";
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
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "empresas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "empresas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto10["m_sql"] = "creado";
$proto10["m_srcTableName"] = "empresas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto12["m_sql"] = "actualizado";
$proto12["m_srcTableName"] = "empresas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto14["m_sql"] = "creado_por";
$proto14["m_srcTableName"] = "empresas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto16["m_sql"] = "actualizado_por";
$proto16["m_srcTableName"] = "empresas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "empresas";
$proto19["m_srcTableName"] = "empresas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "descripcion";
$proto19["m_columns"][] = "creado";
$proto19["m_columns"][] = "actualizado";
$proto19["m_columns"][] = "creado_por";
$proto19["m_columns"][] = "actualizado_por";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "empresas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "empresas";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="empresas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas = createSqlQuery_empresas();


	
		;

						

$tdataempresas[".sqlquery"] = $queryData_empresas;

$tableEvents["empresas"] = new eventsBase;
$tdataempresas[".hasEvents"] = false;

?>