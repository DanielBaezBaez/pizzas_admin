<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatipo_items = array();
	$tdatatipo_items[".truncateText"] = true;
	$tdatatipo_items[".NumberOfChars"] = 80;
	$tdatatipo_items[".ShortName"] = "tipo_items";
	$tdatatipo_items[".OwnerID"] = "";
	$tdatatipo_items[".OriginalTable"] = "tipo_items";

//	field labels
$fieldLabelstipo_items = array();
$fieldToolTipstipo_items = array();
$pageTitlestipo_items = array();
$placeHolderstipo_items = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_items["Spanish"] = array();
	$fieldToolTipstipo_items["Spanish"] = array();
	$placeHolderstipo_items["Spanish"] = array();
	$pageTitlestipo_items["Spanish"] = array();
	$fieldLabelstipo_items["Spanish"]["id"] = "Id";
	$fieldToolTipstipo_items["Spanish"]["id"] = "";
	$placeHolderstipo_items["Spanish"]["id"] = "";
	$fieldLabelstipo_items["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipstipo_items["Spanish"]["descripcion"] = "";
	$placeHolderstipo_items["Spanish"]["descripcion"] = "";
	$fieldLabelstipo_items["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipstipo_items["Spanish"]["creado_por"] = "";
	$placeHolderstipo_items["Spanish"]["creado_por"] = "";
	$fieldLabelstipo_items["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipstipo_items["Spanish"]["actualizado_por"] = "";
	$placeHolderstipo_items["Spanish"]["actualizado_por"] = "";
	$fieldLabelstipo_items["Spanish"]["creado"] = "Creado";
	$fieldToolTipstipo_items["Spanish"]["creado"] = "";
	$placeHolderstipo_items["Spanish"]["creado"] = "";
	$fieldLabelstipo_items["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipstipo_items["Spanish"]["actualizado"] = "";
	$placeHolderstipo_items["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipstipo_items["Spanish"]))
		$tdatatipo_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstipo_items[""] = array();
	$fieldToolTipstipo_items[""] = array();
	$placeHolderstipo_items[""] = array();
	$pageTitlestipo_items[""] = array();
	if (count($fieldToolTipstipo_items[""]))
		$tdatatipo_items[".isUseToolTips"] = true;
}


	$tdatatipo_items[".NCSearch"] = true;



$tdatatipo_items[".shortTableName"] = "tipo_items";
$tdatatipo_items[".nSecOptions"] = 0;
$tdatatipo_items[".recsPerRowPrint"] = 1;
$tdatatipo_items[".mainTableOwnerID"] = "";
$tdatatipo_items[".moveNext"] = 1;
$tdatatipo_items[".entityType"] = 0;

$tdatatipo_items[".strOriginalTableName"] = "tipo_items";

	



$tdatatipo_items[".showAddInPopup"] = false;

$tdatatipo_items[".showEditInPopup"] = false;

$tdatatipo_items[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatipo_items[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatipo_items[".fieldsForRegister"] = array();

$tdatatipo_items[".listAjax"] = false;

	$tdatatipo_items[".audit"] = false;

	$tdatatipo_items[".locking"] = false;

$tdatatipo_items[".edit"] = true;
$tdatatipo_items[".afterEditAction"] = 1;
$tdatatipo_items[".closePopupAfterEdit"] = 1;
$tdatatipo_items[".afterEditActionDetTable"] = "";

$tdatatipo_items[".add"] = true;
$tdatatipo_items[".afterAddAction"] = 1;
$tdatatipo_items[".closePopupAfterAdd"] = 1;
$tdatatipo_items[".afterAddActionDetTable"] = "";

$tdatatipo_items[".list"] = true;



$tdatatipo_items[".reorderRecordsByHeader"] = true;


$tdatatipo_items[".exportFormatting"] = 2;
$tdatatipo_items[".exportDelimiter"] = ",";
		
$tdatatipo_items[".view"] = true;

$tdatatipo_items[".import"] = true;

$tdatatipo_items[".exportTo"] = true;

$tdatatipo_items[".printFriendly"] = true;

$tdatatipo_items[".delete"] = true;

$tdatatipo_items[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatipo_items[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatatipo_items[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatatipo_items[".searchSaving"] = false;
//

$tdatatipo_items[".showSearchPanel"] = true;
		$tdatatipo_items[".flexibleSearch"] = true;

$tdatatipo_items[".isUseAjaxSuggest"] = true;

$tdatatipo_items[".rowHighlite"] = true;





$tdatatipo_items[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_items[".buttonsAdded"] = false;

$tdatatipo_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_items[".isUseTimeForSearch"] = false;



$tdatatipo_items[".badgeColor"] = "3CB371";


$tdatatipo_items[".allSearchFields"] = array();
$tdatatipo_items[".filterFields"] = array();
$tdatatipo_items[".requiredSearchFields"] = array();

$tdatatipo_items[".allSearchFields"][] = "descripcion";
	

$tdatatipo_items[".googleLikeFields"] = array();
$tdatatipo_items[".googleLikeFields"][] = "id";
$tdatatipo_items[".googleLikeFields"][] = "descripcion";
$tdatatipo_items[".googleLikeFields"][] = "creado_por";
$tdatatipo_items[".googleLikeFields"][] = "actualizado_por";
$tdatatipo_items[".googleLikeFields"][] = "creado";
$tdatatipo_items[".googleLikeFields"][] = "actualizado";


$tdatatipo_items[".advSearchFields"] = array();
$tdatatipo_items[".advSearchFields"][] = "descripcion";

$tdatatipo_items[".tableType"] = "list";

$tdatatipo_items[".printerPageOrientation"] = 0;
$tdatatipo_items[".nPrinterPageScale"] = 100;

$tdatatipo_items[".nPrinterSplitRecords"] = 40;

$tdatatipo_items[".nPrinterPDFSplitRecords"] = 40;



$tdatatipo_items[".geocodingEnabled"] = false;





$tdatatipo_items[".listGridLayout"] = 3;


$tdatatipo_items[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatatipo_items[".pageSize"] = 20;

$tdatatipo_items[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipo_items[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_items[".orderindexes"] = array();

$tdatatipo_items[".sqlHead"] = "SELECT id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatatipo_items[".sqlFrom"] = "FROM tipo_items";
$tdatatipo_items[".sqlWhereExpr"] = "";
$tdatatipo_items[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_items[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_items[".highlightSearchResults"] = true;

$tableKeystipo_items = array();
$tableKeystipo_items[] = "id";
$tdatatipo_items[".Keys"] = $tableKeystipo_items;

$tdatatipo_items[".listFields"] = array();
$tdatatipo_items[".listFields"][] = "descripcion";
$tdatatipo_items[".listFields"][] = "creado_por";
$tdatatipo_items[".listFields"][] = "actualizado_por";
$tdatatipo_items[".listFields"][] = "creado";
$tdatatipo_items[".listFields"][] = "actualizado";

$tdatatipo_items[".hideMobileList"] = array();


$tdatatipo_items[".viewFields"] = array();
$tdatatipo_items[".viewFields"][] = "descripcion";

$tdatatipo_items[".addFields"] = array();
$tdatatipo_items[".addFields"][] = "descripcion";

$tdatatipo_items[".masterListFields"] = array();
$tdatatipo_items[".masterListFields"][] = "descripcion";

$tdatatipo_items[".inlineAddFields"] = array();

$tdatatipo_items[".editFields"] = array();
$tdatatipo_items[".editFields"][] = "descripcion";

$tdatatipo_items[".inlineEditFields"] = array();

$tdatatipo_items[".updateSelectedFields"] = array();
$tdatatipo_items[".updateSelectedFields"][] = "descripcion";


$tdatatipo_items[".exportFields"] = array();
$tdatatipo_items[".exportFields"][] = "descripcion";

$tdatatipo_items[".importFields"] = array();
$tdatatipo_items[".importFields"][] = "descripcion";

$tdatatipo_items[".printFields"] = array();
$tdatatipo_items[".printFields"][] = "descripcion";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tipo_items";
	$fdata["Label"] = GetFieldLabel("tipo_items","id");
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








	$tdatatipo_items["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "tipo_items";
	$fdata["Label"] = GetFieldLabel("tipo_items","descripcion");
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




	$tdatatipo_items["descripcion"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "tipo_items";
	$fdata["Label"] = GetFieldLabel("tipo_items","creado_por");
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








	$tdatatipo_items["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "tipo_items";
	$fdata["Label"] = GetFieldLabel("tipo_items","actualizado_por");
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








	$tdatatipo_items["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "tipo_items";
	$fdata["Label"] = GetFieldLabel("tipo_items","creado");
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








	$tdatatipo_items["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "tipo_items";
	$fdata["Label"] = GetFieldLabel("tipo_items","actualizado");
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








	$tdatatipo_items["actualizado"] = $fdata;


$tables_data["tipo_items"]=&$tdatatipo_items;
$field_labels["tipo_items"] = &$fieldLabelstipo_items;
$fieldToolTips["tipo_items"] = &$fieldToolTipstipo_items;
$placeHolders["tipo_items"] = &$placeHolderstipo_items;
$page_titles["tipo_items"] = &$pageTitlestipo_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipo_items"] = array();
//	items
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="items";
		$detailsParam["dOriginalTable"] = "items";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "items";
	$detailsParam["dCaptionTable"] = GetTableCaption("items");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["tipo_items"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tipo_items"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tipo_items"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["tipo_items"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tipo_items"][$dIndex]["detailKeys"][]="tipo_item_id";

// tables which are master tables for current table (detail)
$masterTablesData["tipo_items"] = array();


	
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
					$masterTablesData["tipo_items"][0] = $masterParams;
				$masterTablesData["tipo_items"][0]["masterKeys"] = array();
	$masterTablesData["tipo_items"][0]["masterKeys"][]="id";
				$masterTablesData["tipo_items"][0]["detailKeys"] = array();
	$masterTablesData["tipo_items"][0]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipo_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM tipo_items";
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
	"m_strTable" => "tipo_items",
	"m_srcTableName" => "tipo_items"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tipo_items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "tipo_items",
	"m_srcTableName" => "tipo_items"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "tipo_items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "tipo_items",
	"m_srcTableName" => "tipo_items"
));

$proto10["m_sql"] = "creado_por";
$proto10["m_srcTableName"] = "tipo_items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "tipo_items",
	"m_srcTableName" => "tipo_items"
));

$proto12["m_sql"] = "actualizado_por";
$proto12["m_srcTableName"] = "tipo_items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "tipo_items",
	"m_srcTableName" => "tipo_items"
));

$proto14["m_sql"] = "creado";
$proto14["m_srcTableName"] = "tipo_items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "tipo_items",
	"m_srcTableName" => "tipo_items"
));

$proto16["m_sql"] = "actualizado";
$proto16["m_srcTableName"] = "tipo_items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tipo_items";
$proto19["m_srcTableName"] = "tipo_items";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "descripcion";
$proto19["m_columns"][] = "creado_por";
$proto19["m_columns"][] = "actualizado_por";
$proto19["m_columns"][] = "creado";
$proto19["m_columns"][] = "actualizado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tipo_items";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tipo_items";
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
$proto0["m_srcTableName"]="tipo_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_items = createSqlQuery_tipo_items();


	
		;

						

$tdatatipo_items[".sqlquery"] = $queryData_tipo_items;

$tableEvents["tipo_items"] = new eventsBase;
$tdatatipo_items[".hasEvents"] = false;

?>