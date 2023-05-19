<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamenus = array();
	$tdatamenus[".truncateText"] = true;
	$tdatamenus[".NumberOfChars"] = 80;
	$tdatamenus[".ShortName"] = "menus";
	$tdatamenus[".OwnerID"] = "";
	$tdatamenus[".OriginalTable"] = "menus";

//	field labels
$fieldLabelsmenus = array();
$fieldToolTipsmenus = array();
$pageTitlesmenus = array();
$placeHoldersmenus = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmenus["Spanish"] = array();
	$fieldToolTipsmenus["Spanish"] = array();
	$placeHoldersmenus["Spanish"] = array();
	$pageTitlesmenus["Spanish"] = array();
	$fieldLabelsmenus["Spanish"]["id"] = "Id";
	$fieldToolTipsmenus["Spanish"]["id"] = "";
	$placeHoldersmenus["Spanish"]["id"] = "";
	$fieldLabelsmenus["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsmenus["Spanish"]["descripcion"] = "";
	$placeHoldersmenus["Spanish"]["descripcion"] = "";
	$fieldLabelsmenus["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsmenus["Spanish"]["creado_por"] = "";
	$placeHoldersmenus["Spanish"]["creado_por"] = "";
	$fieldLabelsmenus["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsmenus["Spanish"]["actualizado_por"] = "";
	$placeHoldersmenus["Spanish"]["actualizado_por"] = "";
	$fieldLabelsmenus["Spanish"]["creado"] = "Creado";
	$fieldToolTipsmenus["Spanish"]["creado"] = "";
	$placeHoldersmenus["Spanish"]["creado"] = "";
	$fieldLabelsmenus["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsmenus["Spanish"]["actualizado"] = "";
	$placeHoldersmenus["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsmenus["Spanish"]))
		$tdatamenus[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmenus[""] = array();
	$fieldToolTipsmenus[""] = array();
	$placeHoldersmenus[""] = array();
	$pageTitlesmenus[""] = array();
	if (count($fieldToolTipsmenus[""]))
		$tdatamenus[".isUseToolTips"] = true;
}


	$tdatamenus[".NCSearch"] = true;



$tdatamenus[".shortTableName"] = "menus";
$tdatamenus[".nSecOptions"] = 0;
$tdatamenus[".recsPerRowPrint"] = 1;
$tdatamenus[".mainTableOwnerID"] = "";
$tdatamenus[".moveNext"] = 1;
$tdatamenus[".entityType"] = 0;

$tdatamenus[".strOriginalTableName"] = "menus";

	



$tdatamenus[".showAddInPopup"] = false;

$tdatamenus[".showEditInPopup"] = false;

$tdatamenus[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamenus[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamenus[".fieldsForRegister"] = array();

$tdatamenus[".listAjax"] = false;

	$tdatamenus[".audit"] = false;

	$tdatamenus[".locking"] = false;

$tdatamenus[".edit"] = true;
$tdatamenus[".afterEditAction"] = 1;
$tdatamenus[".closePopupAfterEdit"] = 1;
$tdatamenus[".afterEditActionDetTable"] = "";

$tdatamenus[".add"] = true;
$tdatamenus[".afterAddAction"] = 1;
$tdatamenus[".closePopupAfterAdd"] = 1;
$tdatamenus[".afterAddActionDetTable"] = "";

$tdatamenus[".list"] = true;



$tdatamenus[".reorderRecordsByHeader"] = true;


$tdatamenus[".exportFormatting"] = 2;
$tdatamenus[".exportDelimiter"] = ",";
		
$tdatamenus[".view"] = true;

$tdatamenus[".import"] = true;

$tdatamenus[".exportTo"] = true;

$tdatamenus[".printFriendly"] = true;

$tdatamenus[".delete"] = true;

$tdatamenus[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamenus[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatamenus[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatamenus[".searchSaving"] = false;
//

$tdatamenus[".showSearchPanel"] = true;
		$tdatamenus[".flexibleSearch"] = true;

$tdatamenus[".isUseAjaxSuggest"] = true;

$tdatamenus[".rowHighlite"] = true;





$tdatamenus[".ajaxCodeSnippetAdded"] = false;

$tdatamenus[".buttonsAdded"] = false;

$tdatamenus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamenus[".isUseTimeForSearch"] = false;



$tdatamenus[".badgeColor"] = "5F9EA0";


$tdatamenus[".allSearchFields"] = array();
$tdatamenus[".filterFields"] = array();
$tdatamenus[".requiredSearchFields"] = array();

$tdatamenus[".allSearchFields"][] = "descripcion";
	

$tdatamenus[".googleLikeFields"] = array();
$tdatamenus[".googleLikeFields"][] = "id";
$tdatamenus[".googleLikeFields"][] = "descripcion";
$tdatamenus[".googleLikeFields"][] = "creado_por";
$tdatamenus[".googleLikeFields"][] = "actualizado_por";
$tdatamenus[".googleLikeFields"][] = "creado";
$tdatamenus[".googleLikeFields"][] = "actualizado";


$tdatamenus[".advSearchFields"] = array();
$tdatamenus[".advSearchFields"][] = "descripcion";

$tdatamenus[".tableType"] = "list";

$tdatamenus[".printerPageOrientation"] = 0;
$tdatamenus[".nPrinterPageScale"] = 100;

$tdatamenus[".nPrinterSplitRecords"] = 40;

$tdatamenus[".nPrinterPDFSplitRecords"] = 40;



$tdatamenus[".geocodingEnabled"] = false;





$tdatamenus[".listGridLayout"] = 3;


$tdatamenus[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatamenus[".pageSize"] = 20;

$tdatamenus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamenus[".strOrderBy"] = $tstrOrderBy;

$tdatamenus[".orderindexes"] = array();

$tdatamenus[".sqlHead"] = "SELECT id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatamenus[".sqlFrom"] = "FROM menus";
$tdatamenus[".sqlWhereExpr"] = "";
$tdatamenus[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamenus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamenus[".arrGroupsPerPage"] = $arrGPP;

$tdatamenus[".highlightSearchResults"] = true;

$tableKeysmenus = array();
$tableKeysmenus[] = "id";
$tdatamenus[".Keys"] = $tableKeysmenus;

$tdatamenus[".listFields"] = array();
$tdatamenus[".listFields"][] = "descripcion";
$tdatamenus[".listFields"][] = "creado_por";
$tdatamenus[".listFields"][] = "actualizado_por";
$tdatamenus[".listFields"][] = "creado";
$tdatamenus[".listFields"][] = "actualizado";

$tdatamenus[".hideMobileList"] = array();


$tdatamenus[".viewFields"] = array();
$tdatamenus[".viewFields"][] = "descripcion";

$tdatamenus[".addFields"] = array();
$tdatamenus[".addFields"][] = "descripcion";

$tdatamenus[".masterListFields"] = array();
$tdatamenus[".masterListFields"][] = "id";
$tdatamenus[".masterListFields"][] = "descripcion";
$tdatamenus[".masterListFields"][] = "creado_por";
$tdatamenus[".masterListFields"][] = "actualizado_por";
$tdatamenus[".masterListFields"][] = "creado";
$tdatamenus[".masterListFields"][] = "actualizado";

$tdatamenus[".inlineAddFields"] = array();

$tdatamenus[".editFields"] = array();
$tdatamenus[".editFields"][] = "descripcion";

$tdatamenus[".inlineEditFields"] = array();

$tdatamenus[".updateSelectedFields"] = array();
$tdatamenus[".updateSelectedFields"][] = "descripcion";


$tdatamenus[".exportFields"] = array();
$tdatamenus[".exportFields"][] = "descripcion";

$tdatamenus[".importFields"] = array();
$tdatamenus[".importFields"][] = "descripcion";

$tdatamenus[".printFields"] = array();
$tdatamenus[".printFields"][] = "descripcion";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","id");
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








	$tdatamenus["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","descripcion");
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




	$tdatamenus["descripcion"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","creado_por");
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








	$tdatamenus["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","actualizado_por");
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








	$tdatamenus["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","creado");
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








	$tdatamenus["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "menus";
	$fdata["Label"] = GetFieldLabel("menus","actualizado");
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








	$tdatamenus["actualizado"] = $fdata;


$tables_data["menus"]=&$tdatamenus;
$field_labels["menus"] = &$fieldLabelsmenus;
$fieldToolTips["menus"] = &$fieldToolTipsmenus;
$placeHolders["menus"] = &$placeHoldersmenus;
$page_titles["menus"] = &$pageTitlesmenus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["menus"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["menus"] = array();


	
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
					$masterTablesData["menus"][0] = $masterParams;
				$masterTablesData["menus"][0]["masterKeys"] = array();
	$masterTablesData["menus"][0]["masterKeys"][]="id";
				$masterTablesData["menus"][0]["detailKeys"] = array();
	$masterTablesData["menus"][0]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_menus()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM menus";
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
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "menus";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "menus";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto10["m_sql"] = "creado_por";
$proto10["m_srcTableName"] = "menus";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto12["m_sql"] = "actualizado_por";
$proto12["m_srcTableName"] = "menus";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto14["m_sql"] = "creado";
$proto14["m_srcTableName"] = "menus";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "menus",
	"m_srcTableName" => "menus"
));

$proto16["m_sql"] = "actualizado";
$proto16["m_srcTableName"] = "menus";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "menus";
$proto19["m_srcTableName"] = "menus";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "descripcion";
$proto19["m_columns"][] = "creado_por";
$proto19["m_columns"][] = "actualizado_por";
$proto19["m_columns"][] = "creado";
$proto19["m_columns"][] = "actualizado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "menus";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "menus";
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
$proto0["m_srcTableName"]="menus";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_menus = createSqlQuery_menus();


	
		;

						

$tdatamenus[".sqlquery"] = $queryData_menus;

$tableEvents["menus"] = new eventsBase;
$tdatamenus[".hasEvents"] = false;

?>