<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapreparaciones = array();
	$tdatapreparaciones[".truncateText"] = true;
	$tdatapreparaciones[".NumberOfChars"] = 80;
	$tdatapreparaciones[".ShortName"] = "preparaciones";
	$tdatapreparaciones[".OwnerID"] = "empresa_id";
	$tdatapreparaciones[".OriginalTable"] = "preparaciones";

//	field labels
$fieldLabelspreparaciones = array();
$fieldToolTipspreparaciones = array();
$pageTitlespreparaciones = array();
$placeHolderspreparaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspreparaciones["Spanish"] = array();
	$fieldToolTipspreparaciones["Spanish"] = array();
	$placeHolderspreparaciones["Spanish"] = array();
	$pageTitlespreparaciones["Spanish"] = array();
	$fieldLabelspreparaciones["Spanish"]["id"] = "Id";
	$fieldToolTipspreparaciones["Spanish"]["id"] = "";
	$placeHolderspreparaciones["Spanish"]["id"] = "";
	$fieldLabelspreparaciones["Spanish"]["empresa_id"] = "Empresa Id";
	$fieldToolTipspreparaciones["Spanish"]["empresa_id"] = "";
	$placeHolderspreparaciones["Spanish"]["empresa_id"] = "";
	$fieldLabelspreparaciones["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipspreparaciones["Spanish"]["creado_por"] = "";
	$placeHolderspreparaciones["Spanish"]["creado_por"] = "";
	$fieldLabelspreparaciones["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipspreparaciones["Spanish"]["actualizado_por"] = "";
	$placeHolderspreparaciones["Spanish"]["actualizado_por"] = "";
	$fieldLabelspreparaciones["Spanish"]["creado"] = "Creado";
	$fieldToolTipspreparaciones["Spanish"]["creado"] = "";
	$placeHolderspreparaciones["Spanish"]["creado"] = "";
	$fieldLabelspreparaciones["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipspreparaciones["Spanish"]["actualizado"] = "";
	$placeHolderspreparaciones["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipspreparaciones["Spanish"]))
		$tdatapreparaciones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspreparaciones[""] = array();
	$fieldToolTipspreparaciones[""] = array();
	$placeHolderspreparaciones[""] = array();
	$pageTitlespreparaciones[""] = array();
	if (count($fieldToolTipspreparaciones[""]))
		$tdatapreparaciones[".isUseToolTips"] = true;
}


	$tdatapreparaciones[".NCSearch"] = true;



$tdatapreparaciones[".shortTableName"] = "preparaciones";
$tdatapreparaciones[".nSecOptions"] = 1;
$tdatapreparaciones[".recsPerRowPrint"] = 1;
$tdatapreparaciones[".mainTableOwnerID"] = "empresa_id";
$tdatapreparaciones[".moveNext"] = 1;
$tdatapreparaciones[".entityType"] = 0;

$tdatapreparaciones[".strOriginalTableName"] = "preparaciones";

	



$tdatapreparaciones[".showAddInPopup"] = false;

$tdatapreparaciones[".showEditInPopup"] = false;

$tdatapreparaciones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapreparaciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapreparaciones[".fieldsForRegister"] = array();

$tdatapreparaciones[".listAjax"] = false;

	$tdatapreparaciones[".audit"] = false;

	$tdatapreparaciones[".locking"] = false;

$tdatapreparaciones[".edit"] = true;
$tdatapreparaciones[".afterEditAction"] = 1;
$tdatapreparaciones[".closePopupAfterEdit"] = 1;
$tdatapreparaciones[".afterEditActionDetTable"] = "";

$tdatapreparaciones[".add"] = true;
$tdatapreparaciones[".afterAddAction"] = 1;
$tdatapreparaciones[".closePopupAfterAdd"] = 1;
$tdatapreparaciones[".afterAddActionDetTable"] = "";

$tdatapreparaciones[".list"] = true;



$tdatapreparaciones[".reorderRecordsByHeader"] = true;


$tdatapreparaciones[".exportFormatting"] = 2;
$tdatapreparaciones[".exportDelimiter"] = ",";
		
$tdatapreparaciones[".view"] = true;

$tdatapreparaciones[".import"] = true;

$tdatapreparaciones[".exportTo"] = true;

$tdatapreparaciones[".printFriendly"] = true;

$tdatapreparaciones[".delete"] = true;

$tdatapreparaciones[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapreparaciones[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatapreparaciones[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatapreparaciones[".searchSaving"] = false;
//

$tdatapreparaciones[".showSearchPanel"] = true;
		$tdatapreparaciones[".flexibleSearch"] = true;

$tdatapreparaciones[".isUseAjaxSuggest"] = true;

$tdatapreparaciones[".rowHighlite"] = true;





$tdatapreparaciones[".ajaxCodeSnippetAdded"] = false;

$tdatapreparaciones[".buttonsAdded"] = false;

$tdatapreparaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapreparaciones[".isUseTimeForSearch"] = false;



$tdatapreparaciones[".badgeColor"] = "D2691E";


$tdatapreparaciones[".allSearchFields"] = array();
$tdatapreparaciones[".filterFields"] = array();
$tdatapreparaciones[".requiredSearchFields"] = array();



$tdatapreparaciones[".googleLikeFields"] = array();
$tdatapreparaciones[".googleLikeFields"][] = "id";
$tdatapreparaciones[".googleLikeFields"][] = "empresa_id";
$tdatapreparaciones[".googleLikeFields"][] = "creado_por";
$tdatapreparaciones[".googleLikeFields"][] = "actualizado_por";
$tdatapreparaciones[".googleLikeFields"][] = "creado";
$tdatapreparaciones[".googleLikeFields"][] = "actualizado";



$tdatapreparaciones[".tableType"] = "list";

$tdatapreparaciones[".printerPageOrientation"] = 0;
$tdatapreparaciones[".nPrinterPageScale"] = 100;

$tdatapreparaciones[".nPrinterSplitRecords"] = 40;

$tdatapreparaciones[".nPrinterPDFSplitRecords"] = 40;



$tdatapreparaciones[".geocodingEnabled"] = false;





$tdatapreparaciones[".listGridLayout"] = 3;


$tdatapreparaciones[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatapreparaciones[".pageSize"] = 20;

$tdatapreparaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapreparaciones[".strOrderBy"] = $tstrOrderBy;

$tdatapreparaciones[".orderindexes"] = array();

$tdatapreparaciones[".sqlHead"] = "SELECT id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatapreparaciones[".sqlFrom"] = "FROM preparaciones";
$tdatapreparaciones[".sqlWhereExpr"] = "";
$tdatapreparaciones[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapreparaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapreparaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatapreparaciones[".highlightSearchResults"] = true;

$tableKeyspreparaciones = array();
$tableKeyspreparaciones[] = "id";
$tdatapreparaciones[".Keys"] = $tableKeyspreparaciones;

$tdatapreparaciones[".listFields"] = array();
$tdatapreparaciones[".listFields"][] = "creado_por";
$tdatapreparaciones[".listFields"][] = "actualizado_por";
$tdatapreparaciones[".listFields"][] = "creado";
$tdatapreparaciones[".listFields"][] = "actualizado";

$tdatapreparaciones[".hideMobileList"] = array();


$tdatapreparaciones[".viewFields"] = array();

$tdatapreparaciones[".addFields"] = array();

$tdatapreparaciones[".masterListFields"] = array();
$tdatapreparaciones[".masterListFields"][] = "id";
$tdatapreparaciones[".masterListFields"][] = "empresa_id";
$tdatapreparaciones[".masterListFields"][] = "creado_por";
$tdatapreparaciones[".masterListFields"][] = "actualizado_por";
$tdatapreparaciones[".masterListFields"][] = "creado";
$tdatapreparaciones[".masterListFields"][] = "actualizado";

$tdatapreparaciones[".inlineAddFields"] = array();

$tdatapreparaciones[".editFields"] = array();

$tdatapreparaciones[".inlineEditFields"] = array();

$tdatapreparaciones[".updateSelectedFields"] = array();


$tdatapreparaciones[".exportFields"] = array();

$tdatapreparaciones[".importFields"] = array();

$tdatapreparaciones[".printFields"] = array();


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "preparaciones";
	$fdata["Label"] = GetFieldLabel("preparaciones","id");
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








	$tdatapreparaciones["id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "preparaciones";
	$fdata["Label"] = GetFieldLabel("preparaciones","empresa_id");
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








	$tdatapreparaciones["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "preparaciones";
	$fdata["Label"] = GetFieldLabel("preparaciones","creado_por");
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








	$tdatapreparaciones["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "preparaciones";
	$fdata["Label"] = GetFieldLabel("preparaciones","actualizado_por");
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








	$tdatapreparaciones["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "preparaciones";
	$fdata["Label"] = GetFieldLabel("preparaciones","creado");
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








	$tdatapreparaciones["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "preparaciones";
	$fdata["Label"] = GetFieldLabel("preparaciones","actualizado");
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








	$tdatapreparaciones["actualizado"] = $fdata;


$tables_data["preparaciones"]=&$tdatapreparaciones;
$field_labels["preparaciones"] = &$fieldLabelspreparaciones;
$fieldToolTips["preparaciones"] = &$fieldToolTipspreparaciones;
$placeHolders["preparaciones"] = &$placeHolderspreparaciones;
$page_titles["preparaciones"] = &$pageTitlespreparaciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["preparaciones"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["preparaciones"] = array();


	
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
					$masterTablesData["preparaciones"][0] = $masterParams;
				$masterTablesData["preparaciones"][0]["masterKeys"] = array();
	$masterTablesData["preparaciones"][0]["masterKeys"][]="id";
				$masterTablesData["preparaciones"][0]["detailKeys"] = array();
	$masterTablesData["preparaciones"][0]["detailKeys"][]="empresa_id";
		
	
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
					$masterTablesData["preparaciones"][1] = $masterParams;
				$masterTablesData["preparaciones"][1]["masterKeys"] = array();
	$masterTablesData["preparaciones"][1]["masterKeys"][]="id";
				$masterTablesData["preparaciones"][1]["detailKeys"] = array();
	$masterTablesData["preparaciones"][1]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_preparaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM preparaciones";
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
	"m_strTable" => "preparaciones",
	"m_srcTableName" => "preparaciones"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "preparaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "preparaciones",
	"m_srcTableName" => "preparaciones"
));

$proto8["m_sql"] = "empresa_id";
$proto8["m_srcTableName"] = "preparaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "preparaciones",
	"m_srcTableName" => "preparaciones"
));

$proto10["m_sql"] = "creado_por";
$proto10["m_srcTableName"] = "preparaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "preparaciones",
	"m_srcTableName" => "preparaciones"
));

$proto12["m_sql"] = "actualizado_por";
$proto12["m_srcTableName"] = "preparaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "preparaciones",
	"m_srcTableName" => "preparaciones"
));

$proto14["m_sql"] = "creado";
$proto14["m_srcTableName"] = "preparaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "preparaciones",
	"m_srcTableName" => "preparaciones"
));

$proto16["m_sql"] = "actualizado";
$proto16["m_srcTableName"] = "preparaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "preparaciones";
$proto19["m_srcTableName"] = "preparaciones";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "empresa_id";
$proto19["m_columns"][] = "creado_por";
$proto19["m_columns"][] = "actualizado_por";
$proto19["m_columns"][] = "creado";
$proto19["m_columns"][] = "actualizado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "preparaciones";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "preparaciones";
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
$proto0["m_srcTableName"]="preparaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_preparaciones = createSqlQuery_preparaciones();


	
		;

						

$tdatapreparaciones[".sqlquery"] = $queryData_preparaciones;

$tableEvents["preparaciones"] = new eventsBase;
$tdatapreparaciones[".hasEvents"] = false;

?>