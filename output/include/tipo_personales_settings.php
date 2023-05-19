<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatipo_personales = array();
	$tdatatipo_personales[".truncateText"] = true;
	$tdatatipo_personales[".NumberOfChars"] = 80;
	$tdatatipo_personales[".ShortName"] = "tipo_personales";
	$tdatatipo_personales[".OwnerID"] = "";
	$tdatatipo_personales[".OriginalTable"] = "tipo_personales";

//	field labels
$fieldLabelstipo_personales = array();
$fieldToolTipstipo_personales = array();
$pageTitlestipo_personales = array();
$placeHolderstipo_personales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_personales["Spanish"] = array();
	$fieldToolTipstipo_personales["Spanish"] = array();
	$placeHolderstipo_personales["Spanish"] = array();
	$pageTitlestipo_personales["Spanish"] = array();
	$fieldLabelstipo_personales["Spanish"]["id"] = "Id";
	$fieldToolTipstipo_personales["Spanish"]["id"] = "";
	$placeHolderstipo_personales["Spanish"]["id"] = "";
	$fieldLabelstipo_personales["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipstipo_personales["Spanish"]["descripcion"] = "";
	$placeHolderstipo_personales["Spanish"]["descripcion"] = "";
	$fieldLabelstipo_personales["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipstipo_personales["Spanish"]["creado_por"] = "";
	$placeHolderstipo_personales["Spanish"]["creado_por"] = "";
	$fieldLabelstipo_personales["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipstipo_personales["Spanish"]["actualizado_por"] = "";
	$placeHolderstipo_personales["Spanish"]["actualizado_por"] = "";
	$fieldLabelstipo_personales["Spanish"]["creado"] = "Creado";
	$fieldToolTipstipo_personales["Spanish"]["creado"] = "";
	$placeHolderstipo_personales["Spanish"]["creado"] = "";
	$fieldLabelstipo_personales["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipstipo_personales["Spanish"]["actualizado"] = "";
	$placeHolderstipo_personales["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipstipo_personales["Spanish"]))
		$tdatatipo_personales[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstipo_personales[""] = array();
	$fieldToolTipstipo_personales[""] = array();
	$placeHolderstipo_personales[""] = array();
	$pageTitlestipo_personales[""] = array();
	if (count($fieldToolTipstipo_personales[""]))
		$tdatatipo_personales[".isUseToolTips"] = true;
}


	$tdatatipo_personales[".NCSearch"] = true;



$tdatatipo_personales[".shortTableName"] = "tipo_personales";
$tdatatipo_personales[".nSecOptions"] = 0;
$tdatatipo_personales[".recsPerRowPrint"] = 1;
$tdatatipo_personales[".mainTableOwnerID"] = "";
$tdatatipo_personales[".moveNext"] = 1;
$tdatatipo_personales[".entityType"] = 0;

$tdatatipo_personales[".strOriginalTableName"] = "tipo_personales";

	



$tdatatipo_personales[".showAddInPopup"] = false;

$tdatatipo_personales[".showEditInPopup"] = false;

$tdatatipo_personales[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatipo_personales[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatipo_personales[".fieldsForRegister"] = array();

$tdatatipo_personales[".listAjax"] = false;

	$tdatatipo_personales[".audit"] = false;

	$tdatatipo_personales[".locking"] = false;

$tdatatipo_personales[".edit"] = true;
$tdatatipo_personales[".afterEditAction"] = 1;
$tdatatipo_personales[".closePopupAfterEdit"] = 1;
$tdatatipo_personales[".afterEditActionDetTable"] = "";

$tdatatipo_personales[".add"] = true;
$tdatatipo_personales[".afterAddAction"] = 1;
$tdatatipo_personales[".closePopupAfterAdd"] = 1;
$tdatatipo_personales[".afterAddActionDetTable"] = "";

$tdatatipo_personales[".list"] = true;



$tdatatipo_personales[".reorderRecordsByHeader"] = true;


$tdatatipo_personales[".exportFormatting"] = 2;
$tdatatipo_personales[".exportDelimiter"] = ",";
		
$tdatatipo_personales[".view"] = true;

$tdatatipo_personales[".import"] = true;

$tdatatipo_personales[".exportTo"] = true;

$tdatatipo_personales[".printFriendly"] = true;

$tdatatipo_personales[".delete"] = true;

$tdatatipo_personales[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatipo_personales[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatatipo_personales[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatatipo_personales[".searchSaving"] = false;
//

$tdatatipo_personales[".showSearchPanel"] = true;
		$tdatatipo_personales[".flexibleSearch"] = true;

$tdatatipo_personales[".isUseAjaxSuggest"] = true;

$tdatatipo_personales[".rowHighlite"] = true;





$tdatatipo_personales[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_personales[".buttonsAdded"] = false;

$tdatatipo_personales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_personales[".isUseTimeForSearch"] = false;



$tdatatipo_personales[".badgeColor"] = "00C2C5";


$tdatatipo_personales[".allSearchFields"] = array();
$tdatatipo_personales[".filterFields"] = array();
$tdatatipo_personales[".requiredSearchFields"] = array();

$tdatatipo_personales[".allSearchFields"][] = "descripcion";
	

$tdatatipo_personales[".googleLikeFields"] = array();
$tdatatipo_personales[".googleLikeFields"][] = "id";
$tdatatipo_personales[".googleLikeFields"][] = "descripcion";
$tdatatipo_personales[".googleLikeFields"][] = "creado_por";
$tdatatipo_personales[".googleLikeFields"][] = "actualizado_por";
$tdatatipo_personales[".googleLikeFields"][] = "creado";
$tdatatipo_personales[".googleLikeFields"][] = "actualizado";


$tdatatipo_personales[".advSearchFields"] = array();
$tdatatipo_personales[".advSearchFields"][] = "descripcion";

$tdatatipo_personales[".tableType"] = "list";

$tdatatipo_personales[".printerPageOrientation"] = 0;
$tdatatipo_personales[".nPrinterPageScale"] = 100;

$tdatatipo_personales[".nPrinterSplitRecords"] = 40;

$tdatatipo_personales[".nPrinterPDFSplitRecords"] = 40;



$tdatatipo_personales[".geocodingEnabled"] = false;





$tdatatipo_personales[".listGridLayout"] = 3;


$tdatatipo_personales[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatatipo_personales[".pageSize"] = 20;

$tdatatipo_personales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipo_personales[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_personales[".orderindexes"] = array();

$tdatatipo_personales[".sqlHead"] = "SELECT id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatatipo_personales[".sqlFrom"] = "FROM tipo_personales";
$tdatatipo_personales[".sqlWhereExpr"] = "";
$tdatatipo_personales[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_personales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_personales[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_personales[".highlightSearchResults"] = true;

$tableKeystipo_personales = array();
$tableKeystipo_personales[] = "id";
$tdatatipo_personales[".Keys"] = $tableKeystipo_personales;

$tdatatipo_personales[".listFields"] = array();
$tdatatipo_personales[".listFields"][] = "descripcion";
$tdatatipo_personales[".listFields"][] = "creado_por";
$tdatatipo_personales[".listFields"][] = "actualizado_por";
$tdatatipo_personales[".listFields"][] = "creado";
$tdatatipo_personales[".listFields"][] = "actualizado";

$tdatatipo_personales[".hideMobileList"] = array();


$tdatatipo_personales[".viewFields"] = array();
$tdatatipo_personales[".viewFields"][] = "descripcion";

$tdatatipo_personales[".addFields"] = array();
$tdatatipo_personales[".addFields"][] = "descripcion";

$tdatatipo_personales[".masterListFields"] = array();
$tdatatipo_personales[".masterListFields"][] = "id";
$tdatatipo_personales[".masterListFields"][] = "descripcion";
$tdatatipo_personales[".masterListFields"][] = "creado_por";
$tdatatipo_personales[".masterListFields"][] = "actualizado_por";
$tdatatipo_personales[".masterListFields"][] = "creado";
$tdatatipo_personales[".masterListFields"][] = "actualizado";

$tdatatipo_personales[".inlineAddFields"] = array();

$tdatatipo_personales[".editFields"] = array();
$tdatatipo_personales[".editFields"][] = "descripcion";

$tdatatipo_personales[".inlineEditFields"] = array();

$tdatatipo_personales[".updateSelectedFields"] = array();
$tdatatipo_personales[".updateSelectedFields"][] = "descripcion";


$tdatatipo_personales[".exportFields"] = array();
$tdatatipo_personales[".exportFields"][] = "descripcion";

$tdatatipo_personales[".importFields"] = array();
$tdatatipo_personales[".importFields"][] = "descripcion";

$tdatatipo_personales[".printFields"] = array();
$tdatatipo_personales[".printFields"][] = "descripcion";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tipo_personales";
	$fdata["Label"] = GetFieldLabel("tipo_personales","id");
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








	$tdatatipo_personales["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "tipo_personales";
	$fdata["Label"] = GetFieldLabel("tipo_personales","descripcion");
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




	$tdatatipo_personales["descripcion"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "tipo_personales";
	$fdata["Label"] = GetFieldLabel("tipo_personales","creado_por");
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








	$tdatatipo_personales["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "tipo_personales";
	$fdata["Label"] = GetFieldLabel("tipo_personales","actualizado_por");
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








	$tdatatipo_personales["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "tipo_personales";
	$fdata["Label"] = GetFieldLabel("tipo_personales","creado");
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








	$tdatatipo_personales["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "tipo_personales";
	$fdata["Label"] = GetFieldLabel("tipo_personales","actualizado");
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








	$tdatatipo_personales["actualizado"] = $fdata;


$tables_data["tipo_personales"]=&$tdatatipo_personales;
$field_labels["tipo_personales"] = &$fieldLabelstipo_personales;
$fieldToolTips["tipo_personales"] = &$fieldToolTipstipo_personales;
$placeHolders["tipo_personales"] = &$placeHolderstipo_personales;
$page_titles["tipo_personales"] = &$pageTitlestipo_personales;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipo_personales"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tipo_personales"] = array();


	
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
					$masterTablesData["tipo_personales"][0] = $masterParams;
				$masterTablesData["tipo_personales"][0]["masterKeys"] = array();
	$masterTablesData["tipo_personales"][0]["masterKeys"][]="id";
				$masterTablesData["tipo_personales"][0]["detailKeys"] = array();
	$masterTablesData["tipo_personales"][0]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipo_personales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM tipo_personales";
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
	"m_strTable" => "tipo_personales",
	"m_srcTableName" => "tipo_personales"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tipo_personales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "tipo_personales",
	"m_srcTableName" => "tipo_personales"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "tipo_personales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "tipo_personales",
	"m_srcTableName" => "tipo_personales"
));

$proto10["m_sql"] = "creado_por";
$proto10["m_srcTableName"] = "tipo_personales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "tipo_personales",
	"m_srcTableName" => "tipo_personales"
));

$proto12["m_sql"] = "actualizado_por";
$proto12["m_srcTableName"] = "tipo_personales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "tipo_personales",
	"m_srcTableName" => "tipo_personales"
));

$proto14["m_sql"] = "creado";
$proto14["m_srcTableName"] = "tipo_personales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "tipo_personales",
	"m_srcTableName" => "tipo_personales"
));

$proto16["m_sql"] = "actualizado";
$proto16["m_srcTableName"] = "tipo_personales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tipo_personales";
$proto19["m_srcTableName"] = "tipo_personales";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "descripcion";
$proto19["m_columns"][] = "creado_por";
$proto19["m_columns"][] = "actualizado_por";
$proto19["m_columns"][] = "creado";
$proto19["m_columns"][] = "actualizado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tipo_personales";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tipo_personales";
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
$proto0["m_srcTableName"]="tipo_personales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_personales = createSqlQuery_tipo_personales();


	
		;

						

$tdatatipo_personales[".sqlquery"] = $queryData_tipo_personales;

$tableEvents["tipo_personales"] = new eventsBase;
$tdatatipo_personales[".hasEvents"] = false;

?>